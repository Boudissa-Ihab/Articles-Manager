<div>
    @if(count($this->domains))
        <div class="box-widget fl-wrap">
            <div class="widget-title">Domaines de recherche</div>
            <div class="box-widget-content">
                <div class="sb-categories_bg">
                    @foreach ($this->domains as $domain)
                        <a href="{{ route('domains.domain', ['domain' => $domain]) }}" class="sb-categories_bg_item">
                            <div class="bg-wrap">
                                <div class="bg" data-bg="{{ asset('img/client/grey-background.jpg') }}"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="spb-categories_title">{{ $domain->name }}</div>
                            <div class="spb-categories_counter">{{ $domain->documents_count }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
