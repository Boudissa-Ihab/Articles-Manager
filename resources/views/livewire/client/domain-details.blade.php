<div>
    <div>
        <img src="{{ asset('img/client/montagne-background.jpg') }}" style="height: 160px; width: auto;">
    </div>
    <!--section   -->
    <section>
        <div class="container">
            <div class="main-container fl-wrap">
                <div class="section-title">
                    <h2>Articles scientifiques</h2>
                    <h4>Cliquez sur le titre pour afficher l'article</h4>
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

                <div style="text-align: left;">
                    <img src="{{ asset('img/brand/review-front-cover.jpg') }}" alt="Couverture avant"
                        style="height: 270px; width: auto; margin: 10px 2px 10px 0;">
                    <img src="{{ asset('img/brand/review-back-cover.jpg') }}" alt="Couverture arrière"
                        style="height: 270px; width: auto; margin: 10px 0 10px 2px;">
                </div>

                @if(count($this->domainDocuments))
                    <div class="grid-post-wrap gallery-items">
                        @foreach($this->domainDocuments as $document)
                            <div class="gallery-item">
                                <div class="grid-post-item bold_gpi fl-wrap">
                                    {{-- <div class="grid-post-media">
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
                                    @endif --}}
                                    <div class="grid-post-content">
                                        <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                        {{-- <p>{{ Str::limit($document->description, 100) }}</p> --}}
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
                @endif

                <div class="clearfix"></div>
                <!--pagination-->
                <div class="pagination">
                    {{ $this->domainDocuments->links('livewire.pagination')}}
                </div>
                <!--pagination end-->
            </div>
        </div>
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
