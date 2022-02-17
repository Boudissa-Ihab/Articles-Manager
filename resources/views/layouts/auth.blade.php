<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fournir aux chercheurs et étudiants un accès aux articles scientifiques">
    <meta name="keywords" content="Articles Scientifiques, Téléchargement, Actualité">
    <meta name="owner" content="">
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
    <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0') }}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
    @livewireStyles
</head>

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">

        {{ $slot }}

    </div>
    <!-- Footer -->
    <footer class="py-3" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-center">
                <span>Made with &#10084; by <a href="https://www.linkedin.com/in/ihab-boudissa-727346176/" target="_blank">Boudissa Ihab</a></span>
            </div>
        </div>
    </footer>

    @livewireScripts
    <!-- Argon Scripts -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js" integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.2.0') }}"></script>
</body>
</html>
