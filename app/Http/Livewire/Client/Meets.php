<?php

namespace App\Http\Livewire\Client;

use App\Models\Meet;
use Livewire\Component;
use Livewire\WithPagination;

class Meets extends Component
{
    use WithPagination;

    public $filter = "";
    protected $paginationTheme = 'bootstrap';

    public function getMeetingsProperty()
    {
        return Meet::when($this->filter != "", function ($query) {
            switch($this->filter) {
                case "AZ":
                    $query->orderBy('name');
                break;
                case "ZA":
                    $query->orderByDesc('name');
                break;
                case "first":
                    $query->orderBy('start_date');
                break;
                case "last":
                    $query->orderByDesc('start_date');
                break;
            }
        })->paginate(20);
    }

    public function render()
    {
        return view('livewire.client.meets')->layout('layouts.client');
    }
}
