<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Administrateurs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5 ">
            <div class="col mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Liste des administrateurs</h3>
                            </div>
                            <a class="btn btn-primary" role="button" href="{{ route('admin.admins.create') }}">
                                Ajouter un admin
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive" style="min-height: 20rem">
                        @if($this->admins->count())
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort">#</th>
                                        <th scope="col" class="sort">Nom & Prénom</th>
                                        <th scope="col" class="sort">Email</th>
                                        <th scope="col" class="sort">Numéro 1</th>
                                        <th scope="col" class="sort">Numéro 2</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($this->admins as $admin)
                                        <tr>
                                            <td>
                                                {{ $admin->id }}
                                            </td>
                                            <td>
                                                {{ $admin->name }}
                                            </td>
                                            <td>
                                                {{ $admin->email }}
                                            </td>
                                            <td>
                                                {{ $admin->phone1 }}
                                            </td>
                                            <td>
                                                {{ $admin->phone2 ?? '/' }}
                                            </td>
                                            <td class="text-right">
                                                <a href="" class="btn btn-info btn-sm" data-target="#admin-details-modal"
                                                    data-toggle="modal" wire:click="setAdmin({{ $admin->id }})" title="Détails"
                                                    role="button" aria-pressed="true"><i class="fas fa-info-circle"></i>
                                                </a>
                                                @if (auth()->id() != $admin->id)
                                                    <a href="" class="btn btn-danger btn-sm" data-target="#delete-admin-modal"
                                                        data-toggle="modal" wire:click="setAdmin({{ $admin->id }})" title="Supprimer"
                                                        role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i>
                                                    </a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center mt-3">
                                {{ $this->admins->links() }}
                            </div>
                        @else
                            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 20rem">
                                <span style="font-size: 5em;" class="text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <div>Aucun admin trouvé</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------- MODALS ---------------------------------->
    <!-- Delete Admin -->
    @if(isset($this->admin))
        <div wire:ignore.self class="modal fade" id="delete-admin-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Suppression d'un administrateur</h2>
                    </div>
                    <div class="modal-body text-center">
                        Êtes-vous sûr de vouloir supprimer l'administrateur "{{ $this->admin->name ?? "" }}" ? Cette action est irréversible
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger btn-lg" wire:click="deleteAdmin()" data-dismiss="modal" role="button">Confirmer</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Details -->
        <div wire:ignore.self class="modal fade" id="admin-details-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if($this->admin->avatar)
                                    <img src="{{ asset('storage/admins/' .$this->admin->avatar) }}" alt="{{ $this->admin->name }}" class="rounded-circle" width="150">
                                @else
                                    <img src="{{ asset('img/brand/empty-placeholder.png') }}" alt="Pas de photo de profil">
                                @endif
                                <div class="mt-3">
                                    <h2>{{ $this->admin->name ?? "" }}</h2>
                                    <p class="text-muted mb-1">Numéro(s) de téléphone</p>
                                    <p class="text-muted font-size-sm">{{ $this->admin->phone1 ?? "" }}
                                        @if(isset($this->admin->phone2))
                                            / {{ $this->admin->phone2 ?? "" }}
                                        @endif
                                    </p>
                                    <a href="mailto:{{ $this->admin->email ?? "" }}">
                                        <button class="btn btn-primary">Email</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!----------------------------------- END MODALS ---------------------------------->
</div>
