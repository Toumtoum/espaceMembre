<?php
require_once("../modele/dataInscription.php");

if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['verifPassword'])
&& !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['verifPassword'])){

$password = hash('sha256',$_POST['password']);
$passwordVerif = hash('sha256',$_POST['verifPassword']);

if ($password == $passwordVerif){
  if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){
    addBdd ($_POST['pseudo'],$_POST['email'],$password);
    setcookie('cookiePseudo', $_POST['pseudo'], time() + (86400 * 30), "/");
    setcookie('cookiePassword', $_POST['password'], time() + (86400 * 30), "/");

  }else {
    echo "votre adresse email n'est pas valide";
  }
}else {
  echo "les mots de passe renseigné ne correspondent pas";
}
}

if(isset($_POST['pseudoUser']) && isset($_POST['passwordUser']) && !empty($_POST['pseudoUser']) && !empty($_POST['passwordUser'])){
  $verif = checkDataBase($_POST['pseudoUser'],hash('sha256',$_POST['passwordUser']));
  if ($verif){
    header("Location:../vue/test.php");
  }
  else echo "Verifier vos identifiants de connexion ou inscrivez-vous";
}

include("../vue/inscriptionVue.php");
