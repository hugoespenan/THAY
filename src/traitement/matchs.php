<?php


class matchs
{
    private $score_equipe1;
    private $score_equipe2;
    private $buteur_equipe1;
    private $buteur_equipe2;

public function getButeur(){

    $requ = $bdd->b->prepare("SELECT buteur.nom FROM buteur WHERE buteur.ref_match = resultat_foot.id_resultat_foot LEFT JOIN resultat_foot ON resultat_foot.id_resultat_foot = buteur.ref_match");
$requ->fetchAll();
foreach ($requ as $item){
    if ($item['ref_equipe'] == $item['score_equipe_1']){

    }
}
}
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
    public function setScoreEquipe1($score_equipe1)
    {
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
    public function setScoreEquipe2($score_equipe2)
    {
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
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->query("SELECT joueur_foot.nom FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot");
        $requ->fetchAll();
        $this->buteur_equipe1 = $requ['nom'];
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
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->query("SELECT joueur_foot.nom FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot");
        $requ->fetchAll();
        $this->buteur_equipe2 = $requ['nom'];
    }



}