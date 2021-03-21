<?php
    //Initialise the session
    require('../index.php');
    //To update the error indications
    $_SESSION["msg_join_JDR"]="";

    if ($_SERVER['REQUEST_METHOD']==="POST")
    {
        if (isset($_POST['JDR_join']))
        {
            $stmt = $db->prepare("SELECT * FROM game WHERE name = :name");
            $stmt->execute( [ ':name' => $_POST['JDR_join'],]);
        
            $result  = $stmt-> fetchAll(PDO::FETCH_ASSOC);

            if ($result!=null)
            {
                $request = $db->prepare("INSERT INTO gameplayers (login, name)
                VALUES(:login, :name)");
    
                //the parameters are bind to a specific variable name
                $request->bindParam(':login', $_SESSION['login']);
                $request->bindParam(':name', $_POST['JDR_join']);
    
                $request->execute();
                $_SESSION["msg_join_JDR"] = "Vous avez rejoint la partie";
            }
    
            else
            {
                $_SESSION["msg_join_JDR"] = " Le JDR saisi n'existe pas";
            }   
        }
        header("Location: games.php");
        exit();    
    }
?>