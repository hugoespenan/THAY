<?php
require_once "../volley/php/utilisateur/utilisateur.php";
require_once "../volley/php/bdd/bdd.php";

class loginController
{
    public function __construct(){
        $bdd = new basededonne;
        $this->conn = $bdd->conn;

    }

    public function userLogin($login, $mdp){
        $checkLogin = "SELECT * FROM utilisateur WHERE login = :login and mdp = :mdp";
        $result = $this->conn->query($checkLogin);
    }




}


?>