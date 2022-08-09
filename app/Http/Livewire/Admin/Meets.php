<?php

namespace App\Http\Livewire\Admin;

use App\Models\Meet;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Meets extends Component
{
    use WithPagination;

    public $meeting;
    protected $paginationTheme = 'bootstrap';

    public function getMeetingsProperty()
    {
        return Meet::orderByDesc('start_date')->paginate(10);
    }

    public function setMeeting($value)
    {
        try{
            // If this fails, it will throw an error
            $this->meeting = Meet::find($value);
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue, impossible de sélectionner ce colloque");
        }
    }

    public function deleteMeeting()
    {
        try {
            $meeting = Meet::find($this->meeting->id);
            $meeting->delete();
            alert()->success("Colloque supprimé avec succès");
        } catch (Throwable $e) {
            alert()->error("Impossible de supprimet ce colloque");
        }
    }

    public function render()
    {
        return view('livewire.admin.meets');
    }
}
