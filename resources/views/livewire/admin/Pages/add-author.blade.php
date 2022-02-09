<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="{{ route('admin.authors') }}">Auteurs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter un auteur</li>
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
                <div class="card shadow  ">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Nouvel auteur</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mx-4 mb-4">
                        <form method="POST" wire:submit.prevent="submit" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group @error('name') has-danger @enderror col-md-6">
                                    <label for="name">Nom complet</label>
                                    <input wire:model.lazy="name" type="text" id="name" name="name"
                                        class="form-control @error('name') error-input @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('email') has-danger @enderror col-md-6">
                                    <label class="form-control-label" for="input-email">Adresse Mail <sup>(optionnelle)</sup></label>
                                    <input wire:model.lazy="email" type="email" name="email" id="email"
                                        class="form-control form-control-alternative @error('email') error-input @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('phone1') has-danger @enderror col-md-6">
                                    <label class="form-control-label" for="input-phone-1">Numéro de Téléphone 1 <sup>(optionnel)</sup></label>
                                    <input wire:model.lazy="phone1" type="text" name="phone1" id="phone1"
                                        class="form-control form-control-alternative @error('phone1') error-input @enderror">
                                    @error('phone1')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('phone2') has-danger @enderror col-md-6">
                                    <label class="form-control-label" for="input-phone-2">Numéro de Téléphone 2 <sup>(optionnel)</sup></label>
                                    <input wire:model.lazy="phone2" type="text" name="phone2" id="phone2"
                                        class="form-control form-control-alternative @error('phone2') error-input @enderror">
                                    @error('phone2')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('biography') has-danger @enderror col">
                                    <label for="biography">Biographie</label>
                                    <textarea wire:model.lazy="biography" id="biography" name="biography" rows="7"
                                        class="form-control @error('biography') error-input @enderror"></textarea>
                                    @error('biography')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label for="keywords">Mots-clés <sup>(optionnels)</sup></label>
                                <input wire:model.lazy="keywords" type="text" class="form-control" id="keywords" name="keywords">
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>* Veuillez séparer les mots-clés par des virgules</strong>
                                </span>
                            </div> --}}
                            <div class="form-row">
                                <label for="avatar" class="col-form-label mr-2">Image : </label>
                                <div class="file-upload blue-btn btn width100">
                                    <span>Choisir une photo</span>
                                    <div
                                    x-data="{ isUploading: false, progress: 0 }"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                        <!-- File Input -->
                                        <input wire:model="avatar" type="file" class="upload-logo"
                                        name="avatar" accept=".webp,.jpeg,.jpg,.png,.svg,.bmp"/>
                                        <!-- Progress Bar -->
                                        <div x-show="isUploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('avatar')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if ($avatar)
                                <div class="form-row center-img">
                                    <img src="{{ $avatar->temporaryUrl() }}" class="img-preview">
                                </div>
                            @endif
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                <button type="reset" class="btn btn-outline-default">Réinitialiser</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
