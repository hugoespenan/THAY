<!DOCTYPE html>
<?php require_once __DIR__ .'/../src/traitement/matchs.php';
require_once __DIR__ .'/../src/bdd/bdd.php';
require_once __DIR__ .'/../src/traitement/Recherche.php';
$bdd = new bdd("projet_thay", "localhost", "", "root");
include("head.html");
?>
    <div class="ml-auto">
        <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="players.php" class="nav-link">Players</a></li>
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

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 ml-auto">
                    <h1 class="text-white">FC THAY</h1>
                    <p>Bienvenue au football club THAY, sur ce site vous pouvez consulter nos derniers matchs, notre
                        prochain match, nous contacter et même vous inscrire au club !</p>


                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <?php
        $requete = $bdd->b->query("SELECT id_resultat_foot FROM resultat_foot ORDER BY date DESC LIMIT 1");
        $resultat = $requete->fetch();
        $bonid = $resultat['id_resultat_foot'];

        ?>
        <div class="row">
            <div class="col-lg-12">
                <?php $match = new matchs();
                $match->setScoreEquipe1($bonid);
                $match->setScoreEquipe2($bonid);
                ?>
                <div class="d-flex team-vs">
                    <span class="score"><?php echo $match->getScoreEquipe1() . " - " . $match->getScoreEquipe2() ?></span>
                    <div class="team-1 w-50">
                        <div class="team-details w-100 text-center">
                            <img src="images/FC_THAY-removebg-preview.png" alt="Image" class="img-fluid">
                            <h3><?php $nom = new matchs();
                                $nom->setNomEquipe1($bonid);
                                echo $nom->getNomEquipe1();
                                ?></h3>
                            <ul class="list-unstyled">
                                <?php
                                $bdd = new bdd("projet_thay", "localhost", "", "root");
                                $requ = $bdd->b->prepare("SELECT joueur_foot.*, buteur.minute FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot LEFT JOIN resultat_foot ON buteur.ref_match = resultat_foot.id_resultat_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot and joueur_foot.ref_equipe = resultat_foot.ref_equipe_1 and buteur.ref_match = resultat_foot.id_resultat_foot and id_resultat_foot = :id ORDER BY buteur.minute ASC");
                                $requ->execute(array('id' => $bonid));
                                $res = $requ->fetchAll();
                                if (!empty($res)) {
                                    foreach ($res as $item) {
                                        $buteur = new matchs();
                                        $buteur->setButeurEquipe1($item['nom']);
                                        $buteur->setMinute($item['minute']);
                                        ?>
                                        <li><?php echo $buteur->getButeurEquipe1() . $buteur->getMinute() ?></li>
                                        <?php
                                    }
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
                            <ul class="list-unstyled">
                                <?php
                                $requ2 = $bdd->b->prepare("SELECT joueur_foot.*, buteur.minute FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot LEFT JOIN resultat_foot ON buteur.ref_match = resultat_foot.id_resultat_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot and joueur_foot.ref_equipe = resultat_foot.ref_equipe_2 and buteur.ref_match = resultat_foot.id_resultat_foot and id_resultat_foot = :id ORDER BY buteur.minute ASC");
                                $requ2->execute(array('id' => $bonid));
                                $res2 = $requ2->fetchAll();
                                if (!empty($res2)) {
                                    foreach ($res2 as $item) {
                                        $buteur = new matchs();
                                        $buteur->setButeurEquipe2($item['nom']);
                                        $buteur->setMinute($item['minute']);
                                        ?>
                                        <li><?php echo $buteur->getButeurEquipe2() . $buteur->getMinute() ?></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-12 title-section">
                    <h2 class="heading">Latest News</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Romolu to stay at Real Nadrid?</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Kai Nets Double To Secure Comfortable Away Win</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-entry">
                        <a href="#">
                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div class="caption-inner">
                                <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="images/person_1.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Mellissa Allison</h4>
                                        <span>May 19, 2020 &bullet; Sports</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="site-section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="widget-next-match">
                    <div class="widget-title">
                        <h3>Next Match</h3>
                    </div>
                    <div class="widget-body mb-3">
                        <div class="widget-vs">
                            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                <div class="team-1 text-center">
                                    <img src="images/FC_THAY-removebg-preview.png" alt="Image">
                                    <h3><?php
                                        $larequete = $bdd->b->query("SELECT id_prochain_match FROM prochain_match ORDER BY date ASC LIMIT 1");
                                        $reponsedelarequete = $larequete->fetch();
                                        $idduprochainmatch = $reponsedelarequete['id_prochain_match'];
                                        $prochain = new matchs();
                                        $prochain->setNomEquipe1p($idduprochainmatch);
                                        echo $prochain->getNomEquipe1p();
                                        ?></h3>
                                </div>
                                <div>
                                    <span class="vs"><span>VS</span></span>
                                </div>
                                <div class="team-2 text-center">
                                    <img src="images/logo_2.png" alt="Image">
                                    <h3><?php $prochain->setNomEquipe2p($idduprochainmatch);
                                        echo $prochain->getNomEquipe2p() ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center widget-vs-contents mb-4">
                        <p class="mb-5">
                  <span class="d-block"><?php $prochain->setDatep($idduprochainmatch);
                      echo $prochain->getDatep();
                      ?></span>
                            <strong class="text-primary">New Euro Arena</strong>
                        </p>
                        <!--<div id="date-countdown2" class="pb-1"></div>-->
                    </div>
                </div>
            </div>

            <div class="col-lg-6">

            </div>
        </div>
    </div> <!-- .site-section -->

<?php
include("foot.html");
?>