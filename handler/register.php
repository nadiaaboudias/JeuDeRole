<?php
	//Initialise the session
	require('../index.php');
	//To remove the notices
	error_reporting(E_ALL ^ E_NOTICE);
	//To update the error indications
	$_SESSION["msg"]="";
?>

<!DOCTYPE html>
<html>
<head> JDR </head>
<body>
	<h1>S'inscrire</h1>
		<form  action="<?= route('/process_register') ?>" method="POST">
			<input type="text" name="login" placeholder="Nom d'utilisateur" required />
			<input type="text" name="email" placeholder="Email" required/>
			<input type="number" name="age" placeholder="Age" required />
			<input type="password"  name="psswrd" placeholder="Mot de passe" required/>
			<input type="submit" name="submit" value="S'inscrire"/>
		</form>
		<p>Déjà inscrit? <a href="<?= route('/login') ?>">Connectez-vous ici</a></p>

		<?php if (!empty($_SESSION["msg_register"])) 
		{
        	echo ($_SESSION["msg_register"]); 
    	}
		?>

</body>
</html>
