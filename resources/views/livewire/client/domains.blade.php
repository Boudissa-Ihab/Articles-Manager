<div>
    <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" data-bg="images/bg/1.jpg"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>Domaines de recherche</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="{{ route('home') }}">Accueil</a> <span>Domaines de recherche</span>
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
                <div class="col-md-8">
                    <div class="box-widget fl-wrap">
                        <div class="widget-title">Liste des domaines de recherche</div>
                        <div class="box-widget-content">
                            <div class="sb-categories_bg">
                                @foreach ($this->domains as $domain)
                                    <a href="{{ route('domains.domain', ['domain' => $domain]) }}" class="sb-categories_bg_item">
                                        <div class="bg-wrap">
                                            <div class="bg" data-bg="{{ asset('img/client/grey-background.jpg') }}"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="spb-categories_title">{{ $domain->name }}</div>
                                        <div class="spb-categories_counter">{{ $domain->documents_count }}</div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- sidebar   -->
                    <div class="sidebar-content fl-wrap fixed-bar">
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="search-widget fl-wrap">
                                    <form action="#">
                                        <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->

                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Nous suivre sur</div>
                            <div class="box-widget-content">
                                <div class="social-widget">
                                    <a href="@setting('facebook_link')" target="_blank" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget_counter">Facebook</span>
                                    </a>
                                    <a href="@setting('twitter_link')" target="_blank" class="twitter-soc">
                                        <i class="fab fa-twitter"></i>
                                        <span class="soc-widget_counter">Twitter</span>
                                    </a>
                                    <a href="@setting('instagram_link')" target="_blank" class="instagram-soc">
                                        <i class="fab fa-instagram"></i>
                                        <span class="soc-widget_counter">Instagram</span>
                                    </a>
                                    <a href="@setting('linkedin_link')" target="_blank" class="facebook-soc">
                                        <i class="fab fa-linkedin"></i>
                                        <span class="soc-widget_counter">Linkedin</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget end -->

                        @livewire('client.components.new-featured-documents')

                    </div>
                    <!-- sidebar  end -->
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section>
    <!-- section end -->
    <!-- section  -->
    <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="images/all/banner.jpg" class="respimg" alt="">
        </div>
    </div>
</div>
