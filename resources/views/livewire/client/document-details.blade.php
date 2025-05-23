<div>
    <div>
        <img src="{{ asset('img/client/cave-background.jpg') }}" style="height: 160px; width: auto;">
    </div>
    <!--section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main-container fl-wrap fix-container-init">
                        <div class="shop-header-title fl-wrap">
                            <div class="row">
                                <div class="col-md-7">
                                    <h2>{{ $document->title }}{{-- <span>Sale -30%</span> --}}</h2>

                                    @if(!$document->is_free)
                                        <div class="shop-header-title_opt">
                                            <ul>
                                                <li><span class="grid-item_price_item rent-price">
                                                    <strong>
                                                        Prix: {{ $document->price ?? 0 }} DA
                                                    </strong>
                                                </span></li>
                                                {{-- <li>
                                                    <div class="reviews_counter_wrap">
                                                        <div class="star-rating" data-starrating="5"> </div>
                                                        <div class="reviews_counter_wrap_text">2 reviews</div>
                                                    </div>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    @endif
                                    {{-- <div class="post-opt single_post-opt">
                                        <ul class="no-list-style">
                                            <li><i class="fal fa-eye"></i> <span>164</span></li>
                                            <li><i class="fal fa-shopping-bag"></i> <span>26</span></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="col-md-5">
                                    <div class="qty_btn">
                                        @if($document->is_free)
                                            <button class="btn" {{-- wire:click.prevent="download({{$document}})" --}}
                                            onclick="LoadPdfFromUrl('{{ asset('storage/documents/' .$document->path) }}')"><span>Ouvrir</span> <i class="fas fa-caret-right"></i> </button>
                                            <button class="btn" wire:click.prevent="download({{$document}})"><span>Télécharger</span> </button>
                                        @else
                                            <button class="btn"><span>Ajouter au panier</span> <i class="fas fa-caret-right"></i> </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post-media fl-wrap">
                            <div class="single-slider-wrap fl-wrap">
                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper lightgallery" style="justify-content: center;">
                                            <img src="{{ asset('img/brand/review-front-cover.jpg') }}" alt="Couverture avant"
                                                style="height: 260px; width: auto; margin: 10px 2px 10px 0;">
                                            <img src="{{ asset('img/brand/review-back-cover.jpg') }}" alt="Couverture arrière"
                                                style="height: 260px; width: auto; margin: 10px 0 10px 2px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="pdf_container"></div>

                        <!-- single-post-content   -->
                        <div class="single-post-content spc_column shop_post-content fl-wrap">
                            <div class="clearfix"></div>
                            <div class="single-post-content_column">
                                <div class="share-holder ver-share fl-wrap">
                                    <div class="share-title">Partager <br> l'article</div>
                                    <div class="share-container isShare"></div>
                                </div>
                            </div>
                            <div class="single-post-content_text">
                                <p class="has-drop-cap">{{ $document->description }}</p>
                                <div class="content-table fl-wrap">
                                    <h4 class="mb_head">Fiche technique</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Titre du document</td>
                                                <td>{{ $document->title }}</td>
                                            </tr>
                                            <tr>
                                                <td>Date d'acceptation</td>
                                                <td>{{ date("d-m-Y", strtotime($document->accepted_at)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Date de publication</td>
                                                <td>{{ date("d-m-Y", strtotime($document->published_at)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nombre de pages</td>
                                                <td>{{ $document->nb_pages }}</td>
                                            </tr>
                                            @if(!$document->is_free)
                                                <tr>
                                                    <td>Prix du document</td>
                                                    <td>@if ($document->is_free) 0
                                                        @else {{ $document->price }}
                                                        @endif DA
                                                    </td>
                                                </tr>
                                            @endif
                                            @if($document->keywords)
                                                <tr>
                                                    <td>Mots-clés</td>
                                                    <td>{{ $document->keywords }}</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table end -->
                            </div>

                            <div class="single-post-footer fl-wrap">
                                <div class="post-single-tags">
                                    <span class="tags-title"><i class="fas fa-user"></i> Auteurs : </span>
                                    <div class="tags-widget">
                                        @foreach($document->authors as $author)
                                            <a href="{{ route('authors.author', ['author' => $author]) }}">{{ $author->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="single-post-footer fl-wrap">
                                <div class="post-single-tags">
                                    <span class="tags-title"><i class="fas fa-sitemap"></i> Mots-clés : </span>
                                    <div class="tags-widget">
                                        @foreach($document->domains as $domain)
                                            <a href="#">{{ $domain->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="limit-box2 fl-wrap"></div>
                        <!-- single-post-content end -->
                        <!--post-related-->

                    {{--
                        <div class="post-related fl-wrap">
                            <h6 class="item-related_title">You Might Also Like</h6>
                            <!-- post-related -->
                            <div class=" row">
                                <!-- 1  -->
                                <div class="item-related col-md-4">
                                    <a href="#"><img src="{{ asset('img/client/shop/1.jpg') }}" alt=""></a>
                                    <div class="item-related_content fl-wrap">
                                        <h3><a href="#">Gmag Merch Wallet</a></h3>
                                        <ul class="pwic_opt">
                                            <li><i class="fas fa-barcode"></i><span>Price: $112</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 1 end-->
                                <!-- 2  -->
                                <div class="item-related col-md-4">
                                    <a href="#"><img src="{{ asset('img/client/shop/1.jpg') }}" alt=""></a>
                                    <div class="item-related_content fl-wrap">
                                        <h3><a href="#">Storage Double Jars</a></h3>
                                        <ul class="pwic_opt">
                                            <li><i class="fas fa-barcode"></i><span>Price: $112</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 2 end-->
                                <!-- 3  -->
                                <div class="item-related col-md-4">
                                    <a href="#"><img src="{{ asset('img/client/shop/1.jpg') }}" alt=""></a>
                                    <div class="item-related_content fl-wrap">
                                        <h3><a href="#">Impact Merch Banner</a></h3>
                                        <ul class="pwic_opt">
                                            <li><i class="fas fa-barcode"></i><span>Price: $112</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- 3 end-->
                            </div>
                        </div>
                        --}}
                        <!-- post-related  end-->
                        <div class="limit-box2 fl-wrap"></div>
                    </div>
                </div>
                <!-- sidebar   -->
                <div class="col-md-4">
                    <div class="sidebar-content fl-wrap fixed-bar">
                        {{-- <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="search-widget fl-wrap">
                                    <form action="#">
                                        <input name="se" id="se12" type="text" class="search" placeholder="Rechercher..." value="" />
                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Prix</div>
                            <div class="box-widget-content">
                                <div class="price-rage-wrap shop-rage-wrap chose-input fl-wrap">
                                    <a href="#" class="srw_btn color-bg">Appliquer</a>
                                    <div class="price-rage-item fl-wrap">
                                        <input type="text" class="shop-price" data-min="0" data-max="1000" name="shop-price" data-step="10" value="$$">
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        <!-- box-widget -->
                        {{-- <div class="box-widget fl-wrap">
                            <div class="widget-title">Popular Products</div>
                            <div class="box-widget-content">
                                <div class="post-widget-container fl-wrap">
                                    <!-- post-widget-item -->
                                    <div class="post-widget-item fl-wrap">
                                        <div class="post-widget-item-media">
                                            <a href="product-single.html"><img src="images/shop/1.jpg"  alt=""></a>
                                        </div>
                                        <div class="post-widget-item-content">
                                            <h4><a href="product-single.html">Compact Merch Box</a></h4>
                                            <ul class="pwic_opt">
                                                <li><i class="fas fa-barcode"></i><span>Price: $172</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post-widget-item end -->
                                    <!-- post-widget-item -->
                                    <div class="post-widget-item fl-wrap">
                                        <div class="post-widget-item-media">
                                            <a href="product-single.html"><img src="images/shop/1.jpg"  alt=""></a>
                                        </div>
                                        <div class="post-widget-item-content">
                                            <h4><a href="product-single.html">Merch Tea Cup</a></h4>
                                            <ul class="pwic_opt">
                                                <li><i class="fas fa-barcode"></i><span>Price: $239</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post-widget-item end -->
                                    <!-- post-widget-item -->
                                    <div class="post-widget-item fl-wrap">
                                        <div class="post-widget-item-media">
                                            <a href="product-single.html"><img src="images/shop/1.jpg"  alt=""></a>
                                        </div>
                                        <div class="post-widget-item-content">
                                            <h4><a href="product-single.html">Storage Double Jars</a></h4>
                                            <ul class="pwic_opt">
                                                <li><i class="fas fa-barcode"></i><span>Price: $112</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post-widget-item end -->
                                </div>
                            </div>
                        </div> --}}
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Domaines de recherche</div>
                            <div class="box-widget-content">
                                <ul class="cat-wid-list">
                                    @foreach ($this->domains as $domain)
                                        <li><a href="{{ route('domains.domain', ['domain' => $domain->id]) }}">{{ $domain->name }}</a><span>{{ $domain->documents_count }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                    </div>
                    <!-- sidebar  end -->
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js" integrity="sha512-Z8CqofpIcnJN80feS2uccz+pXWgZzeKxDsDNMD/dJ6997/LSRY+W4NmEt9acwR+Gt9OHN0kkI1CTianCwoqcjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js" integrity="sha512-lHibs5XrZL9hXP3Dhr/d2xJgPy91f2mhVAasrSbMkbmoTSm2Kz8DuSWszBLUg31v+BM6tSiHSqT72xwjaNvl0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        var pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';
        var pdfDoc = null;
        var scale = 1; //Set Scale for Zoom.
        var resolution = IsMobile() ? 1.5 : 1; //Set Resolution as per Desktop and Mobile.
        function LoadPdfFromUrl(url) {
            //Read PDF from URL.
            pdfjsLib.getDocument(url).promise.then(function (pdfDoc_) {
                pdfDoc = pdfDoc_;

                //Reference the Container DIV.
                var pdf_container = document.getElementById("pdf_container");
                pdf_container.style.display = "block";
                pdf_container.style.height = IsMobile() ? "1200px" : "820px";

                //Loop and render all pages.
                for (var i = 1; i <= pdfDoc.numPages; i++) {
                    RenderPage(pdf_container, i);
                }
            });
        };
        function RenderPage(pdf_container, num) {
            pdfDoc.getPage(num).then(function (page) {
                //Create Canvas element and append to the Container DIV.
                var canvas = document.createElement('canvas');
                canvas.id = 'pdf-' + num;
                ctx = canvas.getContext('2d');
                pdf_container.appendChild(canvas);

                //Create and add empty DIV to add SPACE between pages.
                var spacer = document.createElement("div");
                spacer.style.height = "20px";
                pdf_container.appendChild(spacer);

                //Set the Canvas dimensions using ViewPort and Scale.
                var viewport = page.getViewport({ scale: scale });
                canvas.height = resolution * viewport.height;
                canvas.width = resolution * viewport.width;

                //Render the PDF page.
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport,
                    transform: [resolution, 0, 0, resolution, 0, 0]
                };

                page.render(renderContext);
            });
        };

        function IsMobile() {
            var r = new RegExp("Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini");
            return r.test(navigator.userAgent);
        }
    </script>
</div>
