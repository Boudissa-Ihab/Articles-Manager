<?php

namespace App\Http\Livewire\Client;

use App\Models\Document;
use App\Models\Domain;
use Livewire\Component;

class Home extends Component
{
    public function getLatestDocumentsProperty()
    {
        $domains = Domain::with('documents')->get();
        $latestDocuments = [];
        foreach($domains as $domain)
            if($domain->documents->last())
                array_push($latestDocuments, $domain->documents->last());

        return $latestDocuments;
    }

    public function getDocumentsProperty()
    {
        return Document::with(['domains', 'authors'])->inRandomOrder()->take(10)->get();
    }

    public function render()
    {
        return view('livewire.client.home')->layout('layouts.client');
    }
}
