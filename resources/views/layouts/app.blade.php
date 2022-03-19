<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fournir aux chercheurs et étudiants un accès aux articles scientifiques">
    <meta name="keywords" content="Articles Scientifiques, Téléchargement, Documents, Chercheurs Actualité">
    <meta name="author" content="Boudissa Ihab
        Github : https://github.com/Boudissa-Ihab
        Linkedin : https://www.linkedin.com/in/ihab-boudissa-727346176/">
    <title>Journal PECAN</title>
    <!-- Logo -->
    <link rel="icon" href="{{ asset('img/brand/logo.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0')}}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    <!-- Alpine JS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- CKeditor JS -->
    <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    @livewireStyles
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('img/brand/logo.png') }}" class="navbar-brand-img" alt="Journal de Préhistoire et d'Ecologie en Afrique du Nord">
            </a>
        </div>
        <div class="navbar-inner" style="padding-top: 3rem;">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Gestion du site</span>
                </h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/orders/*') || Request::is('admin/orders') ? 'active' : '' }}" href="{{ route('admin.orders') }}">
                            <i class="fas fa-tags text-primary"></i>
                            <span class="nav-link-text">Commandes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/clients/*') || Request::is('admin/clients') ? 'active' : '' }}" href="{{ route('admin.clients') }}">
                            <i class="fas fa-users text-primary"></i>
                            <span class="nav-link-text">Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/documents/*') || Request::is('admin/documents') ? 'active' : '' }}" href="{{ route('admin.documents') }}">
                            <i class="fas fa-file-alt text-primary"></i>
                            <span class="nav-link-text">Documents</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/authors/*') || Request::is('admin/authors') ? 'active' : '' }}" href="{{ route('admin.authors') }}">
                            <i class="fas fa-user-tie text-primary"></i>
                            <span class="nav-link-text">Auteurs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/domains/*') || Request::is('admin/domains') ? 'active' : '' }}" href="{{ route('admin.domains') }}">
                            <i class="fas fa-sitemap text-primary"></i>
                            <span class="nav-link-text">Domaines</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/admins/*') || Request::is('admin/admins') ? 'active' : '' }}" href="{{ route('admin.admins') }}">
                            <i class="fas fa-user-shield text-primary"></i>
                            <span class="nav-link-text">Administrateurs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/slider/*') || Request::is('admin/slider') ? 'active' : '' }}" href="{{ route('admin.slider') }}">
                            <i class="fas fa-image text-primary"></i>
                            <span class="nav-link-text">Slider</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Contact</span>
                </h6>
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/contacts/*') || Request::is('admin/contacts') ? 'active' : '' }}" href="{{ route('admin.contacts') }}">
                            <i class="fas fa-envelope-open text-primary"></i>
                            <span class="nav-link-text">Boîte de messagerie</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                        </li>
                        <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    @if(auth()->user()->avatar)
                                        <img src="{{ asset('storage/admins/' .auth()->user()->avatar) }}" alt="{{ auth()->user()->name }}">
                                    @else
                                        <img src="{{ asset('img/brand/empty-placeholder.png') }}" alt="Pas de photo de profil">
                                    @endif
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm font-weight-bold">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right ">
                            <a href="{{ route('admin.profile') }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Mon Profil</span>
                            </a>
                            <a href="{{ route('admin.about-us') }}" class="dropdown-item">
                                <i class="ni ni-badge"></i>
                                <span>À propos</span>
                            </a>
                            <a href="{{ route('admin.terms-conditions') }}" class="dropdown-item">
                                <i class="fas fa-file-signature"></i>
                                <span>Termes et conditions</span>
                            </a>
                            <a href="{{ route('admin.privacy-policy') }}" class="dropdown-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Politique de confidentialité</span>
                            </a>
                            <a href="{{ route('admin.settings') }}" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Paramètres</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Déconnexion</span>
                            </a>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{ $slot }}

        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-center">
                {{-- <span>Made with &#10084; by <a href="https://www.linkedin.com/in/ihab-boudissa-727346176/" target="_blank">Boudissa Ihab</a></span> --}}
            </div>
        </footer>
    </div>

    @include('sweetalert::alert')
    @livewireScripts
    @stack('scripts')
    <!-- Argon Scripts -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js" integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.2.0') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>
