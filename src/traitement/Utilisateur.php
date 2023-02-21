<?php
/*
<<<<<<< HEAD

=======
>>>>>>> 817d4f82c285784d0df2a0f796de3bd1a9a2965f*/
require_once 'bdd.php';

class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $login;
    protected $mdp;
    protected $equipe;
    protected $age;
    protected $id;

    public function __construct($nom, $prenom, $login, $mdp, $age, $equipe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->age = $age;
        $this->equipe = $equipe;
    }

    public function connexion($login, $mdp)
    {
        $cobdd = new bdd("THAY", "localhost", "", "root");
        $c = $cobdd->b->prepare("SELECT * FROM utilisateur WHERE login = :login and mdp = :mdp");
        $c->execute(array('login' => $login, 'mdp' => $mdp));
        $resultat = $c->fetchAll();
        if (!empty($resultat)) {
            foreach ($resultat as $item) {
                $this->setId($item['id_utilisateur']);
            }
        } else {
            header("Location: index.php");
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function inscription($nom, $prenom, $login, $mdp, $age, $equipe, $location)
    {
        $cobdd = new bdd("THAY", "localhost", "", "root");
        $dist = $cobdd->b->prepare("SELECT * FROM utilisateur WHERE login = :login");
        $dist->execute(array('login' => $login));
        $res = $dist->fetchAll();
        if (empty($res)) {
            $c = $cobdd->b->prepare("INSERT INTO utilisateur (nom,prenom,login,mdp,age,equipe) VALUES (:nom,:prenom,:login,:mdp,:age,:equipe)");
            $c->execute(array('nom' => $nom, 'prenom' => $prenom, 'login' => $login, 'mdp' => $mdp, 'age' => $age, 'equipe' => $equipe,));
        } else {
            header("Location: " . $location);
        }
    }

    public function hydrate(array $tablo)
    {
        foreach ($tablo as $key => $item) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($item);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * @param mixed $equipe
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}