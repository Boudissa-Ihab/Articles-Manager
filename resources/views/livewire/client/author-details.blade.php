<div>
    <!--section -->
    {{-- <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" style="background: rgba(42,104,146,1);"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>{{ $this->author->name }}</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('authors') }}">Auteurs</a>
                <span>{{ $this->author->name }}</span>
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
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('authors') }}">Auteurs</a>
                <span>{{ $this->author->name }}</span>
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
                <div class="col-md-4">
                    <div class="left_fix-bar fl-wrap">
                        <div class="profile-card-wrap fl-wrap">
                            <div class="profile-card_media fl-wrap">
                                <img src="{{ asset('storage/authors/' .$author->avatar) }}" alt="{{ $author->name }}">
                                <div class="profile-card_media_content">
                                    <h4>{{ $author->name }}</h4>
                                </div>
                                <div class="abs_bg"></div>
                                <div class="profile-card-stats">
                                    <ul>
                                        <li><span>{{ count($this->authorDocuments) }}</span>Article(s)</li>
                                        <li><span>1567</span> Vues</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="profile-card_content">
                                <h4>À propos</h4>
                                <p>{{ $author->biography }}</p>
                                <div class="pc_contacts">
                                    <ul>
                                        <li>
                                            <span>Email :</span>
                                            <a href="mailto:{{ $author->email ?? "" }}">
                                            @if($author->email)
                                                {{ $author->email }}</a>
                                            @else
                                                /
                                            @endif
                                        </li>
                                        <li>
                                            <span>Numéro :</span>
                                            @if($author->phone1)
                                                {{ $author->phone1 }}</a>
                                            @else
                                                /
                                            @endif
                                        </li>
                                        @if($author->phone2)
                                            <li>
                                                <span>Numéro 2 :</span> <a href="#">{{ $author->phone2 }}</a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="main-container fl-wrap fix-container-init">
                        <div class="section-title">
                            <h3>Articles de l'auteur</h3>
                            <div class="steader_opt steader_opt_abs" wire:ignore>
                                <select wire:model="filter" id="list" class="style-select no-search-select">
                                    <option value="">Sélectionner un filtre :</option>
                                    <option value="AZ">Articles A-Z</option>
                                    <option value="ZA">Articles Z-A</option>
                                    <option value="first_accepted">Date d'acceptation (ancienne)</option>
                                    <option value="last_accepted">Date d'acceptation (récente)</option>
                                    <option value="first_published">Date de publication (ancienne)</option>
                                    <option value="last_published">Date de publication (récente)</option>
                                    <option value="featured">Articles populaires</option>
                                </select>
                            </div>
                        </div>
                        <!--grid-post-wrap-->
                        <div class="grid-post-wrap">
                            <div class="row">
                                @foreach($this->authorDocuments as $document)
                                    <div class="col-md-4">
                                        <div class="grid-post-item  bold_gpi  fl-wrap">
                                            <div class="grid-post-media">
                                                <a href="{{ route('documents.document-details', ['document' => $document]) }}" class="gpm_link">
                                                    <div class="bg-wrap">
                                                        <div class="bg" style="background-image: url('{{ Storage::url('documents/' .$document->photo) }}');"></div>
                                                    </div>
                                                </a>
                                                @if($document->is_free)
                                                    <span class="post-media_title">Open Access</span>
                                                @endif
                                            </div>
                                            @if($document->featured)
                                                <div class="post-category-marker purp-bg" style="z-index: 1;">Populaire</div>
                                            @endif
                                            <div class="grid-post-content">
                                                <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                                <p>
                                                    {{ Str::limit($document->description, 100) ?? "" }}
                                                </p>
                                            </div>
                                            <div class="grid-post-footer">
                                                <div class="author-link">
                                                    @foreach ($document->authors as $author)
                                                        <a href="{{ route('authors.author', ['author' => $author]) }}">
                                                            @if ($loop->last)
                                                                {{ $author->name }}
                                                            @else
                                                                {{ $author->name }} -
                                                            @endif
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--grid-post-wrap end-->
                        <div class="clearfix"></div>
                        <!--pagination-->
                        <div class="pagination">
                            {{ $this->authorDocuments->links('livewire.pagination') }}
                        </div>
                        <!--pagination end-->
                    </div>
                </div>
            </div>
        </div>
        <div class="limit-box fl-wrap"></div>
    </section>
    <!-- section end -->
    <!-- section  -->
    {{-- <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
        </div>
    </div> --}}
    <!-- section end -->
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
