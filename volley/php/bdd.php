<?php

class BDD{
    private $username;
    private $mdp;
    private $url;
    private $bdd;
    private $serveur;
    private $lien;


    public function __construct($Serveur = 'localhost', $Bdd = 'base', $Identifiant = 'root', $Mdp = '')
    {
      $this->serveur     = $serveur;
      $this->bdd         = $bdd;
      $this->username    = $username;
      $this->mdp         = $mdp;
      $this->lien= mysql_connect($this->serveur, $this->username, $this->mdp);
      
      if(!$this->lien && $this->Debogue)
        throw new MySQLExeption('Erreur de connexion au serveur MySql!!!');
      $Base = mysql_select_db($this->Bdd,$this->Lien);
      if (!$Base && $this->Debogue)
        throw new MySQLExeption('Erreur de connexion à la base de donnees!!!');
    }

}
















?>