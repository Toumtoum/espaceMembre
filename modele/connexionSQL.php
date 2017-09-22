<?php

function connect (){

try{
$bdd = new PDO('mysql:host=localhost;dbname=espaceMembre;charset=utf8', 'root' , 'qX7-xM4-z6z-vPb',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
die ('Erreur : ' .$e->getMessage());
}
return $bdd;
}
