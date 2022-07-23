<div>
    <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" style="background: rgba(42,104,146,1);"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>Contactez-nous</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="{{ route('home') }}">Accueil</a> <span>Contactez-nous</span>
            </div>
            <div class="scroll-down-wrap scw_transparent">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Faire défiler vers le bas</span>
            </div>
        </div>
    </section>
    <!-- section end  -->
    <!--section   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pr-subtitle prs_big">Détails</div>
                    <!--card-item -->
                    <ul class="contacts-list fl-wrap">
                        <li><span><i class="fas fa-map-marker"></i> Adresse :</span> <a href="">USA 27TH Brooklyn NY</a></li>
                        <li><span><i class="fas fa-phone"></i> Numéro de téléphone :</span> <a href="">+7(123)987654</a></li>
                        <li><span><i class="fas fa-envelope"></i> Email :</span> <a href="">@setting('email')</a></li>
                    </ul>
                    <!--card-item end -->
                    <div class="contact-social fl-wrap">
                        <span class="cs-title">Nous suivre sur : </span>
                        <ul>
                            <li><a href="@setting('facebook_link')" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="@setting('twitter_link')" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="@setting('instagram_link')" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="@setting('linkedin_link')" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="@setting('youtube_link')" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="@setting('zotero_link')" target="_blank">
                                <img src="{{ asset('img/brand/zotero.png') }}" style="width: 16px; height: 16px;" alt="Zotero"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- box-widget -->
                    {{-- <div class="box-widget-content fl-wrap">
                        <div class="banner-widget fl-wrap">
                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                <div class="bg" data-bg="{{ asset('img/client/bg/1.jpg') }}"></div>
                            </div>
                            <div class="banner-widget_content">
                                <h5>Visit our awesome merch and souvenir online shop.</h5>
                                <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- box-widget  end -->
                </div>
                <div class="col-md-8">

                    @if(session()->has('success'))
                        <div class="alert alert-success alert-block" x-data="{show: true}"
                            x-init="setTimeout(() => show = false, 5000)" x-show="show">
                            <strong>{{ session()->get('success') }}</strong>
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-danger alert-block" x-data="{show: true}"
                            x-init="setTimeout(() => show = false, 5000)" x-show="show">
                            <strong>{{ session()->get('error') }}</strong>
                        </div>
                    @endif

                    <div class="pad-con fl-wrap">
                        <div class="pr-subtitle prs_big">Formulaire de contact</div>
                        <p style="font-size: 14px;">Veuillez remplir tous les champs de ce formulaire pour nous contacter. Nous allons essayer de vous répondre dans les plus brefs délais. (Les champs marqués par * sont des champs obligatoires).</p>
                        <div id="contact-form" style="margin-top: 20px;">
                            <div id="message"></div>
                            <form method="POST" wire:submit.prevent="send" class="custom-form" name="contactform" id="contactform">
                                <fieldset>
                                    <input wire:model.lazy="name" type="text" name="name" id="name" placeholder="Nom complet"/>
                                    @error('name')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong style="font-size: 13px;">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input wire:model.lazy="email" type="email" name="email" id="email" placeholder="* Adresse mail" value=""/>
                                    @error('email')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong style="font-size: 13px;">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea wire:model.lazy="message" name="message" id="message" cols="40" rows="3" placeholder="* Message"></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong style="font-size: 13px;">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                                <button type="submit" class="btn color-bg float-btn" id="submit">Envoyer<i class="fas fa-caret-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
