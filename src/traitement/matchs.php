<?php


class matchs
{
    private $score_equipe1;
    private $score_equipe2;
    private $buteur_equipe1;
    private $buteur_equipe2;
    private $minute;
    private $nom_equipe1;
    private $nom_equipe2;
    private $date;



    /**
     * @return mixed
     */
    public function getScoreEquipe1()
    {
        return $this->score_equipe1;
    }

    /**
     * @param mixed $score_equipe1
     */
    public function setScoreEquipe1($id)
    {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT score_equipe_1 FROM resultat_foot LEFT JOIN equipe ON equipe.id_equipe = resultat_foot.ref_equipe_1 WHERE equipe.id_equipe = resultat_foot.ref_equipe_1 and resultat_foot.id_resultat_foot = :id");
        $requ->execute(array('id' => $id));
        $res = $requ->fetch();
        $score_equipe1 = $res['score_equipe_1'];
        $this->score_equipe1 = $score_equipe1;
    }

    /**
     * @return mixed
     */
    public function getScoreEquipe2()
    {
        return $this->score_equipe2;
    }

    /**
     * @param mixed $score_equipe2
     */
    public function setScoreEquipe2($id)
    {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT score_equipe_2 FROM resultat_foot LEFT JOIN equipe ON equipe.id_equipe = resultat_foot.ref_equipe_2 WHERE equipe.id_equipe = resultat_foot.ref_equipe_2 and resultat_foot.id_resultat_foot = :id");
        $requ->execute(array('id' => $id));
        $res = $requ->fetch();
        $score_equipe2 = $res['score_equipe_2'];
        $this->score_equipe2 = $score_equipe2;
    }

    /**
     * @return mixed
     */
    public function getButeurEquipe1()
    {
        return $this->buteur_equipe1;
    }

    /**
     * @param mixed $buteur_equipe1
     */
    public function setButeurEquipe1($buteur_equipe1)
    {
        $this->buteur_equipe1=$buteur_equipe1;
        /*
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->query("SELECT joueur_foot.nom FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot");
        $requ->fetchAll();
        $this->buteur_equipe1 = $requ['nom'];*/
    }

    /**
     * @return mixed
     */
    public function getButeurEquipe2()
    {
        return $this->buteur_equipe2;
    }

    /**
     * @param mixed $buteur_equipe2
     */
    public function setButeurEquipe2($buteur_equipe2)
    {
        $this->buteur_equipe2 = $buteur_equipe2;
    }
    public function setMinute($minute){
        $this->minute = $minute;
    }
    public function getMinute(){
        return " (".$this->minute.") ";
    }

    /**
     * @return mixed
     */
    public function getNomEquipe1()
    {
        return $this->nom_equipe1;
    }

    /**
     * @param mixed $nom_equipe1
     */
    public function setNomEquipe1($id)
    {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT nom FROM equipe LEFT JOIN resultat_foot ON equipe.id_equipe = resultat_foot.ref_equipe_1 WHERE equipe.id_equipe = resultat_foot.ref_equipe_1 and resultat_foot.id_resultat_foot = :id");
        $requ->execute(array('id' => $id));
        $res = $requ->fetch();
        $nom_equipe1 = $res['nom'];
        $this->nom_equipe1 = $nom_equipe1;
    }

    /**
     * @return mixed
     */
    public function getNomEquipe2()
    {
        return $this->nom_equipe2;
    }

    /**
     * @param mixed $nom_equipe2
     */
    public function setNomEquipe2($id)
    {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT nom FROM equipe LEFT JOIN resultat_foot ON equipe.id_equipe = resultat_foot.ref_equipe_2 WHERE equipe.id_equipe = resultat_foot.ref_equipe_2 and resultat_foot.id_resultat_foot = :id");
        $requ->execute(array('id' => $id));
        $res = $requ->fetch();
        $nom_equipe2 = $res['nom'];
        $this->nom_equipe2 = $nom_equipe2;
    }

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
    public function setDate($id)
    {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT date FROM resultat_foot WHERE id_resultat_foot = :id");
        $requ->execute(array('id' => $id));
        $res = $requ->fetch();
        $this->date = $res['date'];
    }



}