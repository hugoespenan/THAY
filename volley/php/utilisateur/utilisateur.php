<?php
/*
<<<<<<< HEAD

=======
>>>>>>> 817d4f82c285784d0df2a0f796de3bd1a9a2965f*/

class user
{
    protected $nom;
    protected $prenom;
    protected $login;
    protected $mdp;
    protected $ville;
    protected $jour;
    protected $mois;
    protected $annee;
    protected $cp;
    protected $tel;
    protected $genre;


    public function __construct($nom, $prenom, $login, $mdp, $ville, $jour, $mois, $annee, $cp, $tel, $genre)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->ville = $ville;
        $this->jour = $jour;
        $this->mois = $mois;
        $this->annee = $annee;
        $this->cp = $cp;
        $this->tel = $tel;
        $this->genre = $genre;
    }


    public function connexion($login, $mdp)
    {
        $cobdd = new basededonne("thay", "localhost", "", "root");
        $c = $cobdd->b->prepare("SELECT * FROM utilisateur WHERE login = :login and mdp = :mdp");
        $c->execute(array('login' => $login, 'mdp' => $mdp));
        $resultat = $c->fetchAll();
        if (!empty($resultat)) {

            header('Location: login.html');
        } else {
            echo "ERREUR";
        }
    }


    public function inscription($nom, $prenom, $login, $mdp, $ville, $jour, $mois, $annee, $cp, $tel, $genre)
    {
        $cobdd = new basededonne("thay", "localhost", "", "root");
        $dist = $cobdd->b->prepare("SELECT * FROM utilisateur WHERE login = :login");
        $dist->execute(array('login' => $login));
        $res = $dist->fetchAll();
        if (empty($res)) {
            $c = $cobdd->b->prepare("INSERT INTO utilisateur (nom, prenom, login, mdp, ville, jour, mois, annee, cp, tel, genre) VALUES (:nom, :prenom, :login, :mdp, :ville, :jour, :mois, :annee, :cp, :tel, :genre)");
            $c->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'login' => $login,
                'mdp' => $mdp,
                'ville' => $ville,
                'jour' => $jour,
                'mois' => $mois,
                'annee' => $annee,
                'cp' => $cp,
                'tel' => $tel,
                'genre' => $genre,));

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
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @param mixed $jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    }

    /**
     * @return mixed
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * @param mixed $mois
     */
    public function setMois($mois)
    {
        $this->mois = $mois;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

}