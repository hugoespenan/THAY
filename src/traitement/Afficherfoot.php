<?php

class afficher
{
    private $nom;
    private $prenom;
    private $taille;
    private $piedfort;
    private $poste;
    private $numero;
    private $age;

    /**
     * @return mixed
     */
    public function getTaille()
    {
        echo $this->taille;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        echo $this->nom;
    }
    /**
     * @return mixed
     */
    public function getPoste()
    {
        echo $this->poste;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        echo $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getPiedfort()
    {
        echo $this->piedfort;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        echo $this->numero;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        echo $this->age;
    }



    public function __construct($tabl)
    {
        $this->hydrate($tabl);
    }

    /**
     * @param mixed $nom
     */

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }
    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $piedfort
     */
    public function setPiedfort($piedfort)
    {
        $this->piedfort = $piedfort;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }



    public function hydrate(array$donnees){
        foreach($donnees as $key => $item){

            $method='set'.($key);

            if(method_exists($this,$method)){
                $this->$method($item);

            }
        }

    }
    public function afficher(){
        echo "".$this->nom." ".$this->prenom." PF : ".$this->piedfort." Numéro : ".$this->numero." Âge ".$this->age;
    }
}