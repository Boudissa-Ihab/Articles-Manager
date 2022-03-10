<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Domaines</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5 ">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow  ">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Domaines de recherche</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if($this->domains->count())
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="budget">#</th>
                                        <th scope="col" class="sort" data-sort="budget">Nom</th>
                                        <th scope="col" class="sort" data-sort="budget">Code</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($this->domains as $domain)
                                        <tr>
                                            <td>
                                                {{ $domain->id ?? "" }}
                                            </td>
                                            <td>
                                                {{ $domain->name ?? "" }}
                                            </td>
                                            <td class="budget">
                                                {{ $domain->code ?? "" }}
                                            </td>
                                            <td class="text-right">
                                                <a href="" class="btn btn-warning btn-sm" data-target="#edit-domain-modal"
                                                    data-toggle="modal" wire:click="setDomain({{ $domain->id }})" title="Modifier"
                                                    role="button" aria-pressed="true"><i class="fas fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm" data-target="#delete-domain-modal"
                                                    data-toggle="modal" wire:click="setDomain({{ $domain->id }})" title="Supprimer"
                                                    role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center mt-3">
                                {{ $this->domains->links() }}
                            </div>
                        @else
                            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 20rem">
                                <span style="font-size: 5em;" class="text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <div>Aucun domaine trouvé</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @livewire('admin.add-domain')
        </div>
    </div>

    <!----------------------------------- MODALS ---------------------------------->
    <!-- Delete Domain -->
	<div wire:ignore.self class="modal fade" id="delete-domain-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Suppression d'un domaine</h2>
                </div>
                <div class="modal-body text-center">
                    <span class="text-danger" style="display: block;" role="alert">
                        Avant de supprimer ce domaine de recherche "{{ $this->domain->name ?? "" }}", notez que tous les documents liés à ce dernier seront supprimés aussi. Voulez-vous poursuivre ?
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger btn-lg" wire:click="deleteDomain()" data-dismiss="modal" role="button">Confirmer</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Details -->
	<div wire:ignore.self class="modal fade" id="edit-domain-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Modification d'un domaine</h2>
                </div>
                <div class="modal-body">
                    <form method="POST" wire:submit.prevent="editDomain">
                        <div class="form-group @error('name') has-danger @enderror">
                            <label for="name">Nom</label>
                            <input wire:model.lazy="name" type="text" class="form-control @error('name') error-input @enderror" id="name" name="name">
                            @error('name')
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group @error('code') has-danger @enderror">
                            <label for="code">Code</label>
                            <input wire:model.lazy="code" type="text" class="form-control @error('code') error-input @enderror" id="code" name="code">
                            @error('code')
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pb-2">
                            <label for="keywords">Mots-clés</label>
                            <input wire:model.lazy="keywords" class="form-control" id="keywords" name="keywords" type="text">
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>* Veuillez séparer les mots-clés par des virgules</strong>
                            </span>
                        </div>
                        <div class="float-right">
                            <button type="button" class="btn btn-primary" wire:click="editDomain()" data-dismiss="modal" role="button">Confirmer</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------- END MODALS ---------------------------------->
</div>
