<?php
class basededonne
{
    private $nombdd;
    private $host;
    private $mdpbdd;
    private $username;


    public function __construct($nombdd, $host, $mdp, $username)
    {
        try {

            $this->b = new PDO('mysql:local=' . $this->host = $host . ';dbname=' . $this->nombdd = $nombdd . ';charset=utf8', $this->username = $username, $this->mdpbdd = $mdp);

        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());

        }

    }
}
?>