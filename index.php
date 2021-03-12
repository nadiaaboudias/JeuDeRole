<?php

	// Initialiser la session
	session_start();
	include('conex_db.php');
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	
	if(!isset($_SESSION['login'])){
		header("Location: login.php");
		exit();	 
	}
	
	
?>
<!DOCTYPE html>
<html>
	<body>
		<h1>Bienvenue <?php echo $_SESSION['login']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
		<p><a href="minichat.php">Parler sur le tchat</a></p>
		<p><a href="Races.php">Présentation des races jouables</a></p>
		<p><a href="mondes.php"> Présentation des mondes jouables</a></p>
		<p><a href="des.php">Principe des dés en JDR</a></p>

		<a href="logout.php">Déconnexion</a>
	</body>
</html>
