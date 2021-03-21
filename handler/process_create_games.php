<?php
    //Initialise the session
    require('../index.php');
    //To update the error indications

    if (isset($_POST['nomJDR']) && $_SERVER['REQUEST_METHOD']==="POST")
    {
        $stmt = $db->prepare("SELECT * FROM game WHERE name = :name");
        $stmt->execute( [ 'name' => $_POST['nomJDR'],]);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result!=null)
        {
            $_SESSION["msg_create_games"] = " Une partie existe déjà sous ce nom";
            //Si le login existe, vérif = false
            $verif = false;
        }
        else
        {
            //Si le login n'existe pas, on autorise l'inscription
            $verif = true;
        }
        if ($verif===true)
        {
            //Creating a game
            $request = $db->prepare("INSERT INTO game (name) VALUES(:name)");      
            
            //the parameters are bind to a specific variable name
            $request->bindParam(':name', $name);    
            $name = $_POST["nomJDR"];
            $request->execute();
        
            //We retreive the ID from the game created
            $recupGameID = $db->prepare('SELECT gameID FROM game WHERE name = :name');
            $recupGameID->execute(array('name' => $name));
            $resultat = $recupGameID->fetch();    
            $_SESSION['gameID'] = $resultat['gameID'];
            $_SESSION["msg_create_games"] = "Création de la partie réussie";
        }

        header("Location: games.php");
        exit();        
    }

?>