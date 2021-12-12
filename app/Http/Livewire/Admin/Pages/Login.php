<?php

namespace App\Http\Livewire\Admin\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'remember' => 'nullable|boolean'
    ];

    protected $messages = [
        'email.required' => "L'adresse mail ne peut pas être vide",
        'email.email' => "Veuillez entrer une adresse mail valide",
        'password.required' => "Le mot de passe ne peut pas être vide"
    ];

    public function updated($property)
    {
        // Add real-time validation
        $this->validateOnly($property);
    }

    public function login()
    {
        $validatedData = $this->validate();
        $credentials = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password']
        ];

        if (Auth::attempt($credentials, $validatedData['remember']))
            return redirect()->route('dashboard');

        session()->flash("error", "Adresse mail / mot de passe erroné(s)");
    }

    public function render()
    {
        return view('livewire.admin.pages.login')->layout('layouts.auth');
    }
}
