<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un ticket | Plateforme de Ticketing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="container-fluid">
    <div class="row row-ticket">
        <?php include "menu-gauche.php" ?>
        <div class="col-10 ticket-content">
            <div class="navbar-ticket">
                <div class="float-left block-gauche">
                    <i class="fas fa-chevron-left mr-4 mt-1 icon-back"></i>
                    <h1 class="titre-ticket font-weight-bold">Créer un ticket</h1>
                </div>
                <div class="float-right">
                    <i class="fas fa-question-circle right-icons"></i>
                    <i class="fas fa-bell right-icons"></i>
                    <i class="fas fa-cog right-icons"></i>
                </div>
            </div>
            <div class="content-content-ticket container-fluid">
                <form action="">
                    <label for="" class="label font-weight-bold mb-0">Nom du ticket</label><br>
                    <input type="text" class="rounded-pill input mb-3"><br>
                    <label for="" class="label font-weight-bold mb-0">Décrivez votre problème :</label><br>
                    <input type="textarea" class="textarea mb-3"><br>
                    <div class="float-left mr-3">
                        <label for="" class="label font-weight-bold mb-0">Priorité</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle rounded-pill select-priority" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">P1</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">P2</a>
                                <a class="dropdown-item" href="#">P3</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="" class="label font-weight-bold mb-0">Projet</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle rounded-pill select-project" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Projet 1</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Projet 2</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="rounded-pill bouton-create font-weight-bold">Créer</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>