<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Paramètres</li>
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
                    <div class="card-body">
                        <form method="POST" wire:submit.prevent="save" enctype="multipart/form-data">
                            <fieldset class="border p-3 mb-3">
                                <legend class="w-auto">Paramètres du site</legend>
                                <div class="form-row">
                                    <div class="form-group col-6" id="website-name">
                                        <div class="row">
                                            <div class="col-auto mr-auto align-self-end">
                                                <label class="form-control-label">Nom du site</label>
                                            </div>
                                        </div>
                                        <input wire:model.lazy="appName" class="form-control" type="text" name="name" placeholder="Nom du site">
                                    </div>
                                    <div class="form-group col-6" id="contact-mail">
                                        <div class="row">
                                            <div class="col-auto mr-auto align-self-end">
                                                <label class="form-control-label">Adresse mail</label>
                                            </div>
                                        </div>
                                        <input wire:model.lazy="email" class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="description">Description</label>
                                        <textarea wire:model.lazy="description" class="form-control" id="description" name="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="facebook_url" class="form-control-label">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="color: #3b5998">
                                                    <i class="fab fa-facebook-f fa-lg"></i></span>
                                            </div>
                                            <input wire:model.lazy="facebook" class="form-control" type="url"
                                                id="facebook_url" name="facebook_url" placeholder="Facebook URL">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="instagram_url"
                                            class="form-control-label">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="color:  #E1306C">
                                                    <i class="fab fa-instagram fa-lg"></i></span>
                                            </div>
                                            <input wire:model.lazy="instagram" class="form-control" type="url"
                                                id="instagram_url" name="instagram_url" placeholder="Instagram URL">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="twitter_url" class="form-control-label">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="color: 	#1DA1F2">
                                                    <i class="fab fa-twitter fa-lg"></i></span>
                                            </div>
                                            <input wire:model.lazy="twitter" class="form-control" type="url"
                                                id="twitter_url" name="twitter_url" placeholder="Twitter URL">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="linkedin_url" class="form-control-label">Linkedin</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend ">
                                                <span class="input-group-text" style="color:  #0072b1">
                                                    <i class="fab fa-linkedin fa-lg"></i></span>
                                            </div>
                                            <input wire:model.lazy="linkedin" class="form-control" type="url"
                                                id="linkedin_url" name="linkedin_url" placeholder="Linkedin URL">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="photo" class="col-form-label mr-2">Logo : </label>
                                        <div class="file-upload blue-btn btn width100">
                                            <span>Choisir une photo</span>
                                            <div
                                            x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                <!-- File Input -->
                                                <input wire:model="logo" type="file" class="upload-logo"
                                                    accept=".webp,.jpeg,.jpg,.png,.svg,.bmp"/>
                                                <!-- Progress Bar -->
                                                <div x-show="isUploading">
                                                    <progress max="100" x-bind:value="progress"></progress>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($temporaryLogo && !$logo)
                                    <div class="form-row center-img">
                                        <img src="{{ asset('storage/logo/' .$temporaryLogo) }}" class="img-preview">
                                    </div>
                                @endif
                                @if($logo)
                                    <div class="form-row center-img">
                                        <img src="{{ $logo->temporaryUrl() }}" class="img-preview">
                                    </div>
                                @endif
                            </fieldset>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="reset" class="btn btn-outline-default">Réinitialiser</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
