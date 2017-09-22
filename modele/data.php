<?php
include("connexionSQL.php");

function addBdd ($pseudoUser,$mailUser,$passwordUser){
  $addBdd = connect () -> prepare('INSERT INTO membres (pseudo, password, email, dateInscription) VALUES (:pseudo, :password, :mail, CURTIME())');
  $addBdd -> execute(array(
    "pseudo" => $pseudoUser,
    "password" => $passwordUser,
    "mail" => $mailUser,
  ));
}
