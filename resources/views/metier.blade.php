<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- apropos metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>El-maalem</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="http://127.0.0.1:8000/image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!-- le choix du font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;1,300;1,400&display=swap"
        rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="http://127.0.0.1:8000/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{asset('http://127.0.0.1:8000')}}"><img src="http://127.0.0.1:8000/images/logo.png"
                                            alt="logo_artisana" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
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
                                                href="{{asset('http://127.0.0.1:8000/inscrire_client')}}">Client</a>
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
    <!-- end header inner -->
    <!-- end header -->


    <!-- banner -->
    <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="http://127.0.0.1:8000/images/Slider/im1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>ART</span> number 1</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="http://127.0.0.1:8000/images/Slider/im2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>ART</span> number 2</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end banner -->



    <!-- Artisan -->
    <div class="container">
        <br>
        <h1>Les Artisan de ce metier : </h1>
        <div class="row card_artisan d_flex">
            <!-- --------------un boucle pour recuperer et afficher les artisan---------------- -->
            @foreach ($myArtisan as $art)
            <div class="col-lg-4 col-md-6 col-sm-12 align-items-stretch card">
                <img class="card-img-top" src="images/cross_img.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $art->nom }} {{ $art->prenom }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                    <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            @endforeach
            <!-- ----------------------------------- -->
        </div>
    </div>
    <!-- end Artisan -->


    <!-- footer -->
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social-icon">
            <li class="social-icon_item"><a class="social-icon_link" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li class="social-icon_item"><a class="social-icon_link" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li class="social-icon_item"><a class="social-icon_link" href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon_item"><a class="social-icon_link" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
        <ul class="menu">
            <li class="menu_item"><a class="menu_link" href="{{asset('http://127.0.0.1:8000')}}">Accueil</a></li>
            <li class="menu_item "><a class="menu_link" href="{{asset('http://127.0.0.1:8000/#apropos')}}">A propos</a></li>
            <li class="menu_item"><a class="menu_link" href="{{asset('http://127.0.0.1:8000/#contact')}}">Contact-nous</a></li>
        </ul>
        <p>&copy;EL MAALAM | All Rights Reserved</p>
    </footer>
 
    <!-- end footer -->

    <!-- back to the top -->
    <div class="progress-bar" />
        <button class="back-to-top hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="back-to-top-icon" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
        </svg>
        </button>
    <div />
    <!-- end back to the top -->

    <!-- Javascript files-->
    <script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <!-- sidebar -->
    <script src="http://127.0.0.1:8000/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://127.0.0.1:8000/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- footer-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
