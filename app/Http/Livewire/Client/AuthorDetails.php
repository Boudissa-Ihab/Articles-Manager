<?php

namespace App\Http\Livewire\Client;

use App\Models\Author;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorDetails extends Component
{
    use WithPagination;

    public Author $author;

    public function getAuthorDocumentsProperty()
    {
        return $this->author->documents()->paginate(10);
    }

    public function render()
    {
        return view('livewire.client.author-details')->layout('layouts.client');
    }
}
