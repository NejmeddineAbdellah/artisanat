<!doctype html>
<html lang="en">

<head>
    <title>Espace Client</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/responsive.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style_log_cl.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <link rel="styles   heet" href="http://127.0.0.1:8000/css/jquery.mCustomScrollbar.min.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/background/bg-01.jpg);">


    <header style="background-color:transparent;color:black">
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
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/vetements')}}">Vêtements</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/bois')}}">Bois</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/batiment')}}">Bâtiment
                                                        traditionnel</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/maroquinerie')}}">Maroquinerie</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/forge')}}">Fer
                                                        Forgé</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/poterie')}}">Poterie
                                                        et pierre</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/tapis')}}">Tapis</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/article_chaussants')}}">Articles
                                                        chaussants</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/bijouterie')}}">Bijouterie</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/dinanderie')}}">Dinanderie</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{asset('http://127.0.0.1:8000/metier/vannerie')}}">Vannerie</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000/#apropos')}}">A
                                                propos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{asset('http://127.0.0.1:8000/#contact')}}">Contact-Nous</a>
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
                                            <a class="dropdown-item" href="#">Client</a>
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


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Espace Client</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Avoir un compte?</h3>
                        <form action="connect" method="POST" enctype="multipart/form-data" class="signin-form">
                        @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Mot de passe" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary submit px-3">Connecter</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="http://127.0.0.1:8000/inscription_cl" style="color: #fff"> <span>Inscrire
                                            ?</span> </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
