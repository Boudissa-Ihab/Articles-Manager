<?php

namespace App\Http\Livewire\Client;

use App\Models\Slider as SliderModel;
use Livewire\Component;

class Slider extends Component
{
    public function getSlidersProperty()
    {
        return SliderModel::get();
    }

    public function render()
    {
        return view('livewire.client.slider');
    }
}
