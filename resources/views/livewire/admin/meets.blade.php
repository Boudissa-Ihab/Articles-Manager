<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Colloque & rencontres</li>
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
                                <h3 class="mb-0">Liste de colloques</h3>
                            </div>
                            <a class="btn btn-primary" role="button" href="{{ route('admin.new-meeting') }}">
                                Ajouter un colloque
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive" style="min-height: 20rem">
                        @if($this->meetings->count())
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort">#</th>
                                        <th scope="col" class="sort">Titre</th>
                                        <th scope="col" class="sort">Animé par</th>
                                        <th scope="col" class="sort">Endroit</th>
                                        <th scope="col" class="sort">Date début</th>
                                        <th scope="col" class="sort">Date fin</th>
                                        <th scope="col" class="sort"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($this->meetings as $meeting)
                                        <tr>
                                            <td>
                                                {{ $meeting->id }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.edit-meeting', ['meeting' => $meeting->id]) }}">
                                                    {{ Str::limit($meeting->name, 75) }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $meeting->hosted_by }}
                                            </td>
                                            <td>
                                                {{ $meeting->place }}
                                            </td>
                                            <td>
                                                {{ date("d-m-Y", strtotime($meeting->start_date)) }}
                                            </td>
                                            <td>
                                                {{ date("d-m-Y", strtotime($meeting->end_date)) }}
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.edit-meeting', ['meeting' => $meeting])}}" class="btn btn-warning btn-sm"
                                                     title="Modifier" role="button" aria-pressed="true"><i class="fas fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm" data-target="#delete-meeting-modal"
                                                    data-toggle="modal" wire:click="setMeeting({{ $meeting->id }})" title="Supprimer"
                                                    role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center mt-3">
                                {{ $this->meetings->links() }}
                            </div>
                        @else
                            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 20rem">
                                <span style="font-size: 5em;" class="text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <div>Aucun colloque trouvé</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------- MODALS ---------------------------------->
    <!-- Delete Meeting -->
	<div wire:ignore.self class="modal fade" id="delete-meeting-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Suppression d'un colloque</h2>
                </div>
                <div class="modal-body text-center">
                    <span class="text-danger" style="display: block;" role="alert">
                        Êtes-vous sûr de vouloir supprimer ce colloque ?
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger btn-lg" wire:click="deleteMeeting()" data-dismiss="modal" role="button">Confirmer</a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------- END MODALS ---------------------------------->
</div>
