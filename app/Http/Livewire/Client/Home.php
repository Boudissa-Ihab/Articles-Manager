<?php

namespace App\Http\Livewire\Client;

use App\Models\Document;
use Livewire\Component;

class Home extends Component
{
    public function getLatestDocumentsProperty()
    {
        return Document::latest()
            ->take(10)
            ->get();
    }

    /* public function getDocumentsProperty()
    {
        return Document::with(['domains', 'authors'])->inRandomOrder()->take(10)->get();
    } */

    public function render()
    {
        return view('livewire.client.home')->layout('layouts.client');
    }
}
