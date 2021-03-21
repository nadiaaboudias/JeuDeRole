
$sq1 = "CREATE DATABASE jeuDeRole";

$sq2 = "CREATE TABLE users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  psswrd VARCHAR(255) NOT NULL,
  age  INT UNSIGNED NOT NULL
  )";

  $sq3 = "CREATE TABLE minichat (
  numero INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  message VARCHAR(255),
  login VARCHAR(255), 
  FOREIGN KEY (login) REFERENCES users(login),
  gameID int(6),
  FOREIGN KEY (gameID) REFERENCES game(gameID)
  )";
  
  $sq4 = "CREATE TABLE gamePlayers (
  login VARCHAR(255), 
  FOREIGN KEY (login) REFERENCES users(login),
  gameID INT(6), 
  FOREIGN KEY (gameID) REFERENCES game_bd(gameID)
  )";
  
  $sq5 = "CREATE TABLE gamePlayers (
  login VARCHAR(255), 
  FOREIGN KEY (login) REFERENCES users(login),
  gameID INT(6), 
  FOREIGN KEY (gameID) REFERENCES game_bd(gameID)
  )";

  
