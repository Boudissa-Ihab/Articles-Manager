<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class NotFound extends Component
{
    public function render()
    {
        return view('livewire.client.not-found')->layout('layouts.client');
    }
}
