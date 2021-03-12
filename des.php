<?php
	// Initialiser la session
	session_start();
	include('conex_db.php');

    echo("<h1> Présentation du principe des dés </h1>");
    echo(" lorsqu’on utilise un dé pour JDR il doit contenir un certain nombre de faces. <br/>
    Le plus connu d'entre eux est le dé 20 car il permet de réaliser bon nombre d'actions à l'intérieur d'un jeu de rôle. <br/>
    Pouvoir générer un dé virtuel pour jeu de rôle est donc très important lors de la mise en place d'une séance par le MJ,<br/>
    autrement appelé le Maitre du jeu. <br/>
    L'important est d'obtenir un résultat qui sera pris au hasard. <br/>
    Dans le jeu de rôle si l'on prend le dé vingt par exemple, celui-ci peut au mieux afficher la face 20, <br/>
     ce qui correspond à un coup critique (pour mieux comprendre le lexique du jeu de rôle). <br/>
     Et dans le moins bon des cas il affichera la face 1 qui correspondra cette fois-ci à un échec critique.")
?>
<!DOCTYPE html>
<html>
<head> <h1>Simulation</h1> </head>
<body>
<form  method="POST">
<input type="number"  name="number" placeholder="Nombre de faces de dé" required/>
<input type="number"  name="nbdes" placeholder="Nombre de dés" required/>

<input type="submit" value="Valider" name="submit"/> <br/>
<?php
if(isset($_POST['number']) && isset($_POST['submit']))
    {
        echo("Vous avez obtenu : ");
        echo "<br>";

        for($i=1; $i<=$_POST['nbdes'];$i++)
        {
            $number = rand(1, $_POST['number'] );
            echo($number);
            echo "<br>";
        }

    }
?>

<p> Revenir à l'accueil : <a href="index.php">Cliquez ici</a></p>
</form>
</body>
</html>