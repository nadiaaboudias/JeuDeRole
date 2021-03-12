<?php
$dsn = "mysql:host=localhost;dbname=jeuDeRoleVer2;port=3306;charset=utf8mb4";
$servername = "localhost";
$username = "root";
$password = "";

try {
    //connexion au serveur 
    $db = new \PDO($dsn, $username, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
    echo " connexion reusie";
    
  }catch(\PDOException $e){
    echo "erreur lors de la connexion à la base";
}


$conn = null;
?>