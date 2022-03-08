<?php

namespace App\Http\Livewire\Admin;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class ContactUs extends Component
{
    use WithPagination;

    public $contact;
    protected $paginationTheme = 'bootstrap';

    public function getContactsProperty()
    {
        return Message::orderByDesc('created_at')->paginate(20);
    }

    public function setContact($value)
    {
        try{
            // If this fails, it will throw an error
            $this->contact = Message::find($value);
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue, impossible de sélectionner ce message");
        }
    }

    public function render()
    {
        return view('livewire.admin.contact-us');
    }
}
