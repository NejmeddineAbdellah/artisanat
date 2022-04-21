@extends("index")

@section("content")

    <link rel="stylesheet" href="http://127.0.0.1:8000/css/footercss.css">
    <footer class="footer">
    <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
        <li class="social-iconitem"><a class="social-iconlink" href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
        <li class="social-iconitem"><a class="social-iconlink" href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
        <li class="social-iconitem"><a class="social-iconlink" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
        <li class="social-iconitem"><a class="social-iconlink" href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
    </ul>
    <ul class="menu">
        <li class="menuitem"><a class="menulink" href="#">Accueil</a></li>
        <li class="menuitem "><a class="menulink" href="#metier">Métier</a></li>
        <li class="menuitem"><a class="menulink" href="#apropos">A Propos</a></li>
        <li class="menuitem"><a class="menulink" href="#Contact">Contactez-Nous</a></li>

    </ul>
    <p>&copy; EL MAALAM | Tous Les Droits Sont Réservés </p>
</footer>

@endsection
