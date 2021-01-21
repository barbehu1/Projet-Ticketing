<!DOCTYPE html>
<html>
<head>
	<title>Utilisateur - tickets</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>
<body class="container-fluid">

	<div class="row row-ticket">
		<div class="col-2 menu-gauche-ticket">
			<div class="bg-info">
				<div class="user bg-light">
					<img src="https://picsum.photos/71/71?grayscale" class="rounded-circle float-left">
					<p class="user-name font-weight-bold">Hugo Barbé</p>
					<p class="user-type">Administrateur</p>
				</div>
			</div>
			<div class="menu">
				<ul class="font-weight-bold">
					<li class="selected bg-light rounded-pill"><i class="far fa-file-alt"></i> Tickets</li>
					<li><i class="far fa-clipboard"></i> Projets</li>
					<li><i class="fas fa-cog"></i> Paramètres</li>
				</ul>
			</div>
			<div class="disconnection">
				<p class="font-weight-bold mx-auto"><i class="fas fa-power-off"></i> Déconnexion</p>
			</div>
		</div>
        <div class="col-10 ticket-content">
			<nav class="navbar-ticket">
				<div class="float-left block-gauche">
						<h1 class="titre-ticket font-weight-bold">Projet 1</h1>
						<i class="fas fa-chevron-down ml-2 mt-1 icon-down"></i>
				</div>
				<div class="float-right">
					<i class="fas fa-question-circle right-icons"></i>
					<i class="fas fa-bell right-icons"></i>
					<i class="fas fa-cog right-icons"></i>
				</div>
			</nav>



			<div class="alert alert-light" role="alert">
				<div class="container-fluid" style="padding-top: 15px;">
					<div class="row align-items-center">
						<div class="col-4">
							<form class="form-inline">
			    		<input class="mr-sm-2 search-bar" type="search" aria-label="Search">
			    		<button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search" style="font-size: 22px; color: #ADB5BD;"></i></button>
			  			<button class="btn my-2 my-sm-0" type="submit" style="font-size: 20px; color:#ADB5BD;"><i class="fas fa-filter"></i></button>

			  		</form>
						</div>
						<div class="col-7"></div>
						<div class="col" style="right: -14px;"><i class="fas fa-th" style="font-size: 22px; color: #ADB5BD;"></i></div>
					</div>

					<br>

			  		<div class="alert alert-dark rounded-pill" role="alert">
			  			<div class="row row1">
							<div class="col">Priorité</div>
							<div class="col">Créateur</div>
							<div class="col-3">Titre</div>
							<div class="col-2">Date</div>
							<div class="col-2">Statut</div>
							<div class="col-2">Contacts</div>
							<div class="col">M</div>
							<div class="col">S</div>
			  			</div>
					</div>
					<br>
					<a href="ticket.php">
			  			<div class="row align-items-center">
			  				<div class="col"><div class="alert alert-danger rounded-pill" role="alert">P1</div></div>
							<div class="col">Moi</div>
							<div class="col-3">Problème d'ouverture de session</div>
							<div class="col-2">03/07/2003</div>
							<div class="col-2"><div class="alert alert-success rounded-pill" role="alert">VALIDÉ</div></div>
							<div class="col-2">Hugo Barbé</div>
							<div class="col"><i class="far fa-edit"></i></i></div>
							<div class="col"><i class="fas fa-trash"></i></i></div>
			  			</div>
			  		</a>
			  		<hr>
			  		<a href="ticket.php">
			  			<div class="row align-items-center">
							<div class="col"><div class="alert alert-primary rounded-pill" role="alert">P3</div></div>
							<div class="col">Moi</div>
							<div class="col-3">Problème d'ouverture de session</div>
							<div class="col-2">03/07/2003</div>
							<div class="col-2"><div class="alert alert-warning rounded-pill" role="alert">À VALIDER</div></div>
							<div class="col-2">Hugo Barbé</div>
							<div class="col"><i class="far fa-edit"></i></i></div>
							<div class="col"><i class="fas fa-trash"></i></i></div>
				  		</div>
			  		</a>
			  		
			  		<hr>
			  		<a href="ticket.php">
			  			<div class="row align-items-center">
							<div class="col"><div class="alert alert-warning rounded-pill" role="alert">P2</div></div>
							<div class="col">Moi</div>
							<div class="col-3">Problème d'ouverture de session</div>
							<div class="col-2">03/07/2003</div>
							<div class="col-2"><div class="alert alert-primary rounded-pill" role="alert">EN COURS</div></div>
							<div class="col-2">Hugo Barbé</div>
							<div class="col"><i class="far fa-edit"></i></i></div>
							<div class="col"><i class="fas fa-trash"></i></i></div>
				  		</div>
			  		</a>
				</div>
			</div>
        </div>
    </div>

    <a href="#"><img class="plus" src="plus.svg"></a>

	<!--<ul class="list-group">
	  <li class="list-group-item active" aria-current="true"><a href="utilisateur-tickets.php">Tickets</a></li>
	  <li class="list-group-item"><a href="#">Projets</a></li>
	  <li class="list-group-item"><a href="#">Paramètres</a></li>
	</ul>-->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>