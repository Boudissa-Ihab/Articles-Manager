<div>
    <div class="header bg-gradient-primary pt-5 pb-5">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.admins') }}">Administrateurs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nouvel administrateur</li>
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
                                <h3 class="mb-0">Ajouter un administrateur</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mx-4 mb-4">
                        <form method="POST" wire:submit.prevent="submit">
                            <div class="form-row">
                                <div class="form-group @error('name') has-danger @enderror col-md-6">
                                    <label for="name">Nom & Prénom</label>
                                    <input wire:model.lazy="name" type="text" class="form-control @error('name') error-input @enderror" id="name" name="name">
                                    @error('name')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('email') has-danger @enderror col-md-6">
                                    <label for="email">Email</label>
                                    <input wire:model.lazy="email" type="email" id="email" name="email"
                                        class="form-control @error('email') error-input @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('phone1') has-danger @enderror col-md-6">
                                    <label for="phone1">Numéro 1</label>
                                    <input wire:model.lazy="phone1" type="tel" id="phone1" name="phone1"
                                        class="form-control @error('phone1') error-input @enderror">
                                    @error('phone1')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('phone2') has-danger @enderror col-md-6">
                                    <label for="phone1">Numéro 2 <sup>(optionnel)</sup></label>
                                    <input wire:model.lazy="phone2" type="tel" id="phone2" name="phone2"
                                        class="form-control @error('phone2') error-input @enderror">
                                    @error('phone2')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group @error('password') has-danger @enderror col-md-6">
                                    <label for="password">Mot de passe</label>
                                    <input wire:model.lazy="password" type="password" id="password" name="password"
                                        class="form-control @error('password') error-input @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group @error('password_confirmation') has-danger @enderror col-md-6">
                                    <label for="password_confirmation">Confirmation mot de passe</label>
                                    <input wire:model.lazy="password_confirmation" type="password"
                                        class="form-control @error('password_confirmation') error-input @enderror"
                                        id="password_confirmation" name="password_confirmation">
                                </div>
                            </div>
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
