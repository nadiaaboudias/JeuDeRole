<?php
    //Initialise the session
    require('../index.php');
    //To remove the notices
    error_reporting(E_ALL ^ E_NOTICE);
	//To update the error indications
   // $_SESSION["msg_create_games"]="";
   //$_SESSION["msg_join_JDR"]="";

    $verif = false;

?>


<!DOCTYPE html>
<html>
<body>
    <!--To create a game-->
    <h1>Créer une partie</h1>
    <form action="<?= route('/process_create_games') ?>" method="POST">
        <input type="text"  name="nomJDR" placeholder= "Nom de la partie"/>
        <input type="submit" value="Valider" name ="submit"/> <br />
    </form>

    <!--To join a game-->
    <h2>Rejoindre une partie</h2>
    <p> Pour rejoindre une partie, il faut connaître son nom </p>
    <form action="<?= route('/join_game') ?>" method="POST">
        <input type="text"  name="JDR_join" placeholder= "Nom de la partie"/>
        <input type="submit" value="Envoyer">
    </form>

    <?php if (!empty($_SESSION["msg_create_games"]))
    {
        echo $_SESSION["msg_create_games"]; 
    }

    if (!empty($_SESSION["msg_join_JDR"])) 
    {
        echo $_SESSION["msg_join_JDR"];
    } 
    include('menu.php'); 
    ?>

</body>
</html>