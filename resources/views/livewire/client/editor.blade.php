<div>
    <div>
        <img src="{{ asset('img/client/lac-eau-background.jpg') }}" style="height: 160px; width: auto;">
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Contenu de section</h2>
                    </div>
                    <div class="about-wrap">
                        @if($this->section == "Association")
                            @setting("association")
                        @elseif($this->section == "Organisation")
                            @setting("organization")
                        @elseif($this->section == "Termes et conditions")
                            @setting("terms_and_conditions")
                        @elseif($this->section == "Politique de confidentialité")
                            @setting("privacy_policy")
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
