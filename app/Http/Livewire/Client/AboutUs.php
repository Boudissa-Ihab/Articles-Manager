<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.client.about-us')->layout('layouts.client');
    }
}
