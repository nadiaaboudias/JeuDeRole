<?php

	// Initialise the session
	require('..\index.php');
	
	// Checking if the user is logged in, otherwise they are redirect to the login page	
	if (!isset($_SESSION['login']))
	{
		header("Location: login.php");
		exit();	 
	}
?>

<!DOCTYPE html>
<html>
	<body>
		<h1>Bienvenue <?php echo $_SESSION['login']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
	</body>
</html>

<?php require('menu.php'); ?>