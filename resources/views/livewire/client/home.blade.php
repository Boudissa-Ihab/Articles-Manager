<div>

    @livewire('client.slider')

    {{--
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
                                                    <div class="list-post fl-wrap">
                                                        <div class="list-post-content" style="width: 100% !important;">
                                                            @foreach($document->domains as $domain)
                                                                <a class="post-category-marker" style="margin-right: 6px;" href="{{ route('domains.domain', ['domain' => $domain]) }}">{{ $domain->name }}</a>
                                                            @endforeach
                                                            <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                                            <span class="post-date"><i class="fas fa-clock"></i> 18 may 2022</span>
                                                            <p>{{ Str::limit($document->description, 120) }}</p>
                                                            <ul class="post-opt">
                                                                <li><i class="fas fa-comments"></i> 6 </li>
                                                                <li><i class="fas fa-eye"></i>  587 </li>
                                                            </ul>
                                                            <div class="author-link" style="margin-bottom: 5px;">
                                                                @foreach($document->authors as $author)
                                                                    <a href="{{ route('authors.author', ['author' => $author]) }}"><span>{{ $author->name }}</span></a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
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

                <!-- AD
                <div class="content-banner-wrap cbw_mar">
                    <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
                </div>
                AD end -->

                <div class="col-md-4">
                    <div class="sidebar-content fl-wrap fix-bar">

                        @livewire('client.components.new-featured-documents')

                        @livewire('client.components.domains-list')

                        <!-- <div class="box-widget fl-wrap">
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
                        </div> -->

                        <!-- <div class="box-widget fl-wrap">
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
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section>
    --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Organisation</h2>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align:center"><span style="color:#c0392b"><span style="font-size:24px"><u><em>Directeur de la revue</em></u></span></span></p>
                        <ul>
                            <li><span style="font-size:16px">Iddir Amara</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align:center"><span style="color:#c0392b"><span style="font-size:24px"><u><em>Comit&eacute; &eacute;ditorial</em></u></span></span></p>
                        <ul>
                            <li><span style="font-size:16px">Salah Abdessadok</span></li>
                            <li><span style="font-size:16px">Kamel Amri</span></li>
                            <li><span style="font-size:16px">Hassan Aouragh</span></li>
                            <li><span style="font-size:16px">Khoukha Ayati</span></li>
                            <li><span style="font-size:16px">Ilhem Bentaleb</span></li>
                            <li><span style="font-size:16px">Hayette Berkani</span></li>
                            <li><span style="font-size:16px">Alejandra Calder</span><span style="font-size:12px">&Oacute;</span><span style="font-size:16px">n Ord&eacute;&ntilde;ez</span></li>
                            <li><span style="font-size:16px">Yasmina Cha</span>&Iuml;<span style="font-size:16px">d-Saoudi</span></li>
                            <li><span style="font-size:16px">Amel Chakroun</span></li>
                            <li><span style="font-size:16px">Rosa Fregel</span></li>
                            <li><span style="font-size:16px">Gwenaelle Goude</span></li>
                            <li><span style="font-size:16px">Sonia Hajri</span></li>
                            <li><span style="font-size:16px">Farid Ighilahriz</span></li>
                            <li><span style="font-size:16px">Giulio Lucarini</span></li>
                            <li><span style="font-size:16px">Hajer Mejri</span></li>
                            <li><span style="font-size:16px">Djouher Oubraham</span></li>
                            <li><span style="font-size:16px">Thomas Perrin</span></li>
                            <li><span style="font-size:16px">Kahina Roumane</span></li>
                            <li><span style="font-size:16px">Isabelle Sid&eacute;ra</span></li>
                            <li><span style="font-size:16px">Daniela Zampetti</span></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align:center"><span style="color:#c0392b"><span style="font-size:24px"><u><em>Comit&eacute; scientifique</em></u></span></span></p>
                        <ul>
                            <li><span style="font-size:16px">Yves Coppens ✟ (Pr&eacute;sident d&#39;honneur)</span></li>
                            <li><span style="font-size:16px">Mathilda Arnay de La Rosa</span></li>
                            <li><span style="font-size:16px">Barbara Barich.</span></li>
                            <li><span style="font-size:16px">Larbi Boudad</span></li>
                            <li><span style="font-size:16px">Rachid Hamdidouche</span></li>
                            <li><span style="font-size:16px">Estelle Herrscher</span></li>
                            <li><span style="font-size:16px">Mohamed Raouf Karray</span></li>
                            <li><span style="font-size:16px">David Lubell</span></li>
                            <li><span style="font-size:16px">Said Maouche</span></li>
                            <li><span style="font-size:16px">George Onrubio Pintado</span></li>
                            <li><span style="font-size:16px">Pierre Vermeersch</span></li>
                        </ul>
                    </div>
                    {{-- @if(count($this->documents))
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
                                                <div class="list-post fl-wrap">
                                                    <div class="list-post-content" style="width: 100% !important;">
                                                        @foreach($document->domains as $domain)
                                                            <a class="post-category-marker" style="margin-right: 6px;" href="{{ route('domains.domain', ['domain' => $domain]) }}">{{ $domain->name }}</a>
                                                        @endforeach
                                                        <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                                        <p>{{ Str::limit($document->description, 120) }}</p>
                                                        <div class="author-link" style="margin-bottom: 5px;">
                                                            @foreach($document->authors as $author)
                                                                <a href="{{ route('authors.author', ['author' => $author]) }}"><span>{{ $author->name }}</span></a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="controls-limit fl-wrap"></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('documents') }}" class="dark-btn fl-wrap">Voir plus</a>
                    @endif --}}
                    <div class="limit-box"></div>
                </div>
                <p style="text-align:right"><strong>
                    <u>
                        <span style="font-size:16px">Editeur &quot;Starbook agency&quot;</span>
                    </u>
                </strong></p>
            </div>

            <div class="limit-box fl-wrap"></div>

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Recommandation des auteurs</h2>
                    </div>

                </div>
            </div>

            <div class="limit-box fl-wrap"></div>

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Politique éditoriale</h2>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- section -->
    <section class="no-padding">
        <div class="fs-carousel-wrap">
            <div class="fs-carousel-wrap_title">
                <div class="fs-carousel-wrap_title-wrap fl-wrap">
                    <h4>Derniers documents ajoutés</h4>
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
