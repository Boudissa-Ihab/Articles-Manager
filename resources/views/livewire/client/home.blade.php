<div>

    @livewire('client.slider')

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div class="section-title sect_dec">
                            <h2>Liste d'articles</h2>
                        </div>
                        @if (count($this->documents))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="picker-wrap-container fl-wrap">
                                        <div class="picker-wrap-controls">
                                            <ul class="fl-wrap">
                                                <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                                <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                                <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                            </ul>
                                        </div>
                                        <div class="picker-wrap fl-wrap">
                                            <div class="list-post-wrap fl-wrap">
                                                @foreach ($this->documents as $document)
                                                    <div class="list-post fl-wrap">
                                                        <div class="list-post-content" style="width: 100% !important;">
                                                            @foreach ($document->domains as $domain)
                                                                <a class="post-category-marker" style="margin-right: 6px;" href="{{ route('domains.domain', ['domain' => $domain]) }}">{{ $domain->name }}</a>
                                                            @endforeach
                                                            <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                                            <span class="post-date"><i class="fas fa-clock"></i> 18 may 2022</span>
                                                            <p>{{ Str::limit($document->description, 120) }}</p>
                                                            <ul class="post-opt">
                                                                <li><i class="fas fa-comments"></i> 6 </li>
                                                                <li><i class="fas fa-eye"></i>  587 </li>
                                                            </ul>
                                                            <div class="author-link" style="margin-bottom: 5px;">
                                                                @foreach ($document->authors as $author)
                                                                    <a href="{{ route('authors.author', ['author' => $author]) }}"><span>{{ $author->name }}</span></a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="controls-limit fl-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('documents') }}" class="dark-btn fl-wrap">Voir plus</a>
                        @endif
                    </div>
                    <div class="limit-box"></div>
                </div>

                <!-- AD
                <div class="content-banner-wrap cbw_mar">
                    <img src="{{ asset('img/client/all/banner.jpg') }}" class="respimg" alt="">
                </div>
                AD end -->

                <div class="col-md-4">
                    <div class="sidebar-content fl-wrap fix-bar">

                        @livewire('client.components.new-featured-documents')

                        @livewire('client.components.domains-list')

                        <!-- <div class="box-widget fl-wrap">
                            <div class="widget-title">Follow Us</div>
                            <div class="box-widget-content">
                                <div class="social-widget">
                                    <a href="#" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget-title">Likes</span>
                                        <span class="soc-widget_counter">2640</span>
                                    </a>
                                    <a href="#" class="twitter-soc">
                                        <i class="fab fa-twitter"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" class="youtube-soc">
                                        <i class="fab fa-youtube"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                    <a href="#" class="instagram-soc">
                                        <i class="fab fa-instagram"></i>
                                        <span class="soc-widget-title">Followers</span>
                                        <span class="soc-widget_counter">1456</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="box-widget fl-wrap">
                            <div class="widget-title">Nous suivre sur</div>
                            <div class="box-widget-content">
                                <div class="social-widget">
                                    <a href="@setting('facebook_link')" target="_blank" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget_counter">Facebook</span>
                                    </a>
                                    <a href="@setting('twitter_link')" target="_blank" class="twitter-soc">
                                        <i class="fab fa-twitter"></i>
                                        <span class="soc-widget_counter">Twitter</span>
                                    </a>
                                    <a href="@setting('instagram_link')" target="_blank" class="instagram-soc">
                                        <i class="fab fa-instagram"></i>
                                        <span class="soc-widget_counter">Instagram</span>
                                    </a>
                                    <a href="@setting('linkedin_link')" target="_blank" class="facebook-soc">
                                        <i class="fab fa-linkedin"></i>
                                        <span class="soc-widget_counter">Linkedin</span>
                                    </a>
                                    <a href="@setting('youtube_link')" target="_blank" class="youtube-soc">
                                        <i class="fab fa-youtube"></i>
                                        <span class="soc-widget_counter">Youtube</span>
                                    </a>
                                    <a href="@setting('zotero_link')" target="_blank">
                                        <i class="fab fa-zotero"></i>
                                        <span class="soc-widget_counter">Zotero</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://decapan.hypotheses.org/" target="_blank"
                                        style="
                                            float: left;
                                            width:98%;
                                            margin:0 2% 2% 0;
                                            padding-top: 10px;
                                            color: #000;
                                            border-radius: 2px;
                                            height: 80px;
                                            background: #f5f5f5;
                                            border: 1px solid #eee;
                                            float: left;
                                            margin: 0 0 10px 0;"
                                        >
                                            <i class="hypotheses"></i>
                                            <span
                                                style="
                                                position: absolute;
                                                font-weight: 600;
                                                margin-top: 20px;
                                                margin-left: 12px;">
                                                DECAPAN Hypotheses
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="limit-box fl-wrap"></div>
        </div>
    </section> --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Organisation</h2>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p style="text-align:center"><span style="color:#c0392b"><span
                                    style="font-size:24px"><u><em>Directeur de la revue</em></u></span></span></p>
                        <ul>
                            <li><span style="font-size:16px; margin-right: 3px;">Iddir Amara</span>
                                <a href="mailto:iddir.amara@univ-alger2.dz" data-toggle="tooltip"
                                    title="iddir.amara@univ-alger2.dz"><i class="far fa-envelope fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="limit-box"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <p style="text-align:center"><span style="color:#c0392b"><span
                                    style="font-size:24px"><u><em>Comit&eacute; &eacute;ditorial</em></u></span></span>
                        </p>
                        <ul style="line-height: 30px;">
                            <li><span style="font-size:16px; margin-right: 3px;">Salah Abdessadok</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Kamel Amri</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Hassan Aouragh</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Khoukha Ayati</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Ilhem Bentaleb</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Hayette Berkani</span>
                                <a href="mailto:tamrit@hotmail.com" data-toggle="tooltip" title="tamrit@hotmail.com"><i
                                        class="far fa-envelope fa-lg"></i></a>
                            </li>{{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Alejandra Calder&Oacute;n
                                    Ord&eacute;&ntilde;ez</span></li>{{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Yasmina Cha&Iuml;d-Saoudi</span>
                                <a href="mailto:yasmina.chaid@univ-alger2.dz" data-toggle="tooltip"
                                    title="yasmina.chaid@univ-alger2.dz"><i class="far fa-envelope fa-lg"></i></a>
                            </li>{{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Amel Chakroun</span>
                                <a href="mailto:chakrounamel2@gmail.com" data-toggle="tooltip"
                                    title="chakrounamel2@gmail.com"><i class="far fa-envelope fa-lg"></i></a>
                            </li>{{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Rosa Fregel</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Gwenaelle Goude</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Sonia Hajri</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Farid Ighilahriz</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Giulio Lucarini</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Hajer Mejri</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Djouher Oubraham</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Thomas Perrin</span>
                                <a href="mailto:thomas.perrin@cnrs.fr" data-toggle="tooltip"
                                    title="thomas.perrin@cnrs.fr"><i class="far fa-envelope fa-lg"></i></a>
                            </li>{{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Kahina Roumane</span></li>
                            {{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Isabelle Sid&eacute;ra</span>
                                <a href="mailto:isabelle.sidera@cnrs.fr" data-toggle="tooltip"
                                    title="isabelle.sidera@cnrs.fr"><i class="far fa-envelope fa-lg"></i></a>
                            </li>{{-- <br> --}}
                            <li><span style="font-size:16px; margin-right: 3px;">Daniela Zampetti</span>
                                <a href="mailto:daniela.zampetti@fondazione.uniroma1.it" data-toggle="tooltip"
                                    title="daniela.zampetti@fondazione.uniroma1.it"><i
                                        class="far fa-envelope fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p style="text-align:center"><span style="color:#c0392b"><span
                                    style="font-size:24px"><u><em>Comit&eacute; scientifique</em></u></span></span></p>
                        <ul style="line-height: 30px;">
                            <li><span style="font-size:16px;">Yves Coppens ✟ (Pr&eacute;sident d&#39;honneur)</span>
                            </li>
                            <li><span style="font-size:16px;">Mathilda Arnay de La Rosa</span></li>
                            <li><span style="font-size:16px;">Barbara Barich</span></li>
                            <li><span style="font-size:16px; margin-right: 3px;">Larbi Boudad</span>
                                <a href="mailto:larbi.boudad@fsr.um5.ac.ma" data-toggle="tooltip"
                                    title="larbi.boudad@fsr.um5.ac.ma"><i class="far fa-envelope fa-lg"></i></a>
                            </li>
                            <li><span style="font-size:16px;">Rachid Hamdidouche</span></li>
                            <li><span style="font-size:16px;">Estelle Herrscher</span></li>
                            <li><span style="font-size:16px;">Mohamed Raouf Karray</span></li>
                            <li><span style="font-size:16px;">David Lubell</span></li>
                            <li><span style="font-size:16px;">Said Maouche</span></li>
                            <li><span style="font-size:16px;">George Onrubio Pintado</span></li>
                            <li><span style="font-size:16px;">Pierre Vermeersch</span></li>
                        </ul>
                    </div>
                    {{-- @if (count($this->documents))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="picker-wrap-container fl-wrap">
                                    <div class="picker-wrap-controls">
                                        <ul class="fl-wrap">
                                            <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                            <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                            <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="picker-wrap fl-wrap">
                                        <div class="list-post-wrap fl-wrap">
                                            @foreach ($this->documents as $document)
                                                <div class="list-post fl-wrap">
                                                    <div class="list-post-content" style="width: 100% !important;">
                                                        @foreach ($document->domains as $domain)
                                                            <a class="post-category-marker" style="margin-right: 6px;" href="{{ route('domains.domain', ['domain' => $domain]) }}">{{ $domain->name }}</a>
                                                        @endforeach
                                                        <h3><a href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a></h3>
                                                        <p>{{ Str::limit($document->description, 120) }}</p>
                                                        <div class="author-link" style="margin-bottom: 5px;">
                                                            @foreach ($document->authors as $author)
                                                                <a href="{{ route('authors.author', ['author' => $author]) }}"><span>{{ $author->name }}</span></a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="controls-limit fl-wrap"></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('documents') }}" class="dark-btn fl-wrap">Voir plus</a>
                    @endif --}}
                    <div class="limit-box"></div>
                </div>
                <p style="text-align: center;"><strong>
                        <u>
                            <span style="font-size:16px">Editeur &quot;Starbook agency&quot;</span>
                        </u>
                    </strong></p>
            </div>

            <div class="limit-box fl-wrap"></div>

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Recommandation aux auteurs</h2>
                    </div>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Indications aux auteurs
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Recensions
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Reviews
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Parutions
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Recent publications
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Instructions&nbsp; aux auteurs
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Ligne &eacute;ditoriale
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Le Journal de Pr&eacute;histoire et
                            d&rsquo;Ecologie d&rsquo;Afrique du Nord est une revue annuelle qui a pour
                            objectif d&rsquo;encourager les &eacute;changes de r&eacute;sultats et
                            d&rsquo;id&eacute;es des diff&eacute;rentes &eacute;quipes qui travaillent
                            sur le vaste territoire de l&rsquo;Afrique du Nord. Il s&rsquo;agit aussi
                            d&rsquo;un espace qui permettra aux scientifiques qui
                            s&rsquo;int&eacute;ressent aux diff&eacute;rentes questions li&eacute;es
                            &agrave; la g&eacute;ologie du Quaternaire, le pal&eacute;oenvironnement, la
                            pal&eacute;o&eacute;cologie, l&rsquo;homme et l&rsquo;animal,
                            l&rsquo;industrie lithique, les monuments fun&eacute;raires, l&rsquo;art
                            rupestre et d&rsquo;autres questions arch&eacute;ologiques. La revue pose
                            les questions en relation avec les soci&eacute;t&eacute;s
                            pr&eacute;historiques, leur cultures et les soci&eacute;t&eacute;s dans leur
                            contexte.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Le Journal PECAN (Pr&eacute;histoire et Ecologie
                            d&rsquo;Afrique du Nord) ouvre ses colonnes &agrave; des travaux originaux
                            de toutes les disciplines, en fran&ccedil;ais, en anglais, en arabe ou en
                            tamazight, portant sur les soci&eacute;t&eacute;s pr&eacute;historiques et
                            leur environnement. La revue re&ccedil;oit aussi des recensions critiques
                            d&rsquo;ouvrages r&eacute;cents, les parutions et &eacute;v&eacute;nements
                            scientifiques important (soutenance de th&egrave;ses, colloques,
                            congr&egrave;s &hellip;) dans le th&egrave;me propos&eacute;. Elle peut
                            aussi accueillir des actes de colloques ou autres publications en lien avec
                            le sujet trait&eacute;.
                        </span>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Pour les auteurs
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Le Journal de Pr&eacute;histoire et
                            d&rsquo;Ecologie d&rsquo;Afrique du Nord accepte les articles qui
                            n&rsquo;ont pas &eacute;t&eacute; soumis dans une autre revue. Les droits de
                            reproductions de l&rsquo;article, des illustrations sont
                            r&eacute;serv&eacute;s au Journal. La reproduction de l&rsquo;article doit
                            faire l&rsquo;objet d&rsquo;une demande &eacute;crite au pr&eacute;alable,
                            adress&eacute;e &agrave; la r&eacute;daction de la revue. Ceci est fait pour
                            &eacute;viter la multiplication sous d&rsquo;autres formes de
                            l&rsquo;article &eacute;dit&eacute;.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Le nombre de pages des manuscrits n&rsquo;est
                            pas limit&eacute;, mais la priorit&eacute; sera donn&eacute;e &agrave; des
                            textes courts (moins de 60&nbsp;000 signes), r&eacute;sum&eacute;s et
                            bibliographie comprise. Le Journal PECAN accepte des notes
                            d&rsquo;information pour signaler une d&eacute;couverte in&eacute;dite ou
                            des r&eacute;sultats pr&eacute;liminaires, des mises au point critique, des
                            rapports de fouilles ou des r&eacute;sum&eacute;s de
                            recherches.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Les articles accept&eacute;s seront soumis
                            &agrave; des relecteurs critiques (deux reviewers); si les auteurs le
                            demandent, ils peuvent sugg&eacute;rer des relecteurs appropri&eacute;s. Les
                            remarques ou critiques doivent &ecirc;tre suivies par l&rsquo;auteur de
                            l&rsquo;article.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Les manuscrits devront &ecirc;tre r&eacute;diger
                            en suivant les recommandations rigoureuses et que les auteurs devront
                            adresser &agrave; l&rsquo;adresse mail du Journal de Pr&eacute;histoire et
                            d&rsquo;Ecologie d&rsquo;Afrique du Nord.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Tout manuscrit non conforme aux recommandations
                            sera retourn&eacute;. Chaque texte est &eacute;valu&eacute; par deux
                            rapporteurs voir plus.
                        </span>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Chaque manuscrit soumis &agrave; la
                            r&eacute;daction du Journal doit &ecirc;tre pr&eacute;senter en format A4,
                            avec un double interligne et des marges de 3 cm et les pages doivent
                            &ecirc;tre num&eacute;roter. Le texte d&eacute;finitif doit &ecirc;tre
                            adresser en format num&eacute;rique et ouvert (word), les tableaux, les
                            graphiques, les figures et les l&eacute;gendes sont &agrave; envoyer
                            s&eacute;par&eacute;ment du texte, les illustrations (originales) sur Adob
                            Illustrator, Photoshop, les photographies (300 dpi minimum), les figures ou
                            dessins (1000 dpi minimum), la police Times New Roman, corps 12.
                        </span>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Format
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Les manuscrits, dans les langues
                            d&eacute;j&agrave; cit&eacute;s au stylez scientifique, doivent &ecirc;tre
                            structur&eacute;s en suivant les indications suivantes&nbsp;:
                        </span>
                    </p>
                    <ul style="list-style: circle inside;">
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Le titre en fran&ccedil;ais ou anglais&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Le (s) nom (s) et le (s) pr&eacute;nom (s)
                                de (s) auteur (s), l&rsquo;adresse professionnelle, l&rsquo;adresse
                                mail&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Le r&eacute;sum&eacute; en fran&ccedil;ais, anglais,
                                arabe ou tamazight ne doit pas d&eacute;passer les 300
                                mots&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Les mots cl&eacute;s dans les langues
                                d&rsquo;expression choisis&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                La mise en forme italique pour les noms de
                                genres et d&rsquo;esp&egrave;ces&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Le texte courant doit porter les
                                r&eacute;f&eacute;rences aux illustrations et aux tableaux. Il faut les
                                indiquer comme suit&nbsp;: Fig. 1), (Figs 3&nbsp;; 5), (Fig.s 1-5),
                                (Tableau 1)&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Les l&eacute;gendes des figures,
                                donn&eacute;es sur une feuille s&eacute;par&eacute;e doivent porter
                                toutes les indications (Echelle, les abr&eacute;viations, le nom des
                                auteurs des cartes ou autres figures)
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Il faut indiquer l&rsquo;emplacement des figures, tableaux ou illustrations&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Il faut limiter les notes de bas de page et renvois&nbsp;;
                            </span>
                        </li>
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                Il faut respecter les normes des r&eacute;f&eacute;rences bibliographiques.
                            </span>
                        </li>
                    </ul>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                Illustrations
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Il est important de tenir compte de la
                            qualit&eacute; des illustrations &agrave; int&eacute;grer dans le manuscrit.
                            Le support num&eacute;rique dot r&eacute;pondre aux exigences minimales. Les
                            recommandations informatiques pour le traitement de l&rsquo;image sont
                            &agrave; prendre en consid&eacute;ration (300 dpi minimum, Photoshop,
                            Illustrator &hellip;). Les relev&eacute;s ou photographies anciennes doivent
                            r&eacute;pondre aux conditions minimales (600 dpi). Les illustrations,
                            figures et cartes doivent porter une &eacute;chelle m&eacute;trique. Les
                            tableaux doivent &ecirc;tre lisibles.
                        </span>
                    </p>
                    <p style="text-align:justify">&nbsp;</p>
                    <p style="text-align:justify">
                        <b>
                            <span style="font-size: 20px;">
                                R&eacute;f&eacute;rences bibliographiques
                            </span>
                        </b>
                    </p>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Dans le texte, les r&eacute;f&eacute;rences aux
                            auteurs sont en minuscules, sans virgule avant l&rsquo;ann&eacute;e,
                            exemple&nbsp;: Sid&eacute;ra (2020), Perrin (2020, 2022), ou bien
                            (Sid&eacute;ra 2020&nbsp;; Perrin 2022), (Amara &amp; Berkani 2020, 2022),
                            Sid&eacute;ra (2020&nbsp;: 15&nbsp;; 2022&nbsp;: 20), Perrin (2020&nbsp;:
                            fig. 5).
                        </span>
                    </p>
                    <ul style="list-style: circle inside;">
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                R&eacute;f&eacute;rence &agrave; un ouvrage&nbsp; &nbsp;
                            </span>
                        </li>
                    </ul>

                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Nom en entier Premi&egrave;re lettre du
                            pr&eacute;nom (l&rsquo;ann&eacute;e) &ndash; Le titre en italique. Edition,
                            ville de l&rsquo;&eacute;dition.
                        </span>
                    </p>
                    <ul style="list-style: circle inside;">
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                R&eacute;f&eacute;rence &agrave; un ouvrage collectif
                            </span>
                        </li>
                    </ul>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Nom en entier Premi&egrave;re lettre du
                            pr&eacute;nom (l&rsquo;ann&eacute;e) &ndash; Le titre, <em>in</em> &nbsp;Le(s)
                            nom(s) de(s) auteur(s), le titre de l&rsquo;ouvrage en italique.
                            L&rsquo;&eacute;diteur, la ville ou a eu lieu l&rsquo;&eacute;dition&nbsp;:
                            num&eacute;ro de pages
                        </span>
                    </p>
                    <ul style="list-style: circle inside;">
                        <li style="text-align:justify; margin-left: 15px;">
                            <span style="font-size: 16px;">
                                R&eacute;f&eacute;rence &agrave; une th&egrave;se
                            </span>
                        </li>
                    </ul>
                    <p style="text-align:justify">
                        <span style="font-size: 16px;">
                            Nom en entier Premi&egrave;re lettre du pr&eacute;nom
                            (l&rsquo;ann&eacute;e) &ndash; Le titre en italique.
                            Th&egrave;se de doctorat. Le nom de l&rsquo;universit&eacute; et la ville.
                        </span>
                    </p>
                </div>
            </div>

            <div class="limit-box fl-wrap"></div>

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-12">
                    <div class="section-title sect_dec">
                        <h2>Politique éditoriale</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section -->
    <section class="no-padding">
        <div class="fs-carousel-wrap">
            <div class="fs-carousel-wrap_title">
                <div class="fs-carousel-wrap_title-wrap fl-wrap">
                    <h4>Derniers documents ajoutés</h4>
                    <h5>Ne ratez pas les nouveautés</h5>
                </div>
                <div class="abs_bg"></div>
                <div class="gs-controls">
                    <div class="gs_button gc-button-next"><i class="fas fa-caret-right"></i></div>
                    <div class="gs_button gc-button-prev"><i class="fas fa-caret-left"></i></div>
                </div>
            </div>
            @if (count($this->latestDocuments))
                <div class="fs-carousel fl-wrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($this->latestDocuments as $document)
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="grid-post-item bold_gpi fl-wrap">
                                        <div class="grid-post-media gpm_sing">
                                            <div class="bg"
                                                style="background-image: url('{{ Storage::url('documents/' . $document->photo) }}');">
                                            </div>
                                            <div class="grid-post-media_title">
                                                @if ($document->featured)
                                                    <div class="post-category-marker" style="z-index: 1;">Populaire
                                                    </div>
                                                @endif
                                                <h4><a
                                                        href="{{ route('documents.document-details', ['document' => $document]) }}">{{ $document->title }}</a>
                                                </h4>
                                                {{-- <span class="video-date"><i class="fas fa-clock"></i> 02 March 2022</span>
                                                <ul class="post-opt">
                                                    <li><i class="fas fa-comments"></i> 7 </li>
                                                    <li><i class="fas fa-eye"></i>  88 </li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- swiper-slide end-->
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- section end -->

    <!-- AD  -->
    {{-- <div class="gray-bg ad-wrap fl-wrap">
        <div class="content-banner-wrap">
            <img src="images/all/banner.jpg" class="respimg" alt="">
        </div>
    </div> --}}
    <!-- AD end -->
</div>
