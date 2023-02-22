<?php
require_once '../../../../../wamp64/www/Projet THAY/src/bdd/bdd.php';
class Recherche
{

    private $nom;
    private $prenom;
    private $taille;
    private $bonpied;
    private $poste;
    private $age;
    private $numero;
    private $ref_equipe;

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
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getBonpied()
    {
        return $this->bonpied;
    }

    /**
     * @param mixed $bonpied
     */
    public function setBonpied($bonpied)
    {
        $this->bonpied = $bonpied;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
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

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getRefEquipe()
    {
        return $this->ref_equipe;
    }

    /**
     * @param mixed $ref_equipe
     */
    public function setRefEquipe($ref_equipe)
    {
        $this->ref_equipe = $ref_equipe;
    }

    public function hydrate(array $tableau)
    {
        foreach ($tableau as $key => $item) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($item);
            }
        }
    }

    public function recherch($nom)
    {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $rech = $bdd->b->prepare("SELECT * FROM joueur_foot WHERE nom LIKE :nom");
        $rech->execute(array('nom' => $nom . '%'));
        $ress = $rech->fetchAll();
        return $ress;
    }


}