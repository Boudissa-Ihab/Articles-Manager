<?php

namespace App\Http\Livewire\Client;

use App\Models\Document;
use App\Models\Domain;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Throwable;

class DocumentDetails extends Component
{
    public Document $document;
    const FOLDER = "documents/";

    public function getDomainsProperty()
    {
        return Domain::withCount('documents')->get();
    }

    public function download($file)
    {
        try{
            $document = Document::find($file['id']);
            return Storage::download(self::FOLDER . $document->path);
        } catch(Throwable $th) {
            session()->flash("Impossible de télécharger ce fichier");
        }
    }

    public function render()
    {
        return view('livewire.client.document-details')->layout('layouts.client');
    }
}
