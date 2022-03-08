<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Throwable;

class TermsConditions extends Component
{
    public $termsConditions;

    public function save()
    {
        try {
            setting(['terms_and_conditions' => $this->termsConditions]);
            setting()->save();
            alert()->success("Contenu enregistré avec succès");
            return redirect()->route('admin.dashboard');
        } catch(Throwable $th) {
            alert()->error("Impossible de sauvegarder ce contenu");
        }

    }

    public function render()
    {
        return view('livewire.admin.terms-conditions');
    }
}
