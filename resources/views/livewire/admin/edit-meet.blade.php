<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item " aria-current="page"><a href="{{ route('admin.meetings') }}">Colloques & rencontres</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($meeting->name, 50) }}</li>
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
                                <h3 class="mb-0">Modifier le colloque</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mx-4 mb-4">
                        <form method="POST" wire:submit.prevent="submit" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group @error('name') has-danger @enderror col-md-12">
                                    <label for="name">Titre</label>
                                    <input wire:model.lazy="name" type="text" id="name" name="name"
                                        class="form-control @error('name') error-input @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('hosted_by') has-danger @enderror col-md-6">
                                    <label for="hosted_by">Animé par</label>
                                    <input wire:model.lazy="hosted_by" type="text" name="hosted_by" id="hosted_by"
                                        class="form-control @error('hosted_by') error-input @enderror">
                                    <span class="valid-feedback" style="display: block;" role="alert">
                                        <strong>* Veuillez séparer les animateurs par des virgules</strong>
                                    </span>
                                    @error('hosted_by')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('place') has-danger @enderror col-md-6">
                                    <label class="form-control-label" for="place">Endroit</label>
                                    <input wire:model.lazy="place" type="text" name="place" id="place"
                                        class="form-control @error('place') error-input @enderror">
                                    @error('place')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('description') has-danger @enderror col">
                                    <label for="description">Description</label>
                                    <textarea wire:model.lazy="description" id="description" name="description" rows="12"
                                        class="form-control @error('description') error-input @enderror"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xl-6 col-md-6 @error('start_date') has-danger @enderror">
                                    <label for="start_date">Date début</label>
                                    <input wire:model="start_date" type="date" name="start_date" id="start_date"
                                        class="form-control @error('start_date') error-input @enderror">
                                    @error('start_date')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-xl-6 col-md-6 @error('end_date') has-danger @enderror">
                                    <label for="end_date">Date fin</label>
                                    <input wire:model="end_date" type="date" name="end_date" id="end_date"
                                        class="form-control @error('end_date') error-input @enderror">
                                    @error('end_date')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keywords">Mots-clés <sup>(optionnels)</sup></label>
                                <input wire:model.lazy="keywords" type="text" class="form-control" id="keywords" name="keywords">
                                <span class="valid-feedback" style="display: block;" role="alert">
                                    <strong>* Veuillez séparer les mots-clés par des virgules</strong>
                                </span>
                            </div>
                            <div class="form-row">
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
                            @if($temporaryPhoto && !$photo)
                                <div class="form-row center-img">
                                    <img src="{{ asset('storage/meetings/' .$temporaryPhoto) }}" class="img-preview">
                                </div>
                            @endif
                            @if($photo)
                                <div class="form-row center-img">
                                    <img src="{{ $photo->temporaryUrl() }}" class="img-preview">
                                </div>
                            @endif
                            <hr>
                            <div class="border-0 mb-2">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3>Programme</h3>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="form-group" id="meet_days_container">
                                {{-- <textarea
                                    wire:model.defer="program"
                                    class="ckeditor form-control"
                                    id="program"
                                    name="program"
                                    wire:key="meet_program"
                                    x-data
                                    x-init="
                                        CKEDITOR.replace('program');
                                        CKEDITOR.instances.program.on('change', function() {
                                        $dispatch('input', this.getData());
                                        });">
                                    {!! $this->program !!}
                                </textarea>
                                <script>
                                    CKEDITOR.instances.description.on('change', function() {
                                        @this.set('program', this.getData());
                                    });
                                </script> --}}
                                <div wire:ignore>
                                    <div class="document-editor__toolbar"></div>
                                    <div
                                        class="form-control"
                                        name="content"
                                        id="content"
                                        style="height: 600px;">
                                        {!! $this->program !!}
                                    </div>
                                </div>
                                @error('program')
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary" onclick="setProgram()">Modifier</button>
                                <button type="reset" class="btn btn-outline-default">Réinitialiser</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        DecoupledDocumentEditor
            .create( document.querySelector('#content'), {
                licenseKey: '',
            })
            .then( editor => {
                if(false){
                    editor.isReadOnly = true;
                    editor.ui.view.toolbar.element.style.display = 'none';
                }

                // Set a custom container for the toolbar.
                document.querySelector( '.document-editor__toolbar' ).appendChild( editor.ui.view.toolbar.element );
                document.querySelector( '.ck-toolbar' ).classList.add( 'ck-reset_all' );

                setProgram = () => Livewire.emit('setProgram', $('#content').html())
            })
            .catch(error => {
                console.error( error );
            });
    </script>
</div>
