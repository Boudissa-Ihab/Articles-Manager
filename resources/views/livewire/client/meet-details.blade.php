<div>
    <div>
        <img src="{{ asset('img/client/grotte-background.jpg') }}" style="height: 160px; width: auto;">
    </div>
    <!--section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-container fl-wrap fix-container-init">
                        <div class="single-post-header fl-wrap">
                            <div class="clearfix"></div>
                            <h1>{{ $meeting->name }}</h1>
                            <div class="clearfix"></div>
                            <span class="post-date"><i class="far fa-clock"></i>Du <b>{{ date("d-m-Y", strtotime($meeting->start_date)) }}</b> jusqu'au <b>{{ date("d-m-Y", strtotime($meeting->end_date)) }}</b></span>
                        </div>

                        <div class="single-post-media fl-wrap">
                            <div class="single-slider-wrap fl-wrap">
                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper lightgallery" style="justify-content: center;">
                                            <img src="{{ asset('storage/meetings/' .$meeting->photo) }}"
                                                alt="{{ $meeting->name }}" style="width: 50% !important; height: auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-post-content   -->
                        <div class="single-post-content fl-wrap">
                            <div class="clearfix"></div>
                            <div class="single-post-content_text" id="font_chage">
                                <h4 class="mb_head">Description</h4>
                                <p class="has-drop-cap">{{ $meeting->description }}</p>
                                <br>
                                <h4 class="mb_head">Organisé et animé par</h4>
                                <p>{{ $meeting->hosted_by }}</p>
                                <br>
                                <h4 class="mb_head">Endroit de la réunion</h4>
                                <p>{{ $meeting->place }}</p>
                                @if($meeting->keywords != null)
                                    <blockquote>
                                        <p>Mots-clé : {{ $meeting->keywords }}</p>
                                    </blockquote>
                                @endif
                            </div>
                        </div>
                        <!-- single-post-content  end   -->
                        <div class="more-post-wrap fl-wrap">
                            <div class="pr-subtitle prs_big">Programme</div>
                            <div class="meeting-elements">
                                <div class="ck-content">
                                    {!! $meeting->program !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- sidebar   -->
                    <div class="sidebar-content fl-wrap fixed-bar">
                        <!-- box-widget -->
                        {{-- <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="search-widget fl-wrap">
                                    <form action="#">
                                        <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                        @livewire('client.components.domains-list')

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

                        @livewire('client.components.new-featured-documents')

                    </div>
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section>
    {{-- <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="images/all/banner.jpg" class="respimg" alt="">
        </div>
    </div> --}}
</div>
