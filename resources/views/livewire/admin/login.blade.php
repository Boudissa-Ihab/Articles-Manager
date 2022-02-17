<div>
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-4">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Dashboard PECAN</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent">
                        <div class="text-muted text-center mt-2">
                            <h3>Connexion</h3>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        {{-- <div class="text-center text-muted mb-4">
                            <h3>Connexion</h3>
                        </div> --}}
                        <form wire:submit.prevent="login" method="POST" role="form">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input wire:model.lazy="email" type="email" class="form-control"
                                        name="email" id="email" placeholder="Adresse mail" aria-describedby="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative" style="position: relative;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input wire:model.lazy="password" type="password" class="form-control"
                                        id="password" name="password" placeholder="Mot de passe" aria-describedby="password">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input wire:model="remember" type="checkbox" class="custom-control-input" id="remember">
                                <label class="custom-control-label" for="remember">
                                    <span class="text-muted">Se rappeler de moi</span>
                                </label>
                            </div>
                            @if(session()->has('error'))
                                <p class="form-error-message mt-3" style="margin-left: 20px;">{{ session()->get('error') }}</p>
                            @endif
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">
                                    <i class="fa fa-spin fa-spinner" wire:loading wire:target="login"></i>
                                Se Connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3"></div>
            </div>
        </div>
    </div>
</div>
