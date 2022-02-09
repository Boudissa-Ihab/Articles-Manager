<div>
    <div class="header pb-8 pt-5 d-flex align-items-center"
     style="background-image: url(https://wallup.net/wp-content/uploads/2017/11/17/301125-books.jpg); background-size: cover; background-position: center top;">
        <span class="mask bg-gradient-default opacity-8"></span>
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <h1 class="display-2 text-white">Bienvenue</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                @if(auth()->user()->avatar)
                                    <img src="{{ asset('storage/admins/' .auth()->user()->avatar) }}" class="rounded-circle" alt="{{ auth()->user()->name }}">
                                @else
                                    <img src="{{ asset('img/brand/empty-placeholder.png') }}" class="rounded-circle" alt="Pas de photo de profil">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="text-center mt-3">
                            <form method="POST" enctype="multipart/form-data">
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
                                            accept=".webp,.jpeg,.jpg,.png,.svg,.bmp"/>
                                        <!-- Progress Bar -->
                                        <div x-show="isUploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                    </div>
                                    @error('avatar') <p class="input-error-message">{{ $message }}</p> @enderror
                                </div>
                            </form>
                            <h3>
                                {{ auth()->user()->name }}
                            </h3>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ auth()->user()->email }}
                            </div>
                            <div class="h5 font-weight-400">
                                <i class="ni location_pin mr-2"></i>{{ auth()->user()->phone1 }}
                                @if(isset(auth()->user()->phone2))
                                    / {{ auth()->user()->phone2 ?? "" }}
                                @endif
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <form method="POST" wire:submit.prevent="editInfo">
                            <h6 class="heading-small text-muted mb-4">Informations Personnelles</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group @error('name') has-danger @enderror">
                                            <label class="form-control-label" for="input-name">Nom Complet</label>
                                            <input wire:model.lazy="name" type="text" name="name" id="name"
                                                class="form-control form-control-alternative @error('name') error-input @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group @error('email') has-danger @enderror">
                                            <label class="form-control-label" for="input-email">Adresse Mail</label>
                                            <input wire:model.lazy="email" type="email" name="email" id="email"
                                                class="form-control form-control-alternative @error('email') error-input @enderror">
                                            @error('email')
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group @error('phone1') has-danger @enderror">
                                    <label class="form-control-label" for="input-phone-1">Numéro de Téléphone 1</label>
                                    <input wire:model.lazy="phone1" type="text" name="phone1" id="phone1"
                                        class="form-control form-control-alternative @error('phone1') error-input @enderror">
                                    @error('phone1')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('phone2') has-danger @enderror">
                                    <label class="form-control-label" for="input-phone-2">Numéro de Téléphone 2</label>
                                    <input wire:model.lazy="phone2" type="text" name="phone2" id="phone2"
                                        class="form-control form-control-alternative @error('phone2') error-input @enderror">
                                    @error('phone2')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group @error('avatar') 'has-danger' @enderror">
                                    <label class="form-control-label" for="avatar">Photo de Profil</label>
                                    <input type="file" name="avatar" id="avatar"
                                        class="form-control form-control-alternative @error('avatar') 'error-input' @enderror"
                                        accept="image/*">
                                    @error('avatar') <p class="input-error-message">{{ $message }}</p> @enderror
                                </div> --}}
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="POST" wire:submit.prevent="resetPassword" autocomplete="off">
                            <h6 class="heading-small text-muted mb-4">Modifier le mot de passe</h6>
                            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> --}}
                            <div class="pl-lg-4">
                                <div class="form-group @error('old_password') has-danger @enderror">
                                    <label class="form-control-label" for="input-current-password">Mot de Passe Actuel</label>
                                    <input wire:model.lazy="old_password" type="password" name="old_password" id="input-current-password"
                                        class="form-control form-control-alternative @error('old_password') error-input @enderror">
                                    @error('old_password')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password') has-danger @enderror">
                                    <label class="form-control-label" for="input-password">Nouveau mot de passe</label>
                                    <input wire:model.lazy="password" type="password" name="password" id="input-password"
                                        class="form-control form-control-alternative @error('password') error-input @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password_confirmation') has-danger @enderror">
                                    <label class="form-control-label" for="input-password-confirmation">Confirmation mot de passe</label>
                                    <input wire:model.lazy="password_confirmation" type="password" name="password_confirmation" id="input-password-confirmation"
                                        class="form-control form-control-alternative @error('password_confirmation') error-input @enderror">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Modifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
