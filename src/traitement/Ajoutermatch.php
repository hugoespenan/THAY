<?php
require_once __DIR__ . '/../bdd/bdd.php';

class ajoutermatch
{
    protected $date;
    protected $ref_equipe1;
    protected $ref_equipe2;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getRefEquipe1()
    {
        return $this->ref_equipe1;
    }

    /**
     * @param mixed $ref_equipe1
     */
    public function setRefEquipe1($ref_equipe1)
    {
        $this->ref_equipe1 = $ref_equipe1;
    }

    /**
     * @return mixed
     */
    public function getRefEquipe2()
    {
        return $this->ref_equipe2;
    }

    /**
     * @param mixed $ref_equipe2
     */
    public function setRefEquipe2($ref_equipe2)
    {
        $this->ref_equipe2 = $ref_equipe2;
    }
    public function getRefEquipe($id){
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT nom FROM equipe WHERE id_equipe = :id");
        $requ->execute(array('id' => $id));
        $res = $requ->fetch();
        if (!empty($res)) {
            return $res['nom'];
        } else return "aucun resultat";
    }






}