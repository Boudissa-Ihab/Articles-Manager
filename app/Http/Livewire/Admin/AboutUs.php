<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Throwable;

class AboutUs extends Component
{
    protected $listeners = ['setContent'];
    public $aboutUs;

    public function setContent($content)
    {
        $this->aboutUs = $content;
        $this->save();
    }

    public function save()
    {
        try {
            setting(['about_us' => $this->aboutUs]);
            setting()->save();
            alert()->success("Contenu enregistré avec succès");
            return redirect()->route('admin.dashboard');
        } catch(Throwable $th) {
            alert()->error("Impossible de sauvegarder ce contenu");
        }

    }

    public function render()
    {
        return view('livewire.admin.about-us');
    }
}
