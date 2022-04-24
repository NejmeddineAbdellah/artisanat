<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>@yield('title', 'Admin - '.Voyager::setting("admin.title"))</title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif
    <style>
        body {
            
            background-image: url("http://127.0.0.1:8000/images/background/bg-01.jpg");
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        body.login .login-sidebar {
            border-top:5px solid {{ config('voyager.primary_color','#22A7F0') }};
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                border-left:5px solid {{ config('voyager.primary_color','#22A7F0') }};
            }
        }
        body.login .form-group-default.focused{
            border-color:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .login-button, .bar:before, .bar:after{
            background:{{ config('voyager.primary_color','#22A7F0') }};
        }
        .remember-me-text{
            padding:0 5px;
        }
    </style>
    
    @yield('pre_css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/responsive.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <link rel="stylesheet" href="http://127.0.0.1:8000/css/jquery.mCustomScrollbar.min.css">

</head>
<body class="login">

    <!-- Header in voyager package -->
    <header  style="background-color:transparent; display:block; height:5rem;">
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="header_information">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarsExample04" aria-controls="navbarsExample04"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000')}}"> Accueil </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Metier
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/vetements')}}">Vêtements</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/bois')}}">Bois</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/batiment')}}">Bâtiment traditionnel</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/maroquinerie')}}">Maroquinerie</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/forge')}}">Fer Forgé</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/poterie')}}">Poterie et pierre</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/tapis')}}">Tapis</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/article_chaussants')}}">Articles chaussants</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/bijouterie')}}">Bijouterie</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/dinanderie')}}">Dinanderie</a></li>
                                                <li><a class="dropdown-item" href="{{asset('http://127.0.0.1:8000/metier/vannerie')}}">Vannerie</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000/#apropos')}}">A propos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000/#contact')}}">Contact-Nous</a>
                                        </li>
                                    </ul>

                                    <div class="btn-group">
                                        <button type="button" class="btn sign_btn dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><a>Connecter</a>

                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{asset('http://127.0.0.1:8000/admin/login')}}">Artisan</a>
                                            <a class="dropdown-item"
                                                href="{{asset('http://127.0.0.1:8000/login_client')}}">Client</a>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" class="btn sign_btn dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><a>inScrire</a>

                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{asset('http://127.0.0.1:8000/inscrire_artisan')}}">Artisan</a>
                                            <a class="dropdown-item"
                                                href="#">Client</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header in voyager ppackage -->

    <div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                   
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">

           @yield('content')

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@yield('post_js')

<script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
  <script src="http://127.0.0.1:8000/js/poppercl.js"></script>
  <script src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
  <script src="http://127.0.0.1:8000/js/maincl.js"></script>
  
    <!-- Javascript files-->
    <script src="http://127.0.0.1:8000/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

</body>
</html>
