<?php
	//Initialise the session
	require('../index.php');
	//To update the error indications
	$_SESSION["msg_register"] =""; 
	$_SESSION["msg"]="";

	$verif = false;

	if ($_SERVER['REQUEST_METHOD']==="POST")
    {
                
        $stmt = $db->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->execute( [ ':login' => $_POST['login'],]);
        $result  = $stmt-> fetchAll(PDO::FETCH_ASSOC);
        
        if ($result!=null)
        {
            $_SESSION["msg_register"] = " le nom d'utilisateur existe déjà";
            //If the login exist, vérif = false
            $verif = false;

            header("Location: register.php");
            exit();    
        }
        else
        {
            //If the login does not exist, the registration is authorised
            $verif = true;

        }
        
		// if the user if underage, the registration is not authorised
        if ($_POST['age'] < 18 )
		{
            $_SESSION["msg_register"] = "Il faut être majeur pour jouer";

            header("Location: register.php");
            exit();    
        }

        //the fields are inserted in the users table
        else {

            if ($verif===true)
            {
				//the password is made secure     
				$psswrd_hash = password_hash($_POST["psswrd"],PASSWORD_BCRYPT);
				$request = $db->prepare("INSERT INTO users (login, email, psswrd, age)
				VALUES(:login, :email, :psswrd, :age)");

				//the parameters are bind to a specific variable name
				$request->bindParam(':login', $login);
				$request->bindParam(':email', $email);
				$request->bindParam(':psswrd', $psswrd_hash);
				$request->bindParam(':age', $age);
					
				$login = $_POST["login"];
				$email = $_POST["email"];
				$age = $_POST["age"];
				
				$request->execute();
				$_SESSION["msg_register"] = "Nouvel enregistrement créé avec succès";
            }    

            header("Location: login.php");
            exit();        

        }
	}
?>