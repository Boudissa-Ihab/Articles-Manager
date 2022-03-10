<div>
    <div class="breadcrumbs-header fl-wrap">
        <div class="container">
            <div class="breadcrumbs-header_url">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('domains') }}">Domaines</a>
                <span>{{ $domain->name }}</span>
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
    <!--section   -->
    <section>
        <div class="container">
            <div class="main-container fl-wrap">
                <div class="section-title">
                    <h2>Articles scientifiques</h2>
                    <h4>Cliquez sur un article pour plus de détails</h4>
                    <div class="steader_opt steader_opt_abs">
                        <select name="filter" id="list" data-placeholder="Persons" class="style-select no-search-select">
                            <option>Latest</option>
                            <option>Most Read</option>
                            <option>Most Viewed</option>
                            <option>Most Commented</option>
                        </select>
                    </div>
                </div>

                @if(count($this->domainDocuments))
                    <div class="grid-post-wrap gallery-items">
                        @foreach($this->domainDocuments as $document)
                            <div class="gallery-item">
                                <div class="grid-post-item bold_gpi fl-wrap">
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
                                    <div class="grid-post-content">
                                        <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                        <span class="post-date"><i class="far fa-clock"></i>  18 may 2022</span>
                                        <p>{{ Str::limit($document->description, 100) }}</p>
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

                                    {{-- <span>
                                        @foreach ($document->authors as $author)
                                            <a href="{{ route('authors.author', ['author', $author]) }}">
                                                @if ($loop->last)
                                                    {{ $author->name }}
                                                @else
                                                    {{ $author->name }} -
                                                @endif
                                            </a>
                                        @endforeach
                                    </span> --}}

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
    <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
        </div>
    </div>
    <!-- section end -->
</div>
