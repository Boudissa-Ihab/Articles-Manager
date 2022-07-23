<div>
    <div class="hero-slider-wrap fl-wrap">
        @if(count($this->slides))
            <div class="hero-slider-container multi-slider fl-wrap full-height">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($this->slides as $slide)
                            <div class="swiper-slide">
                                <div class="bg-wrap">
                                    <div class="bg" style="background-image: url('{{ Storage::url('slides/' .$slide->photo) }}');" data-swiper-parallax="40%"></div>
                                    <div class="overlay"></div>
                                </div>
                                {{-- <div class="hero-item fl-wrap">
                                    <div class="container">
                                        <a class="post-category-marker" href="category.html">Technology</a>
                                        <div class="clearfix"></div>
                                        <h2><a href="post-single.html">Innovations that Bring Pleasure to All Peoples</a></h2>
                                        <h4>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. </h4>
                                        <div class="clearfix"></div>
                                        <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Jessie Bond</span></a></div>
                                        <span class="post-date"><i class="far fa-clock"></i>  18 may 2022</span>
                                    </div>
                                </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i></div>
                <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i></div>
            </div>

            <div class="hero-slider_controls-wrap">
                <div class="container">
                    <div class="hero-slider_controls-list multi-slider_control">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($this->slides as $slide)
                                    <div class="swiper-slide">
                                        <div class="hsc-list_item fl-wrap">
                                            <div class="hsc-list_item-media">
                                                <div class="bg-wrap">
                                                    <div class="bg" style="background-image: url('{{ Storage::url('slides/' .$slide->photo) }}');" data-swiper-parallax="40%"></div>
                                                </div>
                                            </div>
                                            {{-- <div class="hsc-list_item-content fl-wrap">
                                                <h4>Innovations that Bring Pleasure to All Peoples</h4>
                                                <span class="post-date"><i class="far fa-clock"></i> 18 May 2022</span>
                                            </div> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="multi-pag"></div>
                </div>
            </div>
            <div class="slider-progress-bar act-slider">
                <span>
                    <svg class="circ" width="30" height="30">
                        <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none" />
                        <circle class="circ1" cx="15" cy="15" r="13" stroke="#e93314" stroke-width="2" fill="none" />
                    </svg>
                </span>
            </div>
        @else
            <div class="hero-slider-container multi-slider fl-wrap full-height">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-wrap">
                                <div class="bg" data-bg="{{ asset('img/client/slider-placeholder.jpg') }}" data-swiper-parallax="40%"></div>
                                <div class="overlay"></div>
                            </div>
                            {{-- <div class="hero-item fl-wrap">
                                <div class="container">
                                    <a class="post-category-marker" href="category.html">Technology</a>
                                    <div class="clearfix"></div>
                                    <h2><a href="post-single.html">Innovations that Bring Pleasure to All Peoples</a></h2>
                                    <h4>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. </h4>
                                    <div class="clearfix"></div>
                                    <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Jessie Bond</span></a></div>
                                    <span class="post-date"><i class="far fa-clock"></i>  18 may 2022</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
