<div>

    @livewire('client.slider')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div class="section-title sect_dec">
                            <h2>Liste d'articles</h2>
                        </div>
                        @if(count($this->documents))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="picker-wrap-container fl-wrap">
                                        <div class="picker-wrap-controls">
                                            <ul class="fl-wrap">
                                                <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                                <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                                <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                            </ul>
                                        </div>
                                        <div class="picker-wrap fl-wrap">
                                            <div class="list-post-wrap fl-wrap">
                                                @foreach($this->documents as $document)
                                                    <!--list-post-->
                                                    <div class="list-post fl-wrap">
                                                        <div class="list-post-content" style="width: 100% !important;">
                                                            @foreach($document->domains as $domain)
                                                                <a class="post-category-marker" style="margin-right: 6px;" href="{{ route('domains.domain', ['domain' => $domain]) }}">{{ $domain->name }}</a>
                                                            @endforeach
                                                            <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                                            {{-- <span class="post-date"><i class="fas fa-clock"></i> 18 may 2022</span> --}}
                                                            <p>{{ Str::limit($document->description, 120) }}</p>
                                                            {{-- <ul class="post-opt">
                                                                <li><i class="fas fa-comments"></i> 6 </li>
                                                                <li><i class="fas fa-eye"></i>  587 </li>
                                                            </ul> --}}
                                                            <div class="author-link" style="margin-bottom: 5px;">
                                                                @foreach($document->authors as $author)
                                                                    <a href="{{ route('authors.author', ['author' => $author]) }}"><span>{{ $author->name }}</span></a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--list-post end-->
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="controls-limit fl-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('documents') }}" class="dark-btn fl-wrap">Voir plus</a>
                        @endif
                    </div>
                    <div class="limit-box"></div>
                </div>

                <!-- AD -->
                {{-- <div class="content-banner-wrap cbw_mar">
                    <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
                </div> --}}
                <!-- AD end -->

                <div class="col-md-4">
                    <!-- sidebar   -->
                    <div class="sidebar-content fl-wrap fix-bar">

                        @livewire('client.components.new-featured-documents')

                        @livewire('client.components.domains-list')

                        {{-- <div class="box-widget fl-wrap">
                            <div class="widget-title">Follow Us</div>
                            <div class="box-widget-content">
                                <div class="social-widget">
                                    <a href="#" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget-title">Likes</span>
                                        <span class="soc-widget_counter">2640</span>
                                    </a>
                                    <a href="#" class="twitter-soc">
                                        <i class="fab fa-twitter"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" class="youtube-soc">
                                        <i class="fab fa-youtube"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" class="instagram-soc">
                                        <i class="fab fa-instagram"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}

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
                        <!-- box-widget  end -->
                    </div>
                    <!-- sidebar  end -->
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section>
    <!-- section end -->

    <!-- section -->
    <section class="no-padding">
        <div class="fs-carousel-wrap">
            <div class="fs-carousel-wrap_title">
                <div class="fs-carousel-wrap_title-wrap fl-wrap">
                    <h4>Dernier article de chaque domaine de recherche</h4>
                    <h5>Ne ratez pas les nouveautés</h5>
                </div>
                <div class="abs_bg"></div>
                <div class="gs-controls">
                    <div class="gs_button gc-button-next"><i class="fas fa-caret-right"></i></div>
                    <div class="gs_button gc-button-prev"><i class="fas fa-caret-left"></i></div>
                </div>
            </div>
            @if(count($this->latestDocuments))
                <div class="fs-carousel fl-wrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($this->latestDocuments as $document)
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="grid-post-item bold_gpi fl-wrap">
                                        <div class="grid-post-media gpm_sing">
                                            <div class="bg" style="background-image: url('{{ Storage::url('documents/' .$document->photo) }}');"></div>
                                            <div class="grid-post-media_title">
                                                @if($document->featured)
                                                    <div class="post-category-marker" style="z-index: 1;">Populaire</div>
                                                @endif
                                                <h4><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h4>
                                                {{-- <span class="video-date"><i class="fas fa-clock"></i> 02 March 2022</span>
                                                <ul class="post-opt">
                                                    <li><i class="fas fa-comments"></i> 7 </li>
                                                    <li><i class="fas fa-eye"></i>  88 </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- section end -->

    <!-- AD  -->
    {{-- <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="images/all/banner.jpg" class="respimg" alt="">
        </div>
    </div> --}}
    <!-- AD end -->
</div>
