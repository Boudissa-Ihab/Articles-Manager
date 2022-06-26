<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Throwable;

class HomeInfo extends Component
{
    public $association;
    public $organization;

    public function mount()
    {
        $this->association = setting('association') ?? "";
        $this->organization = setting('organization') ?? "";
    }

    public function save()
    {
        try {
            setting([
                'association' => $this->association ?? "",
                'organization' => $this->organization ?? ""
            ]);
            setting()->save();
            alert()->success("Information enregistrée avec succès");
            return redirect()->route('admin.home-info');
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue lors de l'enregistrement de ces informations");
        }
    }

    public function render()
    {
        return view('livewire.admin.home-info');
    }
}
