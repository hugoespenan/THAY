<?php

require_once "../volley/php/utilisateur/utilisateur.php";
require_once "../volley/php/bdd/bdd.php";

$bdd = new basededonne("thay", "localhost", "", "root");
$user = new user();

if (isset($_POST["envoie"])){
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];

	if (!empty($_POST['login']) and !empty($_POST['mdp'])){
	$user->connexion($_POST['login'], $_POST['mdp'])
}

}


?>