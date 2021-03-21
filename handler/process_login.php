<?php
	//Initialise the session
	require('../index.php');

	if ($_SERVER['REQUEST_METHOD']==="POST")
	{
		if (isset($_POST['login']) && isset($_POST['psswrd']))
		{
			$stmt =$db->prepare("SELECT * FROM users WHERE login= :login"); 
			$stmt-> execute(['login' => $_POST["login"]]);
			$users = $stmt->fetch();
			$ok = password_verify($_POST["psswrd"], $users["psswrd"]);
			
			if (!$ok)
			{
				$_SESSION["msg"] = "Le mot de passe ou l'identifiant est incorrect";
				header("Location: login.php");	
				exit();
			} 
			else 
			{
				$_SESSION["users"] = $users;	
				$_SESSION["login"] = $_POST["login"];
				$_SESSION["msg"] = "les informations sont valides";
				header("Location: home.php");
				exit();					
			}	
		}
	}

?>