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
                                <a href="index.html" class="footer-logo"><img src="{{ asset('img/brand/logo.png') }}" alt=""></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                <div class="footer-social fl-wrap">
                                    <ul>
                                        <li><a href="@setting('facebook_link')" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="@setting('twitter_link')" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="@setting('instagram_link')" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="@setting('linkedin_link')" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Categories </div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    <ul>
                                        <li> <a href="#">Politics</a></li>
                                        <li> <a href="#">Technology</a></li>
                                        <li> <a href="#">Business</a></li>
                                        <li> <a href="#">Sports</a></li>
                                        <li> <a href="#">Science</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <div class="footer-widget-title">Links</div>
                            <div class="footer-widget-content">
                                <div class="footer-list footer-box fl-wrap">
                                    <ul>
                                        <li> <a href="{{ route('home') }}">Accueil</a></li>
                                        <li> <a href="{{ route('about-us') }}">À propos</a></li>
                                        <li> <a href="{{ route('contact-us') }}">Contactez-nous</a></li>
                                        <li> <a href="#">Termes et conditions</a></li>
                                        <li> <a href="#">Politique de confidentialité</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget  end-->
                    <!-- footer-widget -->
                    <div class="col-md-4">
                        {{-- <div class="footer-widget">
                            <div class="footer-widget-title">Subscribe</div>
                            <div class="footer-widget-content">
                                <div class="subcribe-form fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <form id="subscribe" class="fl-wrap">
                                        <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                        <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                        <label for="subscribe-email" class="subscribe-message"></label>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
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
                        <li><a href="#">Termes et conditions</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
