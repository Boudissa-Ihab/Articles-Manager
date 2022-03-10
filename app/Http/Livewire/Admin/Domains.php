<?php

namespace App\Http\Livewire\Admin;

use App\Models\Domain;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Domains extends Component
{
    use WithPagination;

    public $domain;
    public $name;
    public $code;
    public $keywords;
    protected $paginationTheme = 'bootstrap';

    public function rules()
    {
        return [
            'name' => ['required', 'string', Rule::unique('App\Models\Domain', 'name')->ignore($this->domain)],
            'code' => ['nullable', 'string', 'min:2', Rule::unique('App\Models\Domain', 'code')->ignore($this->domain)],
            'keywords' => 'nullable|string'
        ];
    }

    protected $messages = [
        'name.required' => "Nom de domaine ne peut pas être vide",
        'name.unique' => "Nom de domaine déjà utilisé",
        'code.min' => "Le code doit contenir au moins 2 caractères",
        'code.unique' => "Code de domaine déjà utilisé"
    ];

    public function getDomainsProperty()
    {
        return Domain::orderBy('id')->paginate(10);
    }

    /*
     *  Set the domain property to the ID sent in from the delete button in list
     */
    public function setDomain($value)
    {
        try{
            // If this fails, it will throw an error
            $domain = Domain::find($value);
            $this->domain = $value;
            $this->name = $domain->name;
            $this->code = $domain->code;
            $this->keywords = $domain->keywords;
        } catch(Throwable $th) {
            alert()->error("Une erreur est survenue, impossible de sélectionner ce domaine");
        }
    }

    public function deleteDomain()
    {
        try {
            $domain = Domain::find($this->domain);
            $domain->delete();
            alert()->success("Domaine supprimé avec succès");
        } catch (Throwable $e) {
            alert()->error("Impossible de supprimet ce domaine");
        }
    }

    public function editDomain()
    {
        if($this->validate())
        {
            try{
                DB::transaction(function () {
                    $domain = Domain::find($this->domain);
                    $domain->update([
                        'name' => $this->name ?? $domain->name,
                        'code' => $this->code ?? $domain->code,
                        'keywords' => $this->keywords ?? $domain->keywords
                    ]);
                    alert()->success('Domaine modifié avec succès');
                });
            } catch(Throwable $th) {
                alert()->error("Impossible d'ajouter ce domaine de recherche");
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.domains');
    }
}
