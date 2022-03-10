<?php

namespace App\Http\Livewire\Client;

use App\Models\Domain;
use Livewire\Component;

class Domains extends Component
{
    public function getDomainsProperty()
    {
        return Domain::withCount('documents')->get();
    }

    public function render()
    {
        return view('livewire.client.domains')->layout('layouts.client');
    }
}
