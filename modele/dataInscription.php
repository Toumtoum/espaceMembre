<?php
require_once("connexionSQL.php");

function addBdd ($pseudoUser,$mailUser,$passwordUser){
  $addBdd = connect () -> prepare('INSERT INTO membres (pseudo, password, email, dateInscription) VALUES (:pseudo, :password, :mail, CURTIME())');
  $addBdd -> execute(array(
    "pseudo" => $pseudoUser,
    "password" => $passwordUser,
    "mail" => $mailUser
  ));
}

function checkDataBase ($pseudoUser,$passwordUser){
  $checkDataBase = connect () -> prepare('SELECT pseudo, password FROM membres WHERE pseudo = :pseudo AND password = :password');
  $checkDataBase -> execute(array("pseudo" => $pseudoUser , "password" => $passwordUser));
  $verif = $checkDataBase -> fetch();
  return $verif;
}
