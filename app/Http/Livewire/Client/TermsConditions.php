<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class TermsConditions extends Component
{
    public function render()
    {
        return view('livewire.client.terms-conditions')->layout('layouts.client');
    }
}
