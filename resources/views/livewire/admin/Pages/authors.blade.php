<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Auteurs</li>
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
                                <h3 class="mb-0">Liste des auteurs</h3>
                            </div>
                            <a class="btn btn-primary" role="button" href="{{ route('admin.new-author') }}">
                                Ajouter un auteur
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive" style="min-height: 20rem">
                        @if($this->authors->count())
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort">#</th>
                                        <th scope="col" class="sort">Image</th>
                                        <th scope="col" class="sort">Nom</th>
                                        <th scope="col" class="sort">Email</th>
                                        <th scope="col" class="sort">Numéro 1</th>
                                        <th scope="col" class="sort">Numéro 2</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($this->authors as $author)
                                        <tr>
                                            <td>
                                                {{ $author->id }}
                                            </td>
                                            <td>
                                                @if($author->avatar)
                                                    <img src="{{ asset('storage/authors/' .$author->avatar) }}" width="50"
                                                        height="50" class="rounded-circle" alt="{{ $author->name }}"/>
                                                @else
                                                    <img src="{{ asset('img/brand/empty-placeholder.png') }}"
                                                        class="rounded-circle" alt="Pas de photo de profil">
                                                @endif
                                            </td>
                                            <td>
                                                {{ $author->name }}
                                            </td>
                                            <td>
                                                {{ $author->email ?? "/" }}
                                            </td>
                                            <td>
                                                {{ $author->phone1 ?? "/" }}
                                            </td>
                                            <td>
                                                {{ $author->phone2 ?? "/" }}
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.edit-author', ['author' => $author ]) }}" class="btn btn-warning btn-sm"
                                                    title="Modifier" role="button" aria-pressed="true"><i class="fas fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm" data-target="#delete-author-modal"
                                                    data-toggle="modal" wire:click="setAuthor({{ $author->id }})" title="Supprimer"
                                                    role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center mt-3">
                                {{ $this->authors->links() }}
                            </div>
                        @else
                            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 20rem">
                                <span style="font-size: 5em;" class="text-danger">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <div>Aucun auteur trouvé</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------- MODALS ---------------------------------->
    <!-- Delete Author -->
	<div wire:ignore.self class="modal fade" id="delete-author-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Suppression d'un auteur</h2>
                </div>
                <div class="modal-body text-center">
                    <span class="text-danger" style="display: block;" role="alert">
                        Voulez vous vraiment supprimer l'auteur "{{ $author->name ?? "" }}" ? Cette action est irréversible.
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger btn-lg" wire:click="deleteAuthor()" data-dismiss="modal" role="button">Confirmer</a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------- END MODALS ---------------------------------->
</div>
