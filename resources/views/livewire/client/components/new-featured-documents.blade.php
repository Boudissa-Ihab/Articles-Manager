<div>
    <!-- box-widget -->
    <div class="box-widget fl-wrap">
        <div class="box-widget-content">
            <!-- content-tabs-wrap -->
            <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                <div class="content-tabs fl-wrap">
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class="current"><a href="#tab-popular">Documents populaires </a></li>
                        <li><a href="#tab-resent">Nouveaux documents</a></li>
                    </ul>
                </div>
                <!--tabs -->
                <div class="tabs-container">
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-popular" class="tab-content first-tab">
                            <div class="post-widget-container fl-wrap">
                                @foreach($this->featuredDocuments as $featured)
                                    <div class="post-widget-item fl-wrap">
                                        <div class="post-widget-item-media">
                                            <a href="{{ route('documents.document-details', ['document' => $featured]) }}">
                                                <img src="{{ asset('storage/documents/' .$featured->photo) }}"  alt="{{ $featured->title }}"></a>
                                        </div>
                                        <div class="post-widget-item-content">
                                            <h4>
                                                <a href="{{ route('documents.document-details', ['document' => $featured]) }}">{{ Str::limit($featured->title, 100) }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--tab  end-->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-resent" class="tab-content">
                            <div class="post-widget-container fl-wrap">
                                @foreach($this->latestDocuments as $latest)
                                    <div class="post-widget-item fl-wrap">
                                        <div class="post-widget-item-media">
                                            <a href="{{ route('documents.document-details', ['document' => $latest]) }}">
                                                <img src="{{ asset('storage/documents/' .$latest->photo) }}"  alt="{{ $latest->title }}"></a>
                                        </div>
                                        <div class="post-widget-item-content">
                                            <h4>
                                                <a href="{{ route('documents.document-details', ['document' => $latest]) }}">{{ Str::limit($latest->title, 100) }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--tab end-->
                </div>
                <!--tabs end-->
            </div>
            <!-- content-tabs-wrap end -->
        </div>
    </div>
</div>
