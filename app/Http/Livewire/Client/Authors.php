<?php

namespace App\Http\Livewire\Client;

use App\Models\Author;
use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class Authors extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function getAuthorsProperty()
    {
        return Author::orderByDesc('name')->paginate(20);
    }

    public function render()
    {
        return view('livewire.client.authors')->layout('layouts.client');
    }
}
