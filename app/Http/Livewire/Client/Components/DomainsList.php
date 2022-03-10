<?php

namespace App\Http\Livewire\Client\Components;

use App\Models\Domain;
use Livewire\Component;

class DomainsList extends Component
{
    public function getDomainsProperty()
    {
        return Domain::withCount('documents')->get();
    }

    public function render()
    {
        return view('livewire.client.components.domains-list');
    }
}
