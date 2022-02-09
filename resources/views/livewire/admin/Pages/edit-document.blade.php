<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="{{ route('admin.documents') }}">Documents</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $document->title }}</li>
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
                                <h3 class="mb-0">Modifier un document</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mx-4 mb-4">
                        <form method="POST" wire:submit.prevent="submit" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group @error('title') has-danger @enderror col-md-6">
                                    <label for="title">Titre du document</label>
                                    <input wire:model.lazy="title" type="text" id="title" name="title"
                                        class="form-control @error('title') error-input @enderror">
                                    @error('title')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('selectDomains') has-danger @enderror col-md-6">
                                    <label>Domaines de recherche :</label>
                                    <select wire:model="domain" name="domain" id="domain"
                                        class="form-control @error('selectDomains') error-input @enderror">
                                    <option value="">Selectionner un domaine</option>
                                        @if($this->domains)
                                            @foreach ($this->domains as $domain)
                                                <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('selectDomains')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if(count($selectDomains))
                                <h4 class="custom-header">Domaines attribués</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="d-flex list-unstyled attributed-stats-list">
                                            @foreach ($selectDomains as $item)
                                                <li class="stat-item">
                                                    <span>{{ App\Models\Domain::find($item)->name }}</span>
                                                    <button type="button" wire:click.prevent='unsetDomain({{ $item }})'><i class="fa fa-times"></i></button>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="form-row">
                                <div class="form-group @error('description') has-danger @enderror col">
                                    <label for="description">Description</label>
                                    <textarea wire:model.lazy="description" id="description" name="description" rows="5"
                                        class="form-control @error('description') error-input @enderror"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xl-6 col-md-6 @error('accepted_at') has-danger @enderror">
                                    <label for="accepted_at">Accepté le</label>
                                    <input wire:model="accepted_at" type="date" name="accepted_at" id="accepted_at"
                                        class="form-control @error('accepted_at') error-input @enderror">
                                </div>
                                <div class="form-group col-xl-6 col-md-6 @error('published_at') has-danger @enderror">
                                    <label for="published_at">Publié le</label>
                                    <input wire:model="published_at" type="date" name="published_at" id="published_at"
                                        class="form-control @error('published_at') error-input @enderror">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('nb_pages') has-danger @enderror col-md-6">
                                    <label for="nb_pages">Nombre de pages</label>
                                    <input wire:model.lazy="nb_pages" type="number" id="nb_pages" name="nb_pages" step="1"
                                        class="form-control @error('nb_pages') error-input @enderror">
                                    @error('nb_pages')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('selectAuthors') has-danger @enderror col-md-6">
                                    <label>Auteurs du document :</label>
                                    <select wire:model="author" name="author" id="author"
                                        class="form-control @error('selectAuthors') error-input @enderror">
                                    <option value="">Selectionner un auteur</option>
                                        @if($this->authors)
                                            @foreach ($this->authors as $author)
                                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('selectAuthors')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @if(count($selectAuthors))
                                <h4 class="custom-header">Auteurs attribués</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="d-flex list-unstyled attributed-stats-list">
                                            @foreach ($selectAuthors as $item)
                                                <li class="stat-item">
                                                    <span>{{ App\Models\Author::find($item)->name }}</span>
                                                    <button type="button" wire:click.prevent='unsetAuthor({{ $item }})'><i class="fa fa-times"></i></button>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="form-row">
                                <fieldset class="form-group @error('is_free') has-danger @enderror col-md-6">
                                    <legend><h3>Est gratuit ?</h3></legend>
                                    <label class="custom-toggle">
                                        <input wire:model="is_free" type="checkbox" id="is_free" name="is_free" checked>
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                    @error('is_free')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                                @if(!$is_free)
                                    <div class="form-group @error('price') has-danger @enderror col-md-6">
                                        <label for="price">Prix du document</label>
                                        <input wire:model.lazy="price" type="number" id="price" name="price" step="1"
                                            class="form-control @error('price') error-input @enderror">
                                        @error('price')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="keywords">Mots-clés <sup>(optionnels)</sup></label>
                                <input wire:model.lazy="keywords" type="text" class="form-control" id="keywords" name="keywords">
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>* Veuillez séparer les mots-clés par des virgules</strong>
                                </span>
                            </div>
                            <fieldset class="form-group @error('featured') has-danger @enderror">
                                <legend><h3>Document populaire</h3></legend>
                                <label class="custom-toggle">
                                    <input wire:model="featured" type="checkbox" id="featured_toggle" name="featured">
                                    <span class="custom-toggle-slider rounded-circle"></span>
                                </label>
                                @error('featured')
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <hr>
                            <div class="form-row">
                                {{-- Upload document file button --}}
                                <div class="form-group col-md-6">
                                    <label for="path" class="col-form-label mr-2">Document </sup> : </label>
                                    <div class="file-upload blue-btn btn width100">
                                        <span>Télécharger un document</span>
                                        <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <!-- File Input -->
                                            <input wire:model="path" type="file" class="upload-logo" name="path" accept=".pdf"/>
                                            <!-- Progress Bar -->
                                            <div x-show="isUploading">
                                                <progress max="100" x-bind:value="progress"></progress>
                                            </div>
                                        </div>
                                        @error('path')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Upload document image button --}}
                                <div class="form-group col-md-6">
                                    <label for="photo" class="col-form-label mr-2">Image <sup>(optionnelle)</sup> : </label>
                                    <div class="file-upload blue-btn btn width100">
                                        <span>Choisir une photo</span>
                                        <div
                                        x-data="{ isUploading: false, progress: 0 }"
                                        x-on:livewire-upload-start="isUploading = true"
                                        x-on:livewire-upload-finish="isUploading = false"
                                        x-on:livewire-upload-error="isUploading = false"
                                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <!-- File Input -->
                                            <input wire:model="photo" type="file" class="upload-logo"
                                            name="photo" accept=".webp,.jpeg,.jpg,.png,.svg,.bmp"/>
                                            <!-- Progress Bar -->
                                            <div x-show="isUploading">
                                                <progress max="100" x-bind:value="progress"></progress>
                                            </div>
                                        </div>
                                        @error('photo')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Load old document before edit -->
                            @if($temporaryPath && !$path)
                                <div class="form-row center-img">
                                    <embed src="{{ asset('storage/documents/' .$temporaryPath) }}" width="800" height="1000" wire:ignore.self />
                                </div>
                            @endif
                            @if ($path)
                                <div class="form-row center-img" wire:ignore.self>
                                    <embed src="{{ $path->temporaryUrl() }}" width="800" height="1000" alt="PDF" wire:ignore.self />
                                </div>
                            @endif
                            <hr>
                            <!-- Load old photo before edit -->
                            @if($temporaryPhoto && !$photo)
                                <div class="form-row center-img">
                                    <img src="{{ asset('storage/documents/' .$temporaryPhoto) }}" class="img-preview">
                                </div>
                            @endif
                            @if($photo)
                                <div class="form-row center-img">
                                    <img src="{{ $photo->temporaryUrl() }}" class="img-preview">
                                </div>
                            @endif
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <button type="reset" class="btn btn-outline-default">Réinitialiser</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
