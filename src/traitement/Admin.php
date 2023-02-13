<?php
namespace entre;
require_once 'Utilisateur.php';
require_once 'bdd.php';

class Admin extends Utilisateur{
    public function __construct($nom, $prenom, $login, $mdp)
    {
        parent::__construct($nom, $prenom, $login, $mdp, null, null);
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
    }

    public function connexionadmin($login, $mdp,$location){
        $cobdd = new bdd("THAY", "localhost", "", "root");
        $c = $cobdd->b->prepare("SELECT * FROM admin WHERE login = :login and mdp = :mdp");
        $c->execute(array('login' => $login, 'mdp' => $mdp));
        $resultat = $c->fetchAll();
        if (!empty($resultat)){
            session_start();
            foreach ($resultat as $item) {
                $this->hydrate($item);
            }
        }else{
            header("Location: ".$location);
        }
    }
    public function inscriptionadmin($nom, $prenom,$login,$mdp,$age,$equipe){
        $cobdd = new bdd("THAY", "localhost", "", "root");
        $c = $cobdd->b->prepare("INSERT INTO admin (nom,prenom,login,mdp) VALUES (:nom,:prenom,:login,:mdp)");
        $c->execute(array('nom' => $nom, 'prenom' => $prenom, 'login' => $login, 'mdp' => $mdp));
    }
}