<div>
    <div>
        <img src="{{ asset('img/client/montagne-background.jpg') }}" style="height: 160px; width: auto;">
    </div>
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
                                    <a href="@setting('youtube_link')" target="_blank" class="youtube-soc">
                                        <i class="fab fa-youtube"></i>
                                        <span class="soc-widget_counter">Youtube</span>
                                    </a>
                                    <a href="@setting('zotero_link')" target="_blank">
                                        <i class="fab fa-zotero"></i>
                                        <span class="soc-widget_counter">Zotero</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://decapan.hypotheses.org/" target="_blank"
                                        style="
                                            float: left;
                                            width:98%;
                                            margin:0 2% 2% 0;
                                            padding-top: 10px;
                                            color: #000;
                                            border-radius: 2px;
                                            height: 80px;
                                            background: #f5f5f5;
                                            border: 1px solid #eee;
                                            float: left;
                                            margin: 0 0 10px 0;"
                                        >
                                            <i class="hypotheses"></i>
                                            <span
                                                style="
                                                position: absolute;
                                                font-weight: 600;
                                                margin-top: 20px;
                                                margin-left: 12px;">
                                                DECAPAN Hypotheses
                                            </span>
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
    {{-- <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
        </div>
    </div> --}}
</div>
