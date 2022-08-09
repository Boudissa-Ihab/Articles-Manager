<?php

namespace App\Http\Livewire\Admin;

use App\Models\Meet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Throwable;

class EditMeet extends Component
{
    use WithFileUploads;

    protected $listeners = ['setProgram'];

    public Meet $meeting;
    public $name;
    public $hosted_by;
    public $description;
    public $place;
    public $start_date;
    public $end_date;
    public $photo;
    public $keywords;
    public $program;
    public $temporaryName;
    public $temporaryPhoto;
    const FOLDER = "meetings/";

    public function rules()
    {
        return [
            'name' => 'required|string',
            'hosted_by' => 'required|string',
            'description' => 'required|min:3',
            'place' => 'required|string',
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp,bmp|max:2048',
            'keywords' => 'nullable|string',
            'program' => 'required|min:3'
        ];
    }

    protected $messages = [
        'name.required' => "Le titre du colloque ne peut pas être vide",
        'hosted_by.required' => "Vous devez ajouter au moins un animateur",
        'description.required' => "Veuillez ajouter une description du colloque",
        'description.min' => "La description doit contenir au moins 3 caractères",
        'place.required' => "L'endroit du colloque ne peut pas être vide",
        'start_date.required' => "La date début ne peut pas être vide",
        'start_date.date' => "Veuillez ajouter une date valide pour ce champ",
        'start_date.before' => "La date début ne peut pas être supérieure à la date fin",
        'end_date.required' => "La date fin ne peut pas être vide",
        'end_date.date' => "Veuillez ajouter une date valide pour ce champ",
        'end_date.after' => "La date fin doit être supérieure à la date début",
        'photo.image' => "Le fichier à télécharger doit être une image valide",
        'photo.mimes' => "L'extension de l'image doit être l'une des suivantes: .jpeg,.png,.jpg,.svg,.webp,.bmp",
        'photo.max' => "La taille du fichier ne doit pas dépasser 2 Mo",
        'program.required' => "Veuillez ajouter un programme du colloque",
        'program.min' => "Le programme doit contenir au moins 3 caractères"
    ];

    /* public function updated($property)
    {
        $this->validateOnly($property);
    } */

    public function setProgram($content)
    {
        $this->program = $content;
        $this->submit();
    }

    public function mount()
    {
        $this->name = $this->meeting->name;
        $this->hosted_by = $this->meeting->hosted_by;
        $this->description = $this->meeting->description;
        $this->place = $this->meeting->place;
        $this->start_date = $this->meeting->start_date;
        $this->end_date = $this->meeting->end_date;
        $this->keywords = $this->meeting->keywords ?? null;
        $this->temporaryPhoto = $this->meeting->photo;
        $this->program = $this->meeting->program;
    }

    public function submit()
    {
        if($this->validate())
        {
            try{
                DB::transaction(function () {
                    $meeting = Meet::find($this->meeting->id);
                    $meeting->name = $this->name;
                    $meeting->hosted_by = $this->hosted_by;
                    $meeting->description = $this->description;
                    $meeting->place = $this->place;
                    $meeting->start_date = $this->start_date;
                    $meeting->end_date = $this->end_date;
                    $meeting->keywords = $this->keywords ?? null;
                    $meeting->program = $this->program;
                    if($this->photo)
                    {
                        Storage::delete(self::FOLDER .$this->temporaryPhoto);
                        $webpImage = Image::make($this->photo)->encode('webp');
                        $nameWithoutPunct = preg_replace("#[[:punct:]]#", "", $this->name);
                        $storeImage = Storage::put(self::FOLDER .$nameWithoutPunct. '.webp', $webpImage->__toString());
                        if($storeImage)
                            $meeting->photo = $nameWithoutPunct. '.webp';
                    } else
                        $this->meeting->photo = $this->temporaryPhoto;
                    $meeting->save();
                    alert()->success('Colloque modifié avec succès');
                    return redirect()->route('admin.meetings');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible de modifier ce colloque");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.edit-meet');
    }
}
