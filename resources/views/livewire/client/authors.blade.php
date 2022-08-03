<div>
    {{-- <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" style="background: rgba(42,104,146,1);"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>Auteurs d'articles scientifiques</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="{{ route('home') }}">Accueil</a> <span>Auteurs</span>
            </div>
            <div class="scroll-down-wrap scw_transparent">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Faire défiler vers le bas</span>
            </div>
        </div>
    </section> --}}
    <div class="breadcrumbs-header fl-wrap">
        <div class="container">
            <div class="breadcrumbs-header_url">
                <a href="{{ route('home') }}">Accueil</a> <span>Auteurs</span>
            </div>
            <div class="scroll-down-wrap">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Faire défiler vers le bas</span>
            </div>
        </div>
        <div class="pwh_bg"></div>
    </div>
    <!-- section end  -->
    <!--section   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-container fl-wrap fix-container-init">
                        <div class="section-title">
                            <h2>Auteurs</h2>
                            <h4>Cliquez sur un auteur pour voir ses articles</h4>
                            <div class="steader_opt steader_opt_abs" wire:ignore>
                                <select wire:model="filter" id="list" class="style-select no-search-select">
                                    <option value="">Sélectionner un filtre :</option>
                                    <option value="AZ">Noms A-Z</option>
                                    <option value="ZA">Noms Z-A</option>
                                </select>
                            </div>
                        </div>

                        @if(count($this->authors))
                            <div class="list-post-wrap">
                                @foreach ($this->authors as $author)
                                    <div class="list-post fl-wrap">
                                        <div class="list-post-media">
                                            <a href="{{ route('authors.author', ['author' => $author]) }}">
                                                <div class="bg-wrap">
                                                    <div class="bg" style="background-image: url('{{ Storage::url('authors/' .$author->avatar) }}');"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-post-content">
                                            {{-- <a class="post-category-marker" href="#">Sports</a> --}}
                                            <h3>
                                                <a href="{{route('authors.author', ['author' => $author]) }}">{{ $author->name }}</a>
                                            </h3>
                                            <br>
                                            <p>{{ Str::limit($author->biography, 424) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                            <div class="pagination">
                                {{ $this->authors->links('livewire.pagination') }}
                            </div>
                        @else



                            <img src="{{ asset('img/client/loading2.gif') }}" alt="">

                        {{-- ADD DIV WHEN THERE ARE NO AUTHORS --}}




                        @endif

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
                                        <input name="se" id="se12" type="text" class="search" placeholder="Rechercher..." />
                                        <button class="search-submit2" id="submit_btn12"><i class="fas fa-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->


                        @livewire('client.components.domains-list')


                        {{-- @if(count($this->domains))
                            <div class="box-widget fl-wrap">
                                <div class="widget-title">Domaines de recherche</div>
                                <div class="box-widget-content">
                                    <div class="tags-widget">
                                        @foreach($this->domains as $domain)
                                            <a href="#">{{ $domain->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif --}}


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
                        <!-- box-widget  end -->

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
            <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#list').niceSelect();
            $('#list').on('change', function (e) {
                @this.set('filter', e.target.value);
        });
    });
    </script>
@endpush
