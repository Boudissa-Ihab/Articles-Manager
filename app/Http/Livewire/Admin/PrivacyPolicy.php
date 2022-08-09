<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Throwable;

class PrivacyPolicy extends Component
{
    protected $listeners = ['setContent'];
    public $privacyPolicy;

    public function setContent($content)
    {
        $this->privacyPolicy = $content;
        $this->save();
    }

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
