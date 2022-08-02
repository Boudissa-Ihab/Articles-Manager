<?php

namespace App\Http\Livewire\Client;

use App\Models\Domain;
use Livewire\Component;

class Footer extends Component
{
    public function getDomainsProperty()
    {
        return Domain::get();
    }

    public function render()
    {
        return view('livewire.client.footer');
    }
}
