<?php

	// Initialiser la session
	session_start();
	include('conex_db.php');
    echo("<h1> Présentation des cartes</h1>");
    //Hyrule
    echo("<h2> Carte d'Hyrule </h2>");
    echo '<img src="images/carte_Hyrule.jpg" alt="Photo Hyrule" width="570" height="411">';

    //Terre du milieu
    echo("<h2> Carte de la Terre du milieu </h2>");
    echo '<img src="images/middle-earth.jpg" alt="Photo Terre du milieu" width="570" height="428">';
?>

<!DOCTYPE html>
<html>
	<body>
		<p>Revenir à l'accueil : <a href="index.php">Cliquez ici</a></p>
	</body>
</html>