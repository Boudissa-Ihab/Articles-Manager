<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Editor extends Component
{
    public $editor;
    public $section;

    public function mount()
    {
        switch($this->editor)
        {
            case "association":
                $this->section = "Association";
            break;
            case "organization":
                $this->section = "Organisation";
            break;
            case "terms-and-conditions":
                $this->section = "Termes et conditions";
            break;
            case "privacy-policy":
                $this->section = "Politique de confidentialité";
            break;
        }
    }

    public function render()
    {
        return view('livewire.client.editor')->layout('layouts.client');
    }
}
