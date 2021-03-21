<?php
    //Initialise the session
    require('../index.php');
    //To remove the notices
    $_SESSION["msg_reset"]="";


    if ($_SERVER['REQUEST_METHOD']==="POST")
        {
        $stmt =$db->prepare("SELECT * FROM users WHERE login= :login"); 
        $stmt-> execute(['login' => $_POST["login"]]);
        $users = $stmt->fetch();

        if ($users===NULL)
        {
            $_SESSION["msg_reset"]="Le nom d'utilisateur n'existe pas.";
        }

        else
        {
        if ($_POST["email"]===$users["email"] && $_POST["login"]===$users["login"])
            {
                $psswrd_hash = password_hash($_POST["psswrd"],PASSWORD_BCRYPT);
                $sql = $db->prepare("UPDATE users SET psswrd='$psswrd_hash' WHERE login= :login");
                $sql-> execute(['login' => $_POST["login"]]);
                $_SESSION["msg_reset"]="Le mot de passe a été réinitialisé.";   
            } else
            {
                $_SESSION["msg_reset"]="L'utilisateur ou l'email est incorrect.";
            }
        
        }
        
        header("Location: forgot_passwordame.php");
        exit();	
    } 
?>
 








