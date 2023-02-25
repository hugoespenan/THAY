<?php
require_once "volley/php/bdd/bdd.php";
require_once "volley/php/utilisateur/utilisateur.php";

$bdd = new basededonne("thay","localhost","","root");
$user = new user((!empty($_POST['nom'])), (!empty($_POST['prenom'])), (!empty($_POST['login'])), (!empty($_POST['mdp'])),(!empty($_POST['ville'])),(!empty($_POST['jour'])),(!empty($_POST['mois'])),(!empty($_POST['annee'])),(!empty($_POST['cp'])),(!empty($_POST['tel'])), (!empty($_POST['genre'])));

if(isset($_POST['envoie'])) {

    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['genre']) and !empty($_POST['jour']) and !empty($_POST['mois']) and !empty($_POST['annee']) and !empty($_POST['cp']) and !empty($_POST['ville']) and !empty($_POST['tel']) and !empty($_POST['login']) and !empty($_POST['mdp'])) {

$user->inscription($_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['mdp'], $_POST['ville'], $_POST['jour'], $_POST['mois'], $_POST['annee'], $_POST['cp'], $_POST['tel'], $_POST['genre']);
    }
}
?>


