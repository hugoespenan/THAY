<?php
require_once "volley/php/bdd/bdd.php";
require_once "volley/php/utilisateur/utilisateur.php";
session_start();

$bdd = new basededonne("thay","localhost","","root");





?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Ludiflex | Login</title>

</head>
<body>
<div class="box">
    <div class="container">

        <div class="top">

            <header>Se connecter</header>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Login" name="login">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Mot de passe" name="mdp">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" name="envoie">
        </div>


    </div>
</div>
</body>
</html>
