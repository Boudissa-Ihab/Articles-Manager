<?php

namespace App\Http\Livewire\Client\Components;

use App\Models\Document;
use Livewire\Component;

class NewFeaturedDocuments extends Component
{
    public function getFeaturedDocumentsProperty()
    {
        return Document::where('featured', 1)
                ->inRandomOrder()
                ->limit(5)
                ->get();
    }

    public function getLatestDocumentsProperty()
    {
        return Document::latest()
                ->take(5)
                ->get();
    }

    public function render()
    {
        return view('livewire.client.components.new-featured-documents');
    }
}
