<!DOCTYPE html>
<html lang="en">

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
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                                    <a href="{{asset('http://127.0.0.1:8000')}}"><img src="images/logo.png"
                                            alt="#" /></a>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000/#metier')}}">Metier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000/#apropos')}}">A propos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact-Nous</a>
                                        </li>
                                    </ul>
                                    <div class="sign_btn"><a
                                            href="{{asset('http://127.0.0.1:8000/admin/login')}}">Connecter</a>
                                    </div>
                                    <div class="signup"><a
                                            href="{{asset('http://127.0.0.1:8000/admin/login')}}">Inscrire</a>
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
                <img class="first-slide" src="images/im1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>ART</span> number 1</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/im2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>ART</span> number 2</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/im3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>ART</span>number 3</h1>
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
            <div class="col-lg-4 col-md-6 col-sm-12 align-items-stretch card">
                <img class="card-img-top" src="images/cross_img.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">amine chemrari</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 align-items-stretch card">
                <img class="card-img-top" src="images/cross_img.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">amine chemrari</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 align-items-stretch card">
                <img class="card-img-top" src="images/cross_img.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">amine chemrari</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 align-items-stretch card">
                <img class="card-img-top" src="images/cross_img.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">amine chemrari</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 align-items-stretch card">
                <img class="card-img-top" src="images/cross_img.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">amine chemrari</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                        <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- end Artisan -->



    <!-- footer -->
    <div class="footer">
        <footer>
            <div class="container">
                <div class="row footercontent">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Lien</h3>
                        <ul>
                            <li><a href="#">Acceuil</a></li>
                            <li><a href="#">Nos-secteur</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Contact-nous</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>metier</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Artisanat</h3>
                        <p>On a constaté la difficulté de contacter les artisans et de trouver ce que le client veut ça
                            dépend de son besoin donc on a décidé de créer un site web dédié au marché de l'artisanat au
                            Maroc. Ce site est dédié à des étrangers pour une valeur spéciale auprès de ses clients.</p>
                    </div>
                </div>
                <div class="copyright">
                    <p>Copyright Design by Artisanat © 2018</p>
                </div>
        </footer>
    </div>
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

    <!-- sidebar -->
    <script src="http://127.0.0.1:8000/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://127.0.0.1:8000/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
