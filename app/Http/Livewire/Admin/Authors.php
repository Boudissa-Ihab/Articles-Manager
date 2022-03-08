<?php

namespace App\Http\Livewire\Admin;

use App\Models\Author;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Authors extends Component
{
    use WithPagination;
    public $author;
    protected $paginationTheme = 'bootstrap';

    public function getAuthorsProperty()
    {
        return Author::orderBy('id')->paginate(10);
    }

    /*
     *  Set the author property to the ID sent in from the delete button in list
     */
    public function setAuthor($value)
    {
        try{
            // If this fails, it will throw an error
            $this->author = Author::find($value);
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue, impossible de sélectionner l'auteur");
        }
    }

    public function deleteAuthor()
    {
        try {
            $author = Author::find($this->author->id);
            $author->delete();
            alert()->success("Auteur supprimé avec succès");
        } catch (Throwable $e) {
            alert()->error("Impossible de supprimet cet auteur");
        }
    }

    public function render()
    {
        return view('livewire.admin.authors');
    }
}
