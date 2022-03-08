<?php

namespace App\Http\Livewire\Client;

use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class ContactUs extends Component
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ];
    }

    protected $messages = [
        'name.required' => "Le nom ne peut pas être vide",
        'email.required' => "L'adresse mail ne peut pas être vide",
        'email.email' => "Veuillez entrer une adresse mail valide",
        'message.required' => "Le contenu du message ne peut pas être vide"
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function send()
    {
        if ($this->validate()) {
            try {
                DB::transaction(function () {
                    Message::create([
                        'name' => $this->name ?? "",
                        'email' => $this->email ?? "",
                        'message' => $this->message ?? ""
                    ]);
                    session()->flash("success", "Message envoyé avec succès");
                    return redirect()->route('contact-us');
                });
            } catch (Throwable $e) {
                session()->flash("error", "Impossible d'envoyer ce message, veuillez réessayer");
            }
        }
    }

    public function render()
    {
        return view('livewire.client.contact-us')->layout('layouts.client');
    }
}
