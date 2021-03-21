<?php
	// Initialiser la session
	require('../index.php');

    //On récupère l'ID de la partie
    $gameID = $_SESSION['gameID'];

    //Affichage des derniers messages
    $reponse = $bdd->query('SELECT login,message FROM minichat ORDER BY numero DESC LIMIT 0, 10');

    // Affichage de chaque message
    while($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . $donnees['login'] . '</strong> : ' . $donnees['message'] . '</p>';
    }

    $reponse->closeCursor();

     display :
?>

<!DOCTYPE html>
<html>
<head> <h1>Tchat</h1> </head>
<body>
    <form action="<?= route('/send_minichat') ?>" method="POST">
        <input type="text"  name="message" placeholder="Ecrivez ici" required/>
        <input type="submit" value="Valider" name="submit"/> <br />
    </form>
    <?php require('menu.php'); ?>
</body>
</html>