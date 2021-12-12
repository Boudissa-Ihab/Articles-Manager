<?php

namespace App\Http\Livewire\Admin\Pages;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgetPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|exists:App\Models\User,email',
    ];

    protected $messages = [
        'email.required' => "L'adresse mail ne peut pas être vide",
        'email.email' => "Veuillez entrer une adresse mail valide",
        'email.exists' => "Cette adresse mail n'existe pas"
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function resetPassword()
    {
        $validatedData = $this->validate();
        $status = Password::sendResetLink($validatedData);

        if($status === Password::RESET_LINK_SENT)
            session()->flash('success', "Un lien de recupération à été envoyé à votre email");
        else
            session()->flash('error',  "Impossible d'envoyer un email de récupération");
    }

    public function render()
    {
        return view('livewire.admin.pages.forget-password')->layout('layouts.auth');
    }
}
