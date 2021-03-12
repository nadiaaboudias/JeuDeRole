<?php
	// Initialiser la session
	session_start();
	require_once('conex_db.php');

    //Affichage des derniers messages
    $reponse = $db->query('SELECT login,message FROM minichat ORDER BY numero DESC LIMIT 0, 10');

    // Affichage de chaque message
    while($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . $donnees['login'] . '</strong> : ' . $donnees['message'] . '</p>';
    }

$reponse->closeCursor();

//On enregistre le message dans la base de données
if(isset($_POST['submit']))
{
    $request = $db->prepare("INSERT INTO minichat (login, message) VALUES(:login, :msg)");
    $request->bindParam(':login', $_SESSION['login']);
    $request->bindParam(':msg',  $_POST['message']);


    try {
        $request->execute();
        echo "Le message s'est envoyé avec succès";
        header("Location: minichat.php");
		die();	
      }
      catch(Exception $e){
        echo "Erreur dans l'envoi du message";
        goto display;
    }

}
    display :
?>

<!DOCTYPE html>
<html>
<head> <h1>Tchat</h1> </head>
<body>
<form  method="POST">
<input type="text"  name="message" placeholder="Ecrivez ici" required/>
<input type="submit" value="Valider" name="submit"/> <br />
<p><a href="index.php">Revenir au tableau de bord</a></p>
</form>
</body>
</html>