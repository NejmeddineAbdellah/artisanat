<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page D'inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="ajouter_client" method="POST" enctype="multipart/form-data">
						@csrf
					<span class="login100-form-title p-b-59">
						S'inscrire
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

					<div class="wrap-input100 validate-input" data-validate = "Un email valide est requis : ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Adresse email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Le mot de passe est requis">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">S'inscrire</button>
						</div>

						<a href="{{asset('http://127.0.0.1:8000/login_client')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Se Connecter
							<i class="fa fa-long-arrow-right m-l-5"></i>
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