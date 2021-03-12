<?php
$dsn = "mysql:host=localhost;dbname=jeutest;port=3306;charset=utf8mb4";
$servername = "localhost";
$username = "root";
$password = "";

try {
    //connexion au serveur 
    $db = new \PDO($dsn, $username, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
  // sql to create table
  $sq2 = "CREATE TABLE minichat (
  numero INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  message VARCHAR(255),
  login VARCHAR(255), 
  FOREIGN KEY (login) REFERENCES users(login)
  )";

  
$db->exec($sq2);
echo "Table crée !";

}
 catch(\PDOException $e) {
 echo $sq2 . "Erreur : " . $e->getMessage();
}


$conn = null;
?> 
