
<?php
session_start();

include('conex_db.php');
$msg =""; 


if($_SERVER['REQUEST_METHOD']==="POST"){
		
	if (isset($_POST['login']) && isset($_POST['psswrd']) && isset($_POST['email']) && isset($_POST['age'])){	
		//on vérifie si le nom d'utilisateur existe déjà 
		
		$stmt = $db->prepare("SELECT * FROM users WHERE login = :login");
		//login = $_POST["login"];
		if ($stmt){
			$stmt->execute( [ 
			'login' => $data ['login'],]);
		
		$result  = $stmt-> fetchAll(PDO::FETCH_ASSOC);
			if (!empty($result)){
				$msg = " le nom d'utilisateur existe déjà";
			}
		}
		//$stmt->bindParam(':login', $login);
		//$stmt->execute(); 
		//$userExiste = $stmt->fetchAll();
		//if ($stmt->rowCount() > 0) {
    		//$msg = " le nom d'utilisateur existe déjà";
		//} 
		if ($_POST['age'] < 18 ){
			$msg = " Il faut etre majeur pour jouer";
		}
		//on insere les champs dans la table users
		else {	
			//on sécurise le mot de passe 		
			$psswrd_hash = password_hash($_POST["psswrd"],PASSWORD_BCRYPT);
			$request = $db->prepare("INSERT INTO users (login, email, psswrd, age)
			VALUES(:login, :email, :psswrd, :age)");

			//on lie les paramètre à un nom devariable spécifique
			$request->bindParam(':login', $login);
			$request->bindParam(':email', $email);
			$request->bindParam(':psswrd', $psswrd_hash);
			$request->bindParam(':age', $age);
				
			$login = $_POST["login"];
			$email = $_POST["email"];
			$age = $_POST["age"];
			
			$request->execute();
			$msg = "Nouveaux enregistrements créés avec succès";
			header("Location: login.php");
		}
		
	}			

}
?>

<!DOCTYPE html>
<html>
<head> JDR </head>
<body>
	<h1>S'inscrire</h1>
		<form  action="register.php" method="POST">
			<input type="text" name="login" placeholder="Nom d'utilisateur" required />
			<input type="text" name="email" placeholder="Email" required/>
			<input type="number" name="age" placeholder="Age" required />
			<input type="password"  name="psswrd" placeholder="Mot de passe" required/>
			<input type="submit" name="submit" value="S'inscrire"/>
			<p>Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
			<?php if (!empty($msg)) { ?>
		<p><?php echo $msg; ?></p>
	<?php } ?>
	</form>
	</body>
</html>