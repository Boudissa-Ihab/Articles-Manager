<?php

namespace App\Http\Livewire\Admin\Pages;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Component;

class ResetPassword extends Component
{
    public $email;
    public $password;
    public $password_confirmation;
    public $token;

    protected $rules = [
        'password' => 'required|confirmed'
    ];

    protected $messages = [
        'password.required' => "Le mot de passe ne peut pas être vide",
        'password.confirmed' => "Entrez à nouveau votre mot de passe"
    ];

    protected $queryString = [
        'email' => ['except' => ''],
        'token' => ['except' => '']
    ];

    public function submit()
    {
        $validated = $this->validate();
        $credentials = [
            'email' => $this->email,
            'token' => $this->token,
            'password' => $validated['password']
        ];

        $status = Password::reset($credentials, function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

        if($status === Password::PASSWORD_RESET)
        {
            session()->flash('success', __($status));
            return redirect()->route('login');
        }
        else
            session()->flash('error', __($status));
    }

    public function render()
    {
        return view('livewire.admin.pages.reset-password')->layout('layouts.auth');
    }
}
