<div>
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-reset-image"></div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h3 class="h3 text-gray-900 mb-2">Nouveau mot de passe</h3>
                </div>
                <form wire:submit.prevent="submit" method="POST" class="user">
                    <div class="form-group">
                        <input wire:model.lazy="password" type="password" class="form-control form-control-user"
                            aria-describedby="password" placeholder="Nouveau mot de passe">
                        @error('password') <p class="input-error-message">{{ $message }}</p> @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.lazy="password_confirmation" type="password" class="form-control form-control-user"
                            aria-describedby="password" placeholder="Confirmer le mot de passe">
                        @error('password_confirmation') <p class="input-error-message">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Réinitialiser le mot de passe
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">Vous avez déjà un compte ? Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>
