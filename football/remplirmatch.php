<?php
include("head.php");
require_once __DIR__ . '/../src/traitement/Matchs.php';
require_once __DIR__ . '/../src/traitement/Recherche.php';
require_once __DIR__ . '/../src/bdd/bdd.php';
require_once __DIR__ . '/../src/traitement/Ajouterancienmatch.php';
require_once __DIR__ . '/../src/traitement/Ajoutermatch.php';
?>

    <li><a href="index.php" class="nav-link">Home</a></li>
    <li><a href="matches.php" class="nav-link">Matches</a></li>
    <li><a href="players.php" class="nav-link">Joueurs</a></li>
    <li><a href="equipe.php" class="nav-link">Équipe</a></li>
    <li><a href="inscription.php" class="nav-link">Inscription</a></li>
    </ul>
    </nav>

    <a href="#"
       class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
    </div>
    </div>
    </div>
    <center>
        <div class="form-floating mb-3">
            <form method="post">
                <input type="text" class="form-control" id="floatingInput" name="recherche"
                       placeholder="POUR AFFICHER UN JOUEUR DE L'EQUIPE SELON SON NOM">
                <!--<button name="rech" class="btn btn-primary" type="submit">Rechercher</button>-->
            </form>
        </div>
    </center>

<?php
if (isset($_POST['recherche'])) {
    ?>
    <form method="post">
        <select class="form-select form-select-lg mb-3" name="r">
            <option selected>Résultats de la recherche</option>
            <?php
            $rech = new Recherche();
            foreach ($rech->recherch($_POST['recherche']) as $item) {
                ?>
                <option><?php echo $item['nom'] . " id = " . $item['id_joueur_foot'] ?></option>

                <?php
            }
            ?>
        </select>
    </form>

    <?php
}
?>
    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
        <div class="container">
            <div class="row align-items-center">


                <!--<div class="col-lg-5 mx-auto text-center">

                </div>-->
            </div>
        </div>
    </div>
<?php
$pasrempli = new matchs();
foreach ($pasrempli->getMatchPasRempli() as $item) {
    $bonid = $item['id_resultat_foot'];
    ?>
    <div class="row">
        <div class="col-lg-12">
            <?php
            ?>
            <div class="d-flex team-vs">
                <form action="remplirmatch.php" method="post">
                    <div class="mb-3">
                    <span class="score"><input type="text" name="score1" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp" placeholder="Score 1">
                    <input type="text" name="score2" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Score 2">
                    </span>
                    </div>
                </form>
                <div class="team-1 w-50">
                    <div class="team-details w-100 text-center">
                        <img src="images/FC_THAY-removebg-preview.png" alt="Image" class="img-fluid">
                        <h3><?php $nom = new matchs();
                            $nom->setNomEquipe1($bonid);
                            echo $nom->getNomEquipe1();
                            ?></h3>
                        <form action="remplirmatch.php" method="post">
                            Combien de buteur equipe 1 ?
                            <input class="form-control" type="number" name="nbbuteur">
                            <input class="form-control" type="submit" value="Valider" name="val">
                        </form>
                        <ul class="list-unstyled">
                            <?php if (isset($_POST['nbbuteur']) and isset($_POST['val'])) {
                                $b = 0;
                                ?>
                                <form method="post" action="remplirmatch.php">
                                    <?php
                                    for ($i = 0; $i < $_POST['nbbuteur']; $i++) {
                                        $b = 1;
                                        ?>
                                        <li><input class="form-control" type="number" name="idplayer<?php echo $i ?>"
                                                   placeholder="id du joueur"></li>
                                        <li><input class="form-control" type="number" name="minutebut<?php echo $i ?>"
                                                   placeholder="minute"></li>

                                        <?php
                                    }
                                    if ($b == 1) {
                                        ?>
                                        <input class="form-control" type="submit" name="v2" value="Valider">
                                        <?php
                                    }
                                    ?>
                                </form>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="team-2 w-50">
                    <div class="team-details w-100 text-center">
                        <img src="images/logo_2.png" alt="Image" class="img-fluid">
                        <h3><?php
                            $nom->setNomEquipe2($bonid);
                            echo $nom->getNomEquipe2();
                            ?></h3>
                        <form action="remplirmatch.php" method="post">
                            Combien de buteur equipe 1 ?
                            <input class="form-control" type="number" name="nbbuteur2">
                            <input class="form-control" type="submit" value="Valider" name="val2">
                        </form>
                        <ul class="list-unstyled">
                            <?php if (isset($_POST['nbbuteur2']) and isset($_POST['val2'])) {
                                $b = 0;
                                ?>
                                <form method="post" action="remplirmatch.php">
                                    <?php
                                    for ($i = 0; $i < $_POST['nbbuteur2']; $i++) {
                                        $b = 1;
                                        ?>
                                        <li><input class="form-control" type="number" name="idplayer2<?php echo $i ?>"
                                                   placeholder="id du joueur"></li>
                                        <li><input class="form-control" type="number" name="minutebut2<?php echo $i ?>"
                                                   placeholder="minute"></li>

                                        <?php
                                    }
                                    if ($b == 1) {
                                        ?>
                                        <input class="form-control" type="submit" name="v3" value="Valider">
                                        <?php
                                    }
                                    ?>
                                </form>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $ajout = new matchs();
    if (isset($_POST['score1']) and isset($_POST['score2'])) {
        $bdd = new bdd("projet_thay", "localhost", "", "root");
        $requ = $bdd->b->prepare("SELECT id_equipe FROM equipe LEFT JOIN prochain_match ON equipe.id_equipe = prochain_match.ref_equipe_1 WHERE equipe.id_equipe = prochain_match.ref_equipe_1 and prochain_match.id_prochain_match = :id");
        $requ->execute(array('id' => $bonid));
        $res = $requ->fetch();
        $ajout->remplirScore1($_POST['score1'], $res['id_equipe']);
        $requ2 = $bdd->b->prepare("SELECT id_equipe FROM equipe LEFT JOIN prochain_match ON equipe.id_equipe = prochain_match.ref_equipe_2 WHERE equipe.id_equipe = prochain_match.ref_equipe_2 and prochain_match.id_prochain_match = :id");
        $requ2->execute(array('id' => $bonid));
        $res2 = $requ2->fetch();
        $ajout->remplirScore2($_POST['score2'], $res2['id_equipe']);
    }
    if (isset($_POST[''])){
        for ($a = 0;$a<$_POST['nbbuteur'];$a++){
            
        }
    }
}
include("foot.html");
?>