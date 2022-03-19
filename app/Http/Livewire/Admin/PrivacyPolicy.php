<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Throwable;

class PrivacyPolicy extends Component
{
    public $privacyPolicy;

    public function save()
    {
        try {
            setting(['privacy_policy' => $this->privacyPolicy]);
            setting()->save();
            alert()->success("Contenu enregistré avec succès");
            return redirect()->route('admin.dashboard');
        } catch(Throwable $th) {
            alert()->error("Impossible de sauvegarder ce contenu");
        }
    }

    public function render()
    {
        return view('livewire.admin.privacy-policy');
    }
}
