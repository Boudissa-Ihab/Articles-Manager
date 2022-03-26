<?php

namespace App\Http\Livewire\Client;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class DomainDetails extends Component
{
    use WithPagination;

    public Domain $domain;
    public $filter = "";

    public function getDomainDocumentsProperty()
    {
        return $this->domain->documents()
        ->when($this->filter != "", function ($query) {
            switch($this->filter) {
                case "AZ":
                    $query->orderBy('title');
                break;
                case "ZA":
                    $query->orderByDesc('title');
                break;
                case "first_accepted":
                    $query->orderBy('accepted_at');
                break;
                case "last_accepted":
                    $query->orderByDesc('accepted_at');
                break;
                case "first_published":
                    $query->orderBy('published_at');
                break;
                case "last_published":
                    $query->orderByDesc('published_at');
                break;
                case "featured":
                    $query->where('featured', 1);
                break;
            }
        })->paginate(15);
    }

    public function render()
    {
        return view('livewire.client.domain-details')->layout('layouts.client');
    }
}
