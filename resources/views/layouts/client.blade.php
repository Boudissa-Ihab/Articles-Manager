<!DOCTYPE HTML>
<html>
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Journal PECAN</title>
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Fournir aux chercheurs et étudiants un accès aux articles scientifiques">
        <meta name="keywords" content="Articles Scientifiques, Téléchargement, Documents, Chercheurs, Actualité">
        <meta name="author" content="Boudissa Ihab
            Github : https://github.com/Boudissa-Ihab
            Linkedin : https://www.linkedin.com/in/ihab-boudissa-727346176/">
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/client.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">
        <!-- Alpine JS -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('img/brand/logo.png') }}">
        @livewireStyles
    </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->









            @livewire('client.header')











            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">




                    {{ $slot }}




                </div>
                <!-- content end-->











                @livewire('client.footer')











                {{-- <div class="aside-panel">
                    <ul>
                        <li> <a href="#"><i class="fas fa-podium"></i><span>Politics</span></a></li>
                        <li> <a href="#"><i class="fas fa-atom"></i><span>Technology</span></a></li>
                        <li> <a href="#"><i class="fas fa-user-chart"></i><span>Business</span></a></li>
                        <li> <a href="#"><i class="fas fa-tennis-ball"></i><span>Sports</span></a></li>
                        <li> <a href="#"><i class="fas fa-flask"></i><span>Science</span></a></li>
                    </ul>
                </div> --}}
            </div>
            <!-- wrapper end -->

            <!-- cookie-info-bar -->
            {{-- <div class="cookie-info-bar">
                <div class="container">
                    <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Our site uses cookies. Learn more about our use of cookies: <a href="#">Cookie policy</a></div>
                    <a href="#" class="sicb_btn color-bg">Accept</a>
                    <a href="#" class="sicb_btn">Reject</a>
                </div>
            </div> --}}
            <!-- cookie-info-bar end -->

            <!--register form -->
            <div class="main-register-container">
                <div class="reg-overlay close-reg-form"></div>
                <div class="main-register-holder">
                    <div class="main-register-wrap fl-wrap">
                        <div class="main-register_bg">
                            <div class="bg-wrap">
                                <div class="bg par-elem "  data-bg="images/bg/2.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                                <li><a href="#tab-2"><i class="fas fa-user-plus"></i> Register</a></li>
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fas fa-times"></i></div>
                            <!--tabs -->
                            <div id="tabs-container">
                                <div class="tab">

                                    @livewire('client.login')

                                    @livewire('client.register')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/client.js') }}"></script>
        @stack('scripts')
    </body>
</html>
