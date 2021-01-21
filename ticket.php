<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problème d'ouverture de session | Plateforme de Ticketing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="container-fluid">
    <div class="row row-ticket">
        <?php include "menu-gauche.php" ?>
        <div class="col-10 ticket-content">
            <h1 class="titre-ticket font-weight-bold"><i class="fas fa-chevron-left"></i> Problème d'ouverture de session</h1>
            <div class="content-content-ticket container-fluid">
                <div class="row">
                    <div class="col-9 chat-ticket">
                        <p class="font-italic action-message">Vous avez créé le ticket.</p>
                        <div class="user-message mb-3">
                            <p class="font-weight-bold mb-0">Problème d'ouverture de session</p>
                            <p class="mb-0">Bonjour, j'ai un souci avec l'ouverture de ma session. Je rentre mon mot de passe mais on me
                            dit que celui-ci est incorrect. Je suis pourtant sûr que c'est le bon mot de passe que je rentre.<br>
                            Pouvez-vous m'aider svp.<br>
                            Cordialement,<br>
                            Loïc</p>
                        </div>
                        <p class="font-italic action-message">Hugo Barbé a pris en charge le ticket.</p>
                        <div class="admin-message mb-3">
                            <p class="mb-0">Bonjour, je prends en charge votre ticket.<br>
                            Je vais réinitialiser votre mot de passe. A votre prochaine connexion il vous sera demandé
                            de choisir un nouveau mot de passe.<br>
                            Cdlt,<br>
                            Hugo</p>
                        </div>
                        <div class="user-message mb-3">
                            <p>C'est bon j'ai pu modifier mon mot de passe et me connecter !<br>
                            Merci beaucoup<br>
                            Cdlt,<br>
                            Loïc</p>
                        </div>
                        <p class="font-italic action-message">Hugo Barbé a modifié le statut du ticket en "Validé".</p>
                        <p class="font-italic action-message">Le ticket a été cloturé, vous ne pouvez plus y répondre.</p>
                    </div>
                    <div class="col-3 infos-ticket">
                        <div class="infos-box font-weight-bold">
                            <p class="infos-title">Date de création</p>
                            <p class="infos-content mb-2">03/07/2021</p>
                            <p class="infos-title">Date de création</p>
                            <p class="infos-content mb-2">03/07/2021</p>
                            <p class="infos-title">Date de création</p>
                            <p class="infos-content mb-2">03/07/2021</p>
                            <p class="infos-title">Date de création</p>
                            <p class="infos-content mb-2">03/07/2021</p>
                            <p class="infos-title">Date de création</p>
                            <p class="infos-content mb-2">03/07/2021</p>
                            <p class="infos-title">Date de création</p>
                            <p class="infos-content">03/07/2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>