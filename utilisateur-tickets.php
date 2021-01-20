<!DOCTYPE html>
<html>
<head>
	<title>Utilisateur - tickets</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style-utilisateur-tickets.css">
</head>
<body>

	<ul class="list-group">
	  <li class="list-group-item active" aria-current="true"><a href="utilisateur-tickets.php">Tickets</a></li>
	  <li class="list-group-item"><a href="#">Projets</a></li>
	  <li class="list-group-item"><a href="#">Paramètres</a></li>
	</ul>

	<nav class="navbar navbar-dark" style="background-color:#2BA1AE;">
 		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Projet 1</button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="#">Projet 2</a>
			    <a class="dropdown-item" href="#">Projet 3</a>
			  </div>
		</div>
	</nav>


	<nav class="navbar navbar-light bg-light">
  		<form class="form-inline">
    		<input class="form-control mr-sm-2" type="search" placeholder="_____________________" aria-label="Search">
    		<button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
  			<button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-filter"></i>
  		</form>
	</nav>

	<div class="container">
  		<div class="alert alert-dark rounded-pill" role="alert">
  			<div class="row row1">
				<div class="col">Priorité</div>
				<div class="col">Créateur</div>
				<div class="col-5">Titre</div>
				<div class="col">Date</div>
				<div class="col-2">Statut</div>
				<div class="col">Contacts</div>
				<div class="col"><i class="fas fa-bell"></i></div>
  			</div>
		</div>

  		<br>
  		<div class="row">
  			<div class="w-100"></div>
			<div class="col"><div class="alert alert-danger rounded-pill" role="alert">P1</div></div>
			<div class="col">Moi</div>
			<div class="col-5">Problème d'ouverture de session</div>
			<div class="col">03/07/2003</div>
			<div class="col-2"><div class="alert alert-success rounded-pill" role="alert">VALIDÉ</div></div>
			<div class="col">Hugo Barbé</div>
			<div class="col"><i class="far fa-envelope"></i></div>

			<div class="w-100"></div>
			<div class="col"><div class="alert alert-primary rounded-pill" role="alert">P3</div></div>
			<div class="col">Moi</div>
			<div class="col-5">Problème d'ouverture de session</div>
			<div class="col">03/07/2003</div>
			<div class="col-2"><div class="alert alert-warning rounded-pill" role="alert">À VALIDER</div></div>
			<div class="col">Hugo Barbé</div>
			<div class="col"><i class="far fa-envelope"></i></div>

			<div class="w-100"></div>
			<div class="col"><div class="alert alert-warning rounded-pill" role="alert">P3</div></div>
			<div class="col">Moi</div>
			<div class="col-5">Problème d'ouverture de session</div>
			<div class="col">03/07/2003</div>
			<div class="col-2"><div class="alert alert-primary rounded-pill" role="alert">EN COURS</div></div>
			<div class="col">Hugo Barbé</div>
			<div class="col"><i class="far fa-envelope"></i></div>
  		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>