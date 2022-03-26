<?php

namespace App\Http\Livewire\Client;

use App\Models\Author;
use Livewire\Component;
use Livewire\WithPagination;

class Authors extends Component
{
    use WithPagination;

    public $filter = "";
    protected $paginationTheme = 'bootstrap';

    public function getAuthorsProperty()
    {
        return Author::when($this->filter != "", function ($query) {
            switch($this->filter) {
                case "AZ":
                    $query->orderBy('name');
                break;
                case "ZA":
                    $query->orderByDesc('name');
                break;
            }
        })->paginate(20);
    }

    public function render()
    {
        return view('livewire.client.authors')->layout('layouts.client');
    }
}
