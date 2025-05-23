<div>
    <footer class="fl-wrap main-footer">
        <div class="container">
            <!-- footer-widget-wrap -->
            <div class="footer-widget-wrap fl-wrap">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <div class="footer-widget-content">
                                {{-- <a href="{{ route('home') }}" class="footer-logo"><img src="{{ asset('img/brand/logo-white.png') }}" alt=""></a> --}}
                                {{-- <p>@setting('description')</p> --}}
                                <div class="footer-social fl-wrap">
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
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Domaines</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    @if($this->domains)
                                        <ul>
                                            @foreach ($this->domains as $domain)
                                                <li><a href="{{ route('domains.domain', ['domain' => $domain]) }}">{{ $domain->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Liens utiles</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    <ul>
                                        <li> <a href="{{ route('home') }}">Accueil</a></li>
                                        <li> <a href="{{ route('documents') }}">Articles</a></li>
                                        <li> <a href="{{ route('authors') }}">Auteurs</a></li>
                                        <li> <a href="{{ route('meetings') }}">Colloques</a></li>
                                        <li> <a href="{{ route('domains') }}">Domaines</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Infos du site</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    <ul>
                                        <li> <a href="{{ route('journal') }}">La Revue</a></li>
                                        <li> <a href="{{ route('editor', ['editor' => "organization"]) }}">Association</a></li>
                                        <li> <a href="{{ route('about-us') }}">À propos</a></li>
                                        <li> <a href="{{ route('contact-us') }}">Contactez-nous</a></li>
                                        <li> <a href="{{ route('editor', ['editor' => "terms-and-conditions"]) }}">Termes et conditions</a></li>
                                        <li> <a href="{{ route('editor', ['editor' => "privacy-policy"]) }}">Politique de confidentialité</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                </div>
            </div>
            <!-- footer-widget-wrap end-->
        </div>
        <div class="footer-bottom fl-wrap">
            <div class="container">
                <div class="copyright">
                    <span>&#169; @setting('app_name') <script>document.write(new Date().getFullYear())</script></span>
                    Tous droits réservés
                </div>
                <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                <div class="subfooter-nav">
                    <ul>
                        {{-- <li><a href="{{ route('editor', ['editor' => "terms-and-conditions"]) }}">Termes et conditions</a></li>
                        <li><a href="{{ route('editor', ['editor' => "privacy-policy"]) }}">Politique de confidentialité</a></li> --}}
                        <li><a href="javascript:void(0)">Editeur &quot;Starbook agency&quot;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
