<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page D'inscription Artisan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/util.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/main.css">
    <!--===============================================================================================-->

</head>

<body style="background-color: #999999;">
    <header  style="background-color:#EDC16B;color:black">
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
                                                href="#">Artisan</a>
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



    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('images/background/bg-01.jpg');"></div>

            <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                <form class="login100-form validate-form" action="ajouter_artisan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span class="login100-form-title p-b-59">
                        S'inscrire Artisan
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Le nom est requis">
                        <span class="label-input100">Nom</span>
                        <input class="input100" type="text" name="nom" placeholder="Votre ...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Le prénom est requis">
                        <span class="label-input100">Prénom</span>
                        <input class="input100" type="text" name="prenom" placeholder="Votre ...">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Le Telephone est requis">
                        <span class="label-input100">Telephone</span>
                        <input class="input100" type="text" name="telephone" placeholder="Votre ...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100" data-validate="La metier est requis">
                        <span class="label-input100">Metier</span><br>
                        <select name="metier" id="metier" class="label-input100">
                            <option class="input100" value=""></option>
                            <option class="input100" value="Vetements">Vêtements</option>
                            <option class="input100" value="Bois">Bois</option>
                            <option class="input100" value="Batimenttraditionnel">Bâtiment traditionnel</option>
                            <option class="input100" value="Maroquinerie">Maroquinerie</option>
                            <option class="input100" value="Fer Forgé">Ferforge</option>
                            <option class="input100" value="Poterie">Poterie et pierre</option>
                            <option class="input100" value="Tapis">Tapis</option>
                            <option class="input100" value="Couvertures">Couvertures</option>
                            <option class="input100" value="Articles chaussants">chaussants</option>
                            <option class="input100" value="Bijouterie">Bijouterie</option>
                            <option class="input100" value="Dinanderie">Dinanderie</option>
                            <option class="input100" value="Vannerie">Vannerie</option>
                        </select>
                    </div>



                    <div class="wrap-input100">
                        <span class="label-input100">Avatare</span>
                        <input type="file" name="avatar" class="input100" accept="image/*" />
                        <span class="focus-input100"></span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Un email valide est requis : ex@abc.xyz">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Adresse email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Le mot de passe est requis">
                        <span class="label-input100">Mot de passe</span>
                        <input class="input100" type="password" name="password" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" name="submit" class="login100-form-btn">S'inscrire</button>
                        </div>

                        <a href="{{asset('http://127.0.0.1:8000/login_client')}}"
                            class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Déjà un compte
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="http://127.0.0.1:8000/js/popper.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="http://127.0.0.1:8000/js/maincl_insc.js"></script>

</body>

</html>
