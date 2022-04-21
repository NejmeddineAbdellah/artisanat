<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Commande</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="http://127.0.0.1:8000/css/style_cmd.css" />

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Crée votre Commande</h1>
                        </div>
                        <form action="/confirmer" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="titre" name="titre"
                                    placeholder="Titre de votre commande">
                                <span class="form-label">Titre</span>
                            </div>
                            <input type="hidden" value="{{$id_art}}" name="id_art">
                            <input type="hidden" value="  {{session('client')['id']}}" name="id_cl">
                            <div class="form-group">
                                <textarea class="form-control" type="text_area" name="description"
                                    placeholder="Description de votre commande" cols="30" rows="10"></textarea>
                                <span class="form-label">Description</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="date" required>
                                        <span class="form-label">Date </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="color: #ffffff;">Exemple de votre commande</label>
                                <input class="form-control" type="file" name="image" placeholder=" ">
                                <span class="form-label">image</span>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn" type="submit" name="submit">Commander</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://127.0.0.1:8000/js/jquery.min.js"></script>
    <script>
        $('.form-control').each(function () {
            floatedLabel($(this));
        });

        $('.form-control').on('input', function () {
            floatedLabel($(this));
        });

        function floatedLabel(input) {
            var $field = input.closest('.form-group');
            if (input.val()) {
                $field.addClass('input-not-empty');
            } else {
                $field.removeClass('input-not-empty');
            }
        }

    </script>

</body>

</html>
