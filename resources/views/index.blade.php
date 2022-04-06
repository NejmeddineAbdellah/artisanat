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
                                            <a class="nav-link" href="#"> Accueil </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#metier">Metier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#apropos">A propos</a>
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
                                    bien des vêtements typiques (djellabas, caftans…) . </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                                    différents types de bois : Acajou, Chêne, Cèdre, Acacia, buis, Bois rouge </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                                    bâtiment semblent enfin sortir de l'ombre. Leur savoir-faire a failli disparaître à
                                    force d'être dévalorisé et folklorisé, mais le voilà de nouveau célébré. État des
                                    lieux et portraits. </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                                    sacs, gants, ceintures, portefeuilles... . Entre tradition et modernité, il perpétue
                                    un savoir-faire ancestral tout en adaptant ses modèles aux évolutions de la mode.
                                </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                                    des matières premières les plus utilisés dans ces arts . </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                                    artisanat mélange l'héritage berbère aux motifs d'inspiration arabo-andalouse . </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                    <!-- ------------------Tapis-------------------------- -->
                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Tapis</h2>
                                <span></span>
                                <p>Le tapis traditionnel est un moyen d'expression artistique, la transmission d'un
                                    savoir ancestral. Il est unique et porte toujours un message différent. Le tapis est
                                    plutôt de tradition Berbère et très présent dans le sud marocain. </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                                    Maroc, ces couvertures traditionnelles tissées à la main sont prisées depuis
                                    l'Antiquité.</p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                                    incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                                    techniques diverses, adaptées au matériau utilisé. Le joaillier réalise des bijoux
                                    ornés de pierres précieuses ou fines. </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                     <!-- ------------------Dinanderie-------------------------- -->
                    <div class="row carte">
                        <div class="col-lg-8 col-md-9 col-sm-12">
                            <div class="titlepage">
                                <h2>Dinanderie</h2>
                                <span></span>
                                <p>Artisan d'art, le dinandier fabrique des objets utilitaires et décoratifs par
                                    martelage à partir d'une feuille de cuivre, d'étain ou de fer-blanc. Il fabrique
                                    notamment des casseroles, des fontaines en cuivre comme en Auvergne, ou encore des
                                    moules (comme les moules à kouglof en Alsace). </p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                                    réaliser des objets très variés. les objets réalisés par cet artisanat, notoirement
                                    les corbeilles, paniers, mannes et cabas, les chapeaux, les nattes, les vans ; et
                                    l'Encyclopédie lui attribue la closerie.</p>
                                <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="metier_img">
                                <figure><img src="images/about_img.png" alt="#" /></figure>
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
                        <h2>Request A call back</h2>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea class="contactus" placeholder="Message" type="type"
                                    Message="Name">Message </textarea>
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
    <div class="progress-bar">
        <button class="back-to-top hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="back-to-top-icon" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
            </svg>
        </button>
    </div>
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
