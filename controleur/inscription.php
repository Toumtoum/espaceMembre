<?php
include("../modele/data.php");
include("../vue/inscription.php");

$password = hash('sha256',$_POST['password']);
$passwordVerif = hash('sha256',$_POST['verifPassword']);

if ($password == $passwordVerif){
  if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']){
    addBdd ($_POST['pseudo'],$_POST['email'],$password);
  }
  else {
    echo "votre adresse email n'est pas valide";
  }
}
else {
  echo "verifier votre mot de passe ne correspond pas";
}
