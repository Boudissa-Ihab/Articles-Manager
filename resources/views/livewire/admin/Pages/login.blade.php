<div>
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Connexion</h1>
                </div>
                <form wire:submit.prevent="login" method="POST" class="user">
                    <div class="form-group">
                        <input wire:model.lazy="email" type="email" class="form-control form-control-user"
                            id="email" aria-describedby="email" placeholder="Adresse mail" name="email">
                        @error('email') <p class="input-error-message">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.lazy="password" type="password" placeholder="Mot de passe"
                            id="password" name="password" class="form-control form-control-user">
                        @error('password') <p class="input-error-message">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input wire:model="remember" type="checkbox" class="custom-control-input" id="remember">
                            <label class="custom-control-label" for="remember">Se souvenir de moi</label>
                        </div>
                    </div>
                    @if(session()->has('error'))
                        <p class="form-error-message" style="margin-left: 20px;">{{ session()->get('error') }}</p>
                    @endif
                    <button type="submit" class="btn btn-primary btn-user btn-block">Se connecter</button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('password.reset') }}">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
    </div>
</div>
