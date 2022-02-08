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
                    <form method="POST" wire:submit.prevent="save" enctype="multipart/form-data" id="terms-and-policies-form">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Termes et conditions</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group" wire:ignore>
                                <textarea
                                    wire:model.defer="termsPolicies"
                                    class="ckeditor form-control"
                                    id="terms_and_policies"
                                    name="terms_and_policies"
                                    wire:key="terms_and_policies_content"
                                    x-data
                                    x-init="
                                        CKEDITOR.replace('terms_and_policies');
                                        CKEDITOR.instances.terms_and_policies.on('change', function() {
                                        $dispatch('input', this.getData());
                                        });">
                                    @setting('terms_and_policies')
                                </textarea>
                                <script>
                                    CKEDITOR.instances.description.on('change', function() {
                                        @this.set('terms_and_policies', this.getData());
                                    });
                                </script>
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- CKeditor scripts -->
    <script type="text/javascript">
        CKEDITOR.replace('terms_and_policies', {
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
    </script>
</div>
