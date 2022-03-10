<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Slider</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow  ">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Slider</h3>
                            </div>
                            <div class="file-upload blue-btn btn width100">
                                <span>Choisir des photos</span>
                                <div
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                    <!-- File Input -->
                                    <input wire:model="photos" type="file" class="upload-logo"
                                    name="photos" accept=".webp,.jpeg,.jpg,.png,.svg,.bmp" multiple/>
                                    <!-- Progress Bar -->
                                    <div x-show="isUploading">
                                        <progress max="100" x-bind:value="progress"></progress>
                                    </div>
                                </div>
                                @error('photos')
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- <div class="mx-4 mb-4">
                        <div class="form-row">
                            <div class="form-group @error('selectDocuments') has-danger @enderror col-md-6">
                                <label>Documents :</label>
                                <select wire:model="document" name="document" id="document"
                                    class="form-control @error('selectDocuments') error-input @enderror">
                                <option value="">Selectionner un document</option>
                                    @if($this->documents)
                                        @foreach ($this->documents as $document)
                                            <option value="{{ $document->id }}">{{ $document->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('selectDocuments')
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if(count($selectDocuments))
                            <h4 class="custom-header">Documents choisis</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="d-flex list-unstyled attributed-stats-list">
                                        @foreach ($selectDocuments as $item)
                                            <li class="stat-item">
                                                <span>{{ App\Models\Document::find($item)->title }}</span>
                                                <button type="button" wire:click.prevent='unsetDocument({{ $item }})'><i class="fa fa-times"></i></button>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div> --}}

                    <div class="container" wire:ignore>
                        <div class="product-img-gallery">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    @if(count($this->slides))
                                        <div class="main-img-wrapper"
                                            style="width: 50%; height: auto; margin: auto; padding: 10px; position: relative;">
                                            <div id="sync1" class="main-img-wrapper-carousel owl-carousel owl-theme">
                                                @foreach ($this->slides as $slide)
                                                    <div class="item">
                                                        <img src="{{ asset('storage/slides/' .$slide->photo) }}" class="zoom" alt="Slide">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="img-thumbs mt-4 d-flex">
                                            <div id="sync2" class="img-thumbs-carousel owl-carousel owl-theme">
                                                @foreach ($this->slides as $slide)
                                                    <div class="item">
                                                        <div class="img-thumbs-item">
                                                            <img src="{{ asset('storage/slides/' .$slide->photo)}}" alt="Slide">
                                                            <button class="delet-btn" wire:click="setSlide({{ $slide->id }})"
                                                                data-target="#delete-slide-modal" data-toggle="modal" role="button"
                                                                aria-pressed="true" title="Supprimer le slide">X</button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @else
                                        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 20rem">
                                            <span style="font-size: 5em;" class="text-danger">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                            <div>Aucun slide trouvé</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------- MODALS ---------------------------------->
    <!-- Delete Author -->
	<div wire:ignore.self class="modal fade" id="delete-slide-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Suppression d'un slide</h2>
                </div>
                <div class="modal-body text-center">
                    <span class="text-danger" style="display: block;" role="alert">
                        Voulez-vous supprimer le slide ? Cette action est irréversible.
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger btn-lg" wire:click="deleteSlide()" data-dismiss="modal" role="button">Confirmer</a>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------- END MODALS ---------------------------------->
</div>
