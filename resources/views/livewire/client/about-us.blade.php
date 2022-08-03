<div>
    {{-- <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" style="background: rgba(42,104,146,1);"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>À propos</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="{{ route('home') }}">Accueil</a><span>À propos</span>
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
                <a href="{{ route('home') }}">Accueil</a><span>À propos</span>
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
    <!-- section end -->
    <!--section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Qui sommes-nous ?</h2>
                    </div>
                    <div class="about-wrap">
                        <p> @setting('about_us') </p>
                        {{-- <a href="https://vimeo.com/225223404" class="btn float-btn color-btn image-popup"> <span>Our Story Video</span> <i class="fas fa-caret-right"></i></a> --}}
                    </div>
                </div>
                {{-- <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="about-img fl-wrap">
                        <img src="{{ asset('img/client/all/1.jpg') }}" class="respimg" alt="">
                        <div class="about-img-hotifer color-bg">
                            <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
                            <h4>Mark Antony</h4>
                            <h5>Gmag CEO</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
</div>
