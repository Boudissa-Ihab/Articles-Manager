<?php

namespace App\Http\Livewire\Admin;

use App\Models\Author;
use App\Models\Document;
use App\Models\Domain;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Throwable;

class AddDocument extends Component
{
    use WithFileUploads;

    public $title;
    public $domain;
    public $selectDomains = [];
    public $unselectDomains = [];
    public $author;
    public $selectAuthors = [];
    public $unselectAuthors = [];
    public $accepted_at;
    public $published_at;
    public $description;
    public $nb_pages;
    public $keywords;
    public $is_free = true;
    public $price = 0;
    public $featured = false;
    public $path;
    public $photo;
    const FOLDER = "documents/";

    public function rules()
    {
        return [
            'title' => 'required|string|min:3|unique:App\Models\Document,title',
            'accepted_at' => 'required|date|before_or_equal:today',
            'published_at' => 'required|date|before_or_equal:today',
            'description' => 'nullable|min:3',
            'nb_pages' => 'required|integer|gte:1',
            'keywords' => 'nullable|string',
            'is_free' => 'boolean',
            'price' => ['numeric', 'gte:0', Rule::requiredIf($this->is_free === false)],
            'featured' => 'boolean',
            'path' => 'file|mimes:pdf|max:204800',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp,bmp|max:2048',
            'selectDomains' => 'required|array',
            'selectDomains.*' => 'exists:App\Models\Domain,id',
            'selectAuthors' => 'required|array',
            'selectAuthors.*' => 'exists:App\Models\Author,id'
        ];
    }

    protected $messages = [
        'title.required' => "Le titre du document ne peut pas être vide",
        'title.min' => "Le titre du document doit contenir au moins 3 caractères",
        'title.unique' => "Ce titre de document est déjà utilisé",
        'accepted_at.required' => "La date d'acceptation doit être fournie",
        'accepted_at.date' => "La valeur fournie n'est pas une date valide",
        'accepted_at.before_or_equal' => "La date d'acceptation ne peut pas dépasser la date d'aujourd'hui",
        'published_at.required' => "La date de publication doit être fournie",
        'published_at.date' => "La valeur fournie n'est pas une date valide",
        'published_at.before_or_equal' => "La date de publication ne peut pas dépasser la date d'aujourd'hui",
        'description.min' => "La description doit contenir au moins 3 caractères",
        'nb_pages.required' => "Veuillez ajouter un nombre de pages pour le document",
        'nb_pages.integer' => "La valeur fournie doit être un entier valide",
        'nb_pages.gte' => "Le nombre de pages doit être supérieur ou égal 1",
        'price.numeric' => "Le prix doit être un nombre valide",
        'price.gte' => "Le prix doit être une valeur positive",
        'price.required' => "Veuillez ajouter le prix du document",
        'path.file' => "Veuillez ajouter un document valide",
        'path.max' => "La taille du fichier ne doit pas dépasser 200 Mo",
        'photo.image' => "Le fichier à télécharger doit être une image valide",
        'photos.mimes' => "L'extension de l'image doit être l'une des suivantes: .jpeg,.png,.jpg,.svg,.webp,.bmp",
        'photo.max' => "La taille du fichier ne doit pas dépasser 2 Mo",
        'selectDomains.required' => "Veuillez ajouter au moins un domaine",
        'selectDomains.exists' => "Veuillez ajouter un domaine valide",
        'selectAuthors.required' => "Veuillez ajouter au moins un auteur",
        'selectAuthors.exists' => "Veuillez ajouter un auteur valide"
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function getDomainsProperty()
    {
        return Domain::get();
    }

    public function getAuthorsProperty()
    {
        return Author::get();
    }

    public function updatedDomain($value)
    {
        if (in_array($value, $this->unselectDomains))
            unset($this->unselectDomains[$value]);

        if (($value) && !(in_array($value, $this->selectDomains)))
        {
            $this->selectDomains[$value] = $value;
            $this->domains = $this->domains->except($this->domain);
        }
    }

    public function unsetDomain($id)
    {
        if(in_array($id, $this->selectDomains))
        {
            unset($this->selectDomains[$id]);
            $this->domains[] = Domain::find($id);
        }

        if (!(in_array($id, $this->unselectDomains)))
            $this->unselectDomains[$id] = $id;
    }

    // Whenever an author "select input" is updated
    public function updatedAuthor($value)
    {
        if (in_array($value, $this->unselectAuthors))
            unset($this->unselectAuthors[$value]);

        if (($value) && !(in_array($value, $this->selectAuthors)))
        {
            $this->selectAuthors[$value] = $value;
            $this->authors = $this->authors->except($this->author);
        }
    }

    public function unsetAuthor($id)
    {
        if(in_array($id, $this->selectAuthors))
        {
            unset($this->selectAuthors[$id]);
            $this->authors[] = Author::find($id);
        }

        if (!(in_array($id, $this->unselectAuthors)))
            $this->unselectAuthors[$id] = $id;
    }

    public function submit()
    {
        if($this->validate())
        {
            try{
                DB::transaction(function () {
                    $document = new Document();
                    $document->title = $this->title;
                    $document->accepted_at = $this->accepted_at;
                    $document->published_at = $this->published_at;
                    $document->description = $this->description ?? null;
                    $document->nb_pages = $this->nb_pages;
                    $document->keywords = $this->keywords ?? null;
                    $document->is_free = $this->is_free ?? true;
                    $document->price = $document->is_free ? 0 : $this->price;
                    $document->featured = $this->featured ?? false;
                    $document->download_count = 0;
                    $document->last_download = null;

                    /* Saving document as PDF file */
                    $storeDocument = $this->path->storeAs(self::FOLDER, $document->title .'.pdf');
                    if($storeDocument)
                        $document->path = $document->title. '.pdf';

                    /* Saving document image (webp) */
                    $webpImage = Image::make($this->photo)->encode('webp');
                    $storeImage = Storage::put(self::FOLDER .$document->title. '.webp', $webpImage->__toString());
                    if($storeImage)
                        $document->photo = $document->title. '.webp';
                    $document->save();

                    $document->domains()->attach($this->selectDomains);
                    $document->authors()->attach($this->selectAuthors);
                    alert()->success('Document ajouté avec succès');
                    return redirect()->route('admin.documents');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible d'ajouter ce document");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.add-document');
    }
}
