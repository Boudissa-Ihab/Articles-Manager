<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\Domain;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class AddDomain extends Component
{
    public $name;
    public $code;
    public $keywords;

    public function rules()
    {
        return [
            'name' => 'required|string|unique:App\Models\Domain,name',
            'code' => 'nullable|string|min:2|unique:App\Models\Domain,code',
            'keywords' => 'nullable|string'
        ];
    }

    protected $messages = [
        'name.required' => "Nom de domaine ne peut pas être vide",
        'name.unique' => "Nom de domaine déjà utilisé",
        'code.min' => "Le code doit contenir au moins 2 caractères",
        'code.unique' => "Code de domaine déjà utilisé"
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        if($this->validate())
        {
            try{
                DB::transaction(function () {
                    Domain::create([
                        'name' => $this->name,
                        'code' => $this->code ?? '',
                        'keywords' => $this->keywords ?? ''
                    ]);
                    alert()->success('Domaine ajouté avec succès');
                    return redirect()->route('admin.domains');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible d'ajouter ce domaine de recherche");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.pages.add-domain');
    }
}
