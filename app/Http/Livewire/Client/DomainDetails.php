<?php

namespace App\Http\Livewire\Client;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class DomainDetails extends Component
{
    use WithPagination;

    public Domain $domain;

    public function getDomainDocumentsProperty()
    {
        return $this->domain->documents()->paginate(15);
    }

    public function render()
    {
        return view('livewire.client.domain-details')->layout('layouts.client');
    }
}
