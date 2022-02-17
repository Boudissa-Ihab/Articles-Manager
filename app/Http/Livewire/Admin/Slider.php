<?php

namespace App\Http\Livewire\Admin;

use App\Models\Document;
use App\Models\Slider as SliderModel;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Throwable;

class Slider extends Component
{
    use WithFileUploads;

    /* public $document;
    public $selectDocuments = [];
    public $unselectDocuments = []; */

    public $slide;
    public $photos = [];
    const FOLDER = "public/slides/";

    public function rules()
    {
        return [
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,svg,webp,bmp|max:100000',
            /* 'selectDocuments' => 'required|array',
            'selectDocuments.*' => 'exists:App\Models\Document,id' */
        ];
    }

    protected $messages = [
        'photos.required' => "Veuillez ajouter au moins une image",
        'photos.image' => "Le fichier à télécharger doit être une image valide",
        'photos.mimes' => "L'extension de l'image doit être l'une des suivantes: .jpeg,.png,.jpg,.svg,.webp,.bmp",
        'photos.max' => "La taille de l'image ne doit pas dépasser 100 Mo",
        /* 'selectDocuments.required' => "Veuillez ajouter au moins un document",
        'selectDocuments.exists' => "Veuillez ajouter un document valide" */
    ];

    public function getSlidesProperty()
    {
        return SliderModel::get();
    }

    /* public function getDocumentsProperty()
    {
        return Document::get();
    }

    public function updatedDocument($value)
    {
        if (in_array($value, $this->unselectDocuments))
            unset($this->unselectDocuments[$value]);

        if (($value) && !(in_array($value, $this->selectDocuments)))
        {
            $this->selectDocuments[$value] = $value;
            $this->documents = $this->documents->except($this->document);
        }
    }

    public function unsetDocument($id)
    {
        if(in_array($id, $this->selectDocuments))
        {
            unset($this->selectDocuments[$id]);
            $this->documents[] = Document::find($id);
        }

        if (!(in_array($id, $this->unselectDocuments)))
            $this->unselectDocuments[$id] = $id;
    } */

    public function setSlide($value)
    {
        try{
            // If this fails, it will throw an error
            $this->slide = SliderModel::find($value);
            $this->slide = $value;
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue lors de la suppression du slide");
        }
    }

    public function deleteSlide()
    {
        try {
            $slide = SliderModel::find($this->slide);
            $slide->delete();
            alert()->success("Slide supprimé avec succès");
            return redirect()->route('admin.slider');
        } catch (Throwable $e) {
            alert()->error("Impossible de supprimet ce slide");
        }
    }

    public function updatedPhotos()
    {
        if($this->validate())
        {
            try {
                foreach($this->photos as $photo)
                {
                    /* Saving slide image */
                    $webpImage = Image::make($photo)->encode('webp');
                    $storeImage = Storage::put(self::FOLDER .$webpImage->filename. '.webp', $webpImage->__toString());
                    if($storeImage)
                        SliderModel::create([
                            'photo' => $webpImage->filename. '.webp'
                        ]);
                }
                alert()->success('Slides ajoutés avec succès');
                return redirect()->route('admin.slider');

            } catch(Throwable $th) {
                alert()->error("Impossible d'ajouter ces slides");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.slider');
    }
}
