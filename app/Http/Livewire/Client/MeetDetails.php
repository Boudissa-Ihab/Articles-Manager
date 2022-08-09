<?php

namespace App\Http\Livewire\Client;

use App\Models\Meet;
use Livewire\Component;

class MeetDetails extends Component
{
    public Meet $meeting;


    public function render()
    {
        return view('livewire.client.meet-details')->layout('layouts.client');
    }
}
