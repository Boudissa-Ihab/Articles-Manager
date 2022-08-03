<div>
    {{-- <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" style="background: rgba(42,104,146,1);"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>{{ $this->section }}</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="{{ route('home') }}">Accueil</a><span>{{ $this->section }}</span>
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
                <a href="{{ route('home') }}">Accueil</a><span>{{ $this->section }}</span>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Contenu de section</h2>
                    </div>
                    <div class="about-wrap">
                        <p> @if($this->section == "Association")
                                @setting("association")
                            @elseif($this->section == "Organisation")
                                @setting("organization")
                            @elseif($this->section == "Termes et conditions")
                                @setting("terms_and_conditions")
                            @elseif($this->section == "Politique de confidentialité")
                                @setting("privacy_policy")
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
