<?php

namespace App\Http\Livewire\Admin;

use App\Models\Author;
use App\Rules\Name;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Throwable;

class AddAuthor extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone1;
    public $phone2;
    public $biography;
    public $avatar;
    const FOLDER = "public/authors/";


    public function rules()
    {
        return [
            'name' => ['required', new Name()],
            'email' => 'nullable|email|unique:App\Models\Author,email',
            'phone1' => ['nullable', 'unique:authors,phone1', 'unique:authors,phone2', 'different:phone2'],
            'phone2' => ['nullable', 'unique:authors,phone1', 'unique:authors,phone2', 'different:phone1'],
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
                    $author = new Author();
                    $author->name = $this->name;
                    $author->email = $this->email ?? null;
                    $author->phone1 = $this->phone1 ?? null;
                    $author->phone2 = $this->phone2 ?? null;
                    $author->biography = $this->biography;
                    /* Saving author image */
                    $webpImage = Image::make($this->avatar)->encode('webp');
                    $storeImage = Storage::put(self::FOLDER .$author->name. '.webp', $webpImage->__toString());
                    if($storeImage)
                        $author->avatar = $author->name. '.webp';
                    $author->save();
                    alert()->success('Auteur ajouté avec succès');
                    return redirect()->route('admin.authors');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible d'ajouter cet auteur");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.add-author');
    }
}
