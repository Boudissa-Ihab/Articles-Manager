<?php

namespace App\Http\Livewire\Admin;

use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Throwable;

class EditAuthor extends Component
{
    use WithFileUploads;

    public Author $author;
    public $name;
    public $email;
    public $phone1;
    public $phone2;
    public $biography;
    public $avatar;     // Used to store the new image (after update)
    public $temporaryImage;     // Used to store old author's image
    public $temporaryName;     // Used to store author's name before update
                            // in order to delete the related image if changed
    const FOLDER = "authors/";

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => ['nullable', 'email', Rule::unique('App\Models\Author', 'email')->ignore($this->author->id)],
            'phone1' => ['nullable', Rule::unique('App\Models\Author', 'phone1')->ignore($this->author->id),
                        Rule::unique('App\Models\Author', 'phone2')->ignore($this->author->id), 'different:phone2'],
            'phone2' => ['nullable', Rule::unique('App\Models\Author', 'phone1')->ignore($this->author->id),
                        Rule::unique('App\Models\Author', 'phone2')->ignore($this->author->id), 'different:phone1'],
            'biography' => 'required|min:3',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp,bmp|max:2048'
        ];
    }

    protected $messages = [
        'name.required' => "Nom de l'auteur ne peut pas être vide",
        'email.email' => "Veuillez entrer une adresse mail valide",
        'email.unique' => "Cette adresse mail est déjà utilisée",
        'phone1.unique' => "Ce numéro de téléphone est déjà utilisé",
        'phone2.unique' => "Ce numéro de téléphone est déjà utilisé",
        'phone1.different' => "Les 2 numéros de téléphone doivent être différents",
        'phone2.different' => "Les 2 numéros de téléphone doivent être différents",
        'biography.required' => "Ajoutez une description pour cet auteur",
        'avatar.image' => "Le fichier à télécharger doit être une image valide",
        'photos.mimes' => "L'extension de l'image doit être l'une des suivantes: .jpeg,.png,.jpg,.svg,.webp,.bmp",
        'avatar.max' => "La taille du fichier ne doit pas dépasser 2 Mo"
    ];

    public function mount()
    {
        $this->name = $this->author->name;
        $this->email = $this->author->email ?? null;
        $this->phone1 = $this->author->phone1 ?? null;
        $this->phone2 = $this->author->phone2 ?? null;
        $this->biography = $this->author->biography;
        $this->temporaryImage = $this->author->avatar;
        $this->temporaryName = $this->author->name;
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        if($this->validate())
        {
            try{
                DB::transaction(function () {
                    $this->author->name = $this->name ?? $this->author->name;
                    $this->author->email = $this->email ?? $this->author->email;
                    $this->author->phone1 = $this->phone1 ?? $this->author->phone1;
                    $this->author->phone2 = $this->phone2 ?? $this->author->phone2;
                    $this->author->biography = $this->biography ?? $this->author->biography;

                    /* Saving author image */
                    if($this->avatar)
                    {
                        // Delete author's old image, this is especially useful
                        // when we change an author's name & picture, the stored
                        // picture with his old name will be deleted in this case
                        Storage::delete(self::FOLDER .$this->temporaryName. '.webp');
                        $webpImage = Image::make($this->avatar)->encode('webp');
                        $storeImage = Storage::put(self::FOLDER .$this->author->name. '.webp', $webpImage->__toString());
                        if($storeImage)
                            $this->author->avatar = $this->author->name. '.webp';
                    } else {
                        $this->author->avatar = $this->temporaryImage;
                    }
                    $this->author->save();
                    alert()->success('Auteur modifié avec succès');
                    return redirect()->route('admin.authors');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible de modifier cet auteur");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.edit-author');
    }
}
