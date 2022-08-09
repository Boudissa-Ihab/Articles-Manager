<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Termes et conditions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7" >
        <div class="row mt-5 ">
            <div class="col mb-5 mb-xl-0">
                <div class="card shadow">
                    <form method="POST" wire:submit.prevent="save" enctype="multipart/form-data" id="terms-and-conditions-form">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Termes et conditions</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group" wire:ignore>
                                {{-- <textarea
                                    wire:model.defer="termsConditions"
                                    class="ckeditor form-control"
                                    id="terms_and_conditions"
                                    name="terms_and_conditions"
                                    wire:key="terms_and_conditions_content"
                                    x-data
                                    x-init="
                                        CKEDITOR.replace('terms_and_conditions');
                                        CKEDITOR.instances.terms_and_conditions.on('change', function() {
                                        $dispatch('input', this.getData());
                                        });">
                                    @setting('terms_and_conditions')
                                </textarea>
                                <script>
                                    CKEDITOR.instances.description.on('change', function() {
                                        @this.set('terms_and_conditions', this.getData());
                                    });
                                </script> --}}
                                <div class="document-editor__toolbar"></div>
                                <div
                                    class="form-control"
                                    name="content"
                                    id="content"
                                    style="height: 600px;">
                                    @setting('terms_and_conditions')
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="setContent()">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CKeditor scripts -->
    {{-- <script type="text/javascript">
        CKEDITOR.replace('terms_and_conditions', {
            toolbar : [
                { name: 'clipboard', items: [  'Undo', 'Redo' ,'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-']},
                { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike','-', 'CopyFormatting', 'RemoveFormat']},
                { name: 'links', items: [ 'Link', 'Unlink' ] },
                { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                { name: 'insert', items: [ 'Table', 'Smiley', 'SpecialChar' ] },
                { name: 'tools', items: [ 'Maximize' ] },
                { name: 'document', items: [ 'Preview'] },
                '/',
                { name: 'paragraph', items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-',  'BidiLtr', 'BidiRtl', 'Language' ] },
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            ],
            filebrowserUploadMethod: 'form',
            height: 630
        });
    </script> --}}
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

                setContent = () => Livewire.emit('setContent', $('#content').html())
            })
            .catch(error => {
                console.error( error );
            });
    </script>
</div>
