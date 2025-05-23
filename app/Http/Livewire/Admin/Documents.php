<?php

namespace App\Http\Livewire\Admin;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Documents extends Component
{
    use WithPagination;

    public $document;
    protected $paginationTheme = 'bootstrap';

    public function getDocumentsProperty()
    {
        return Document::orderBy('id')->paginate(10);
    }

    public function setDocument($value)
    {
        try{
            // If this fails, it will throw an error
            $this->document = Document::find($value);
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue, impossible de sélectionner ce document");
        }
    }

    public function deleteDocument()
    {
        try {
            $document = Document::find($this->document->id);
            $document->delete();
            alert()->success("Document supprimé avec succès");
        } catch (Throwable $e) {
            alert()->error("Impossible de supprimet ce document");
        }
    }

    public function render()
    {
        return view('livewire.admin.documents');
    }
}
