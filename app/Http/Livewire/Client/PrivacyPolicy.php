<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.client.privacy-policy')->layout('layouts.client');
    }
}
