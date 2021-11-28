<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ForgetPassword extends Component
{
    public function render()
    {
        return view('livewire.admin.forget-password')->layout('layouts.auth');
    }
}
