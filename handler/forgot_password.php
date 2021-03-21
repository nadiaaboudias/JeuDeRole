<?php
    //Initialise the session
    require('../index.php');
    //To remove the notices
    error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html>
<head> <h1>Nouveau Mot de Passe</h1> </head>
<body>
    <h2>Entrez votre nom d'utilisateur</h2>
    <form  action="<?= route('/new_password') ?>" method="POST">
        <input type="text"  name="login" placeholder="Nom d'utilisateur" required/>
        <input type="text" name="email" placeholder="Email" required/>
        <input type="password" name="psswrd" placeholder="Nouveau Mot de passe" required/>
        <input type="submit" value="Entrez" name="submit"/> <br>
    </form>
    <?php if (!empty($_SESSION["msg_reset"])) 
    {
        echo $_SESSION["msg_reset"]; 
    }
    ?>
       
    <p >Retour à la page de connexion : <a href="<?= route('/login') ?>">Cliquez ici</a></p>
    
</body>
</html>
