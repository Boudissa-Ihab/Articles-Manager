<div class="col-xl-4">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nouveau domaine de recherche</h3>
                </div>
            </div>
        </div>
        <div class="mx-4 mb-4">
            <form method="POST" wire:submit.prevent="submit" id="addDomainForm" name="addDomainForm">
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
                    <label for="code">Code <sup>(optionnel)</sup></label>
                    <input wire:model.lazy="code" type="text" class="form-control @error('code') error-input @enderror" id="code" name="code">
                    @error('code')
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group pb-2">
                    <label for="keywords">Mots-clés <sup>(optionnels)</sup></label>
                    <input wire:model.lazy="keywords" class="form-control" id="keywords" name="keywords" type="text">
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>* Veuillez séparer les mots-clés par des virgules</strong>
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="reset" class="btn btn-outline-default">Réinitialiser</button>
            </form>
        </div>
    </div>
</div>
