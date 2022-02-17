<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use App\Rules\Name;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Throwable;

class AddAdmin extends Component
{
    public $name;
    public $email;
    public $phone1;
    public $phone2;
    public $password;
    public $password_confirmation;


    public function rules()
    {
        return [
            'name' => ['required', new Name()],
            'email' => 'required|email|unique:App\Models\Admin,email',
            'phone1' => ['required', 'unique:admins,phone1', 'unique:admins,phone2', 'different:phone2'],
            'phone2' => ['nullable', 'unique:admins,phone1', 'unique:admins,phone2', 'different:phone1'],
            'password' => 'required|string|min:8|confirmed'
        ];
    }

    protected $messages = [
        'name.required' => "Nom de l'administrateur ne peut pas être vide",
        'email.required' => "L'adresse mail ne peut pas être vide",
        'email.email' => "Veuillez entrer une adresse mail valide",
        'email.unique' => "Cette adresse mail est déjà utilisée",
        'phone1.required' => "Un numéro de téléphone doit être fourni",
        'phone1.unique' => "Ce numéro de téléphone est déjà utilisé",
        'phone2.unique' => "Ce numéro de téléphone est déjà utilisé",
        'phone1.different' => "Les 2 numéros de téléphone doivent être différents",
        'phone2.different' => "Les 2 numéros de téléphone doivent être différents",
        'password.required' => "Un mot de passe doit être fourni",
        'password.min' => "Le mot de passe doit contenir au moins 8 caractères",
        'password.confirmed' => "Veuillez ressaisir le mot de passe"
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        if($this->validate())
        {
            try{
                DB::transaction(function () {
                    Admin::create([
                        'name' => $this->name,
                        'email' => $this->email,
                        'phone1' => $this->phone1,
                        'phone2' => $this->phone2,
                        'password' => Hash::make($this->password)
                    ]);
                    alert()->success('Administrateur ajouté avec succès');
                    return redirect()->route('admin.admins');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible d'ajouter cet administrateur");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.add-admin');
    }
}
