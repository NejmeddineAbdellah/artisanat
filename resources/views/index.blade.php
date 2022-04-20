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
    <!-- le choix du font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,500;1,300;1,400&display=swap"
        rel="stylesheet">

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
                                            <a class="nav-link" href="{{asset('http://127.0.0.1:8000/')}}"> Accueil </a>
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
                                            <a class="nav-link" href="#apropos">A propos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact-Nous</a>
                                        </li>
                                    </ul>
                                    <?php
                                           if (session()->has('client')) {
                                               ?>
                                               <div class="logout btn">
                                               {{session('client')}}
                                               <button type="button" class="btn deconnecter" aria-haspopup="true"
                                                   aria-expanded="false"><a
                                                       href=" {{asset('http://127.0.0.1:8000/deconnect')}}">Deconnecter</a>

                                               </button>
                                           </div>
                                           <?php } else {?>
                                               <div class="login">
                                               <div class="btn-group ">
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

                                           <?php } ?>
                                    
                                    
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
                <img class="first-slide" src="images/Slider/im1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <a href="#contact">Contact-nous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/Slider/im2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <a href="#contact">Contacter-nous</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/slider/im3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <a href="#contact">Contacter-nous</a>
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


    <!-- Metier -->
    <div id="metier" class="metier">
        <div class="container">
            <div class="eight">
                <h1>Metier</h1>
            </div>
            <div class="row service">


                <div class="metier-line">
                    <!-- ------------------Vêtements-------------------------- -->
                    <div class="row carte ">
                        <div class="col-lg-8 col-md-8 ">
                            <div class="titlepage">
                                <h2>Vêtements</h2>
                                <span></span>
                                <p> Il regroupe de nombreux métiers étant donné que les artisans confectionnent aussi
                                    bien des vêtements typiques (djellabas, caftans…)... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/vetement')}}">Lire la
                                    suite <i class=" fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/metier/vetement_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------Bois-------------------------- -->

                    <div class="row carte ">
                        <div class="col-lg-8 col-md-8 ">
                            <div class="titlepage">
                                <h2>Bois</h2>
                                <span></span>
                                <p>La principale matière première de cet artisanat est le bois. Cependant, il existe
                                    différents types de bois : Acajou, Chêne, Cèdre, Acacia, buis, Bois rouge... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/bois')}}">Lire la suite
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/metier/Bois_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metier-line">
                    <!-- ------------------Bâtiment traditionnel-------------------------- -->
                    <div class="row carte ">
                        <div class="col-lg-8 col-md-8">
                            <div class="titlepage">
                                <h2>Bâtiment traditionnel</h2>
                                <span></span>
                                <p>Longtemps laissés de côté à l'ère du béton et du «vite fait», les artisans du
                                    bâtiment semblent enfin sortir de l'ombre... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/batiment')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------Maroquinerie-------------------------- -->

                    <div class="row carte ">
                        <div class="col-lg-8 col-md-8">
                            <div class="titlepage">
                                <h2>Maroquinerie</h2>
                                <span></span>
                                <p>Le maroquinier travaille le cuir et les matériaux souples pour la fabrication de
                                    sacs, gants, ceintures, portefeuilles...
                                </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/maroquinerie')}}">Lire
                                    la suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/metier/Maroquinerie_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metier-line">
                    <!-- ------------------Fer Forgé-------------------------- -->
                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Fer Forgé</h2>
                                <span></span>
                                <p>Dans l'artisanat marocain, le fer forgé tient un place très importante. Devenu une
                                    des matières premières les plus utilisés dans ces arts... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/forge')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/metier/ferforge_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------Poterie et pierre-------------------------- -->

                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Poterie et pierre</h2>
                                <span></span>
                                <p>La poterie est le premier artisanat de l'histoire de l'humanité. Au Maroc, cet
                                    artisanat mélange l'héritage berbère aux motifs d'inspiration arabo-andalouse...
                                </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/poterie')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/metier/Poterieetpierre_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metier-line">
                    <!-- ------------------Tapis-------------------------- -->
                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Tapis</h2>
                                <span></span>
                                <p>Le tapis traditionnel est un moyen d'expression artistique, la transmission d'un
                                    savoir ancestral. Il est
                                    plutôt de tradition Berbère et très présent dans le sud marocain... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/Tapis')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/metier/Tapis_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------Couvertures-------------------------- -->

                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Couvertures</h2>
                                <span></span>
                                <p>le couverture marocaine est un symbole intemporel de culture, de sagesse et de
                                    tradition. Fabriquées avec passion, patience et amour par les femmes des tribus du
                                    Maroc... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/couverture')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metier-line">
                    <!-- ------------------Articles chaussants-------------------------- -->
                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Articles chaussants</h2>
                                <span></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    ullamco laboris nisi ut aliquip ex ea commodo... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/chaussants')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------Bijouterie-------------------------- -->

                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Bijouterie</h2>
                                <span></span>
                                <p>Le bijoutier réalise des bijoux en métal (précieux ou non), terre, verre, textile,
                                    bois… en petite série ou en pièce unique. Il travaille la matière selon des
                                    techniques diverses, adaptées au matériau utilisé... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/bijouterie')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/metier/Bijouterie_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metier-line">
                    <!-- ------------------Dinanderie-------------------------- -->
                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Dinanderie</h2>
                                <span></span>
                                <p>Artisan d'art, le dinandier fabrique des objets utilitaires et décoratifs par
                                    martelage à partir d'une feuille de cuivre, d'étain ou de fer-blanc .... </p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/dinanderie')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/metier/Dinanderie_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------Vannerie-------------------------- -->

                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Vannerie</h2>
                                <span></span>
                                <p>La vannerie désigne : l'art de tresser des fibres végétales (les matériaux) pour
                                    réaliser des objets très variés (les corbeilles, paniers, mannes et cabas, les
                                    chapeaux, les nattes, les vans,...).</p>
                                <a class="read_more" href="{{asset('http://127.0.0.1:8000/metier/vannerie')}}">Lire la
                                    suite <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/metier/Vannerie_icon.jpg" alt="#" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end metier -->


    <!-- A propos -->
    <div class="eight">
        <h1>A propos</h1>
    </div>
    <div id="apropos" class="apropos">
        <div class="container">
            <div class="row d_flex">

                <div class="col-lg-7">
                    <div class="titlepage">
                        <h2>Artisanat</h2>
                        <span></span>
                        <p>On a constaté la difficulté de contacter les artisans et de trouver ce que le client veut ça
                            dépend de son besoin donc on a décidé de créer un site web dédié au marché de l'artisanat au
                            Maroc. Ce site est dédié à des étrangers pour une valeur spéciale auprès de ses clients.
                        </p>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="apropos_img">
                        <figure><img src="images/logo.jpeg" alt="#" /></figure>
                    </div>
                </div>
                <a class="read_more">Lire la Suite ... <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- end A propos -->


    <!-- contact -->
    <div class="eight">
        <h1>Contacter-nous</h1>
    </div>
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="titlepage">
                        <h2>Vous-avez des question ?<br> n'hésitez pas de Contactez-nous </h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form id="request" class="main_form" action="ajouter_note" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Nom et Prenom" type="texte" name="user">
                            </div>

                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email" type="email" name="email">
                            </div>

                            <div class="col-md-12">
                                <input class="contactus" placeholder="objet" type="textarea" name="msg">
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <button class="send_btn">Send</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- end contact -->


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
            <li class="menu_item"><a class="menu_link" href="#">Accueil</a></li>
            <li class="menu_item "><a class="menu_link" href="#apropos">A propos</a></li>
            <li class="menu_item"><a class="menu_link" href="#contact">Contact-nous</a></li>

        </ul>
        <p>&copy;EL MAALAM | All Rights Reserved</p>
    </footer>
    <!-- end footer -->


    <!-- Javascript files-->
    <script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>


    <!-- footer-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- sidebar -->
    <script src="http://127.0.0.1:8000/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://127.0.0.1:8000/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
