<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Admins extends Component
{
    use WithPagination;
    public $admin;
    protected $paginationTheme = 'bootstrap';

    public function getAdminsProperty()
    {
        return Admin::orderBy('id')->paginate(10);
    }

    /*
     *  Set the admin property to the ID sent in from the delete button in list
     */
    public function setAdmin($value)
    {
        try{
            // If this fails, it will throw an error
            $this->admin = Admin::find($value);
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue, impossible de sélectionner l'administrateur");
        }
    }

    public function deleteAdmin()
    {
        try {
            $admin = Admin::find($this->admin->id);
            $admin->delete();
            alert()->success("Administrateur supprimé avec succès");
        } catch (Throwable $e) {
            alert()->error("Impossible de supprimet cet administrateur");
        }
    }

    public function render()
    {
        return view('livewire.admin.admins');
    }
}
