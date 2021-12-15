<div>
    <div class="row">
        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié ?</h1>
                    <p class="mb-4">Entrez votre adresse mail et vous aller recevoir un lien pour réinitialiser le mot de passe</p>
                </div>
                <form wire:submit.prevent="resetPassword" method="POST" class="user">
                    <div class="form-group">
                        <input wire:model.lazy="email" type="email" class="form-control form-control-user"
                         aria-describedby="email" placeholder="Adresse mail">
                    </div>
                    @if(session()->has('success'))
                        <p class="form-success-message" style="margin-left: 20px;">{{ session()->get('success') }}</p>
                    @elseif(session()->has('error'))
                        <p class="form-error-message" style="margin-left: 20px;">{{ session()->get('error') }}</p>
                    @endif
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
