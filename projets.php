<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets | Platerforme de Ticketing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="container-fluid">
    <div class="row row-ticket">
        <div class="col-2 menu-gauche-ticket">
            <div class="bg-info">
                <div class="user bg-light">
                    <img src="https://picsum.photos/id/237/71/71" class="rounded-circle float-left">
                    <p class="user-name font-weight-bold">Loïc Guéniau</p>
                    <p class="user-type">Utilisateur</p>
                </div>
            </div>
            <div class="menu">
                <ul class="font-weight-bold">
                    <li><i class="far fa-file-alt"></i> Tickets</li>
                    <li class="selected bg-light rounded-pill"><i class="far fa-clipboard"></i> Projets</li>
                    <li><i class="fas fa-cog"></i> Paramètres</li>
                </ul>
            </div>
            <div class="disconnection">
                <p class="font-weight-bold mx-auto"><i class="fas fa-power-off"></i> Déconnexion</p>
            </div>
        </div>
        <div class="col-10 ticket-content">
            <div class="navbar-ticket">
                <div class="float-left block-gauche">
                    <h1 class="titre-ticket font-weight-bold">Projets</h1>
                </div>
                <div class="float-right">
                    <i class="fas fa-question-circle right-icons"></i>
                    <i class="fas fa-bell right-icons"></i>
                    <i class="fas fa-cog right-icons"></i>
                </div>
            </div>
            <div class="content-content-ticket container-fluid">
                <div class="row ml-0">
                    <div class="col-2 project-box font-weight-bold">
                        <p class="projet-title text-white font-weight-bold text-center">Projet 1</p>
                        <p class="infos-title">Administrateur</p>
                        <p class="infos-content mb-2">Hugo Barbé</p>
                        <p class="infos-title">Utilisateur</p>
                        <p class="infos-content mb-2">Loïc Guéniau</p>
                        <p class="infos-title">Tickets en cours</p>
                        <p class="infos-content mb-2">4 tickets</p>
                        <p class="infos-title">Tickets résolus</p>
                        <p class="infos-content mb-2">2 tickets</p>
                    </div>
                    <div class="col-2 project-box font-weight-bold">
                        <p class="projet-title text-white font-weight-bold text-center">Projet 2</p>
                        <p class="infos-title">Administrateur</p>
                        <p class="infos-content mb-2">Hugo Barbé</p>
                        <p class="infos-title">Utilisateur</p>
                        <p class="infos-content mb-2">Loïc Guéniau</p>
                        <p class="infos-title">Tickets en cours</p>
                        <p class="infos-content mb-2">0 tickets</p>
                        <p class="infos-title">Tickets résolus</p>
                        <p class="infos-content mb-2">0 tickets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>