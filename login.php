<?php
session_start();
include('conex_db.php');
$msg =""; 

if($_SERVER['REQUEST_METHOD']==="POST"){

	$stmt =$db->prepare("SELECT * FROM users WHERE login= :login"); 
	$stmt-> execute(['login' => $_POST["login"]]);
	$users = $stmt->fetch();
	$ok = password_verify($_POST["psswrd"], $users["psswrd"]);
	if (!$ok){
		$msg = "Identifiant ou mot de passe invalide";	
	} 
	
	else {
			$_SESSION["users"] = $users;	
			$_SESSION['login'] = $_POST["login"];
			$msg = "les informations sont valides";
			header("Location: index.php");
			die();					
			}
			
}
?>

<!DOCTYPE html>
<html>
<head> JDR</head>
<body>
<h1>Formulaire de connexion</h1>
<form  action="login.php" method="POST">
<input type="text"  name="login" placeholder="Nom d'utilisateur" required/>
<input type="password" name="psswrd" placeholder="Mot de passe" required/>
<input type="submit" value="Connexion " name="submit"/>

<p >Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<!--oubliez mot de pass-->
<p >Vous oubliez mot de passe? <a href="NomUtilisateur.php">Oubliez Mot de passe</a></p>
	
<?php if (! empty($msg)) { ?>
    <p><?php echo $msg; ?></p>
<?php } ?>
</form>
</body>
</html>
