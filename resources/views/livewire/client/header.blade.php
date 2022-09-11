<div>
    <header class="main-header">
        <!-- top bar -->
        {{-- <div class="top-bar fl-wrap">
            <div class="container">
                <div class="date-holder">
                    <span class="date_num"></span>
                    <span class="date_month"></span>
                    <span class="date_year"></span>
                </div>
                <div class="header_news-ticker-wrap">
                    <div class="hnt_title">Actualité</div>
                    <div class="header_news-ticker fl-wrap">
                        <ul>
                            <li><a href="javascript:void(0)">Test 1</a></li>
                            <li><a href="javascript:void(0)">Test 2</a></li>
                            <li><a href="javascript:void(0)">Test 3</a></li>
                        </ul>
                    </div>
                    <div class="n_contr-wrap">
                        <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                        <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                    </div>
                </div>
                <ul class="topbar-social">
                    <li><a href="@setting('facebook_link')" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="@setting('twitter_link')" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="@setting('instagram_link')" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="@setting('linkedin_link')" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="@setting('youtube_link')" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="@setting('zotero_link')" target="_blank">
                        <img src="{{ asset('img/brand/zotero.png') }}" style="width: 16px; height: 16px;" alt="Zotero">
                    </a></li>
                </ul>
            </div>
        </div> --}}
        <!-- top bar end -->
        <div class="header-inner fl-wrap">
            <div class="container">
                <!-- logo holder  -->
                <a href="{{ route('home') }}" class="logo-holder"><img src="{{ asset('img/brand/logo.png') }}" alt="Logo PECAN"></a>
                <a href="{{ route('home') }}" class="logo-text-holder"><img src="{{ asset('img/brand/logo-text.png') }}" alt="Logo PECAN"></a>
                <!-- logo holder end -->
                <div class="search_btn htact show_search-btn"><i class="fas fa-search"></i> <span class="header-tooltip">Rechercher</span></div>


                {{-- <div class="srf_btn htact show-reg-form"><i class="fas fa-user"></i> <span class="header-tooltip">Se connecter</span></div> --}}


                {{-- <div class="show-cart sc_btn htact"><i class="fas fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Panier</span></div> --}}


                <!-- header-search-wrap -->
                <div class="header-search-wrap novis_sarch">
                    <div class="widget-inner">
                        <form action="#">
                            <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                            <button class="search-submit" id="submit_btn"><i class="fas fa-search transition"></i> </button>
                        </form>
                    </div>
                </div>
                <!-- header-search-wrap end -->

                <!-- header-cart_wrap  -->
                {{-- <div class="header-cart_wrap novis_cart">
                    <div class="header-cart_title">Your Cart <span><strong>2</strong> items</span></div>
                    <div class="header-cart_wrap_container fl-wrap">
                        <div class="box-widget-content">
                            <div class="widget-posts fl-wrap">
                                <ol>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img src="{{ asset('img/client/shop/1.jpg') }}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Awesome Merch Wallet</a>
                                            <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="fas fa-times"></i></div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img src="{{ asset('img/client/shop/1.jpg') }}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Gmag Merch Wallet</a>
                                            <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222</div>
                                        </div>
                                        <div class="clear-cart_button"><i class="fas fa-times"></i></div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart_wrap_total fl-wrap">
                        <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
                    </div>
                    <div class="header-cart_wrap_footer fl-wrap">
                        <a href="cart.html"> View Cart</a>
                        <a href="checkout.html"> Checkout</a>
                    </div>
                </div> --}}
                <!-- header-cart_wrap end -->





                <!-- Mobile view -->
                {{-- <div class="nav-button-wrap">
                    <div class="nav-button">
                        <div class="srf_btn htact show-reg-form"><i class="fas fa-microscope"></i> <span class="header-tooltip">Domaines</span></div>
                        <div class="srf_btn htact show-reg-form"><i class="fas fa-file"></i> <span class="header-tooltip">Articles</span></div>
                        <div class="srf_btn htact show-reg-form"><i class="fas fa-user-tie"></i> <span class="header-tooltip">Auteurs</span></div>
                    </div>
                </div> --}}
                <!-- Mobile view end-->





                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ route('journal') }}" class="{{ Request::is('the-journal') ? 'act-link' : '' }}">La Revue</a>
                            </li>
                            <li>
                                <a href="{{ route('documents') }}" class="{{ Request::is('documents/*') || Request::is('documents') ? 'act-link' : '' }}">Articles</a>
                            </li>
                            <li>
                                <a href="{{ route('authors') }}" class="{{ Request::is('authors/*') || Request::is('authors') ? 'act-link' : '' }}">Auteurs</a>
                            </li>
                            <li>
                                <a href="{{ route('editor', ['editor' => "association"]) }}">Association</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="{{ Request::is('meetings') || Request::is('meetings/*') || Request::is('about-us') || Request::is('contact-us') || Route::is('terms-and-conditions')
                                    || Route::is('privacy-policy') || Request::is('domains') || Request::is('domains/*') ? 'act-link' : '' }}">Divers<i class="fas fa-caret-down"></i></a>
                                <ul>
                                    <li><a href="{{ route('domains') }}">Domaines</a></li>
                                    <li><a href="{{ route('meetings') }}">Colloques</a></li>
                                    <li><a href="{{ route('about-us') }}">À propos</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contactez-nous</a></li>
                                    <li><a href="{{ route('editor', ['editor' => "terms-and-conditions"]) }}">Termes et conditions</a></li>
                                    <li><a href="{{ route('editor', ['editor' => "privacy-policy"]) }}">Politique de confidentialité</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
            </div>
        </div>
    </header>
</div>
