<?php
session_start();
require_once '../src/traitement/matchs.php';
require_once '../src/bdd/bdd.php';
$bdd = new bdd("projet_thay", "localhost", "", "root");
include("head.html");
?>
<div class="ml-auto">
    <nav class="site-navigation position-relative text-right" role="navigation">
        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li class="active"><a href="matches.php" class="nav-link">Matches</a></li>
            <li><a href="players.php" class="nav-link">Players</a></li>
            <li><a href="equipe.php" class="nav-link">Équipe</a></li>
            <li><a href="inscription.php" class="nav-link">Inscription</a></li>
        </ul>
    </nav>

    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
</div>
</div>
</div>

</header>

<div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto text-center">
                <h1 class="text-white">Matchs</h1>
                <p>Les résultats et les prochains matchs du FC THAY ⚽🥅</p>
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


<div class="site-section bg-dark">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="widget-next-match">
                    <div class="widget-title">
                        <h3>Prochain Match</h3>
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
                                    <img src="images/logo_4.png" alt="Image">
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
        </div>

        <div class="row">

            <div class="col-12 title-section">
                <h2 class="heading">Anciens matchs</h2>
            </div>


            <?php
            $eme = $bdd->b->query("SELECT id_resultat_foot FROM resultat_foot ORDER BY date DESC LIMIT 1, 2");
            $rr = $eme->fetchAll();
            foreach ($rr as $value) {

                ?>
                <div class="col-lg-6 mb-4">
                    <div class="bg-light p-4 rounded">
                        <div class="widget-body">
                            <div class="widget-vs">
                                <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                    </div>
                                    <div>
                                    </div>
                                    <div class="team-2 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-title">
                            <h3><?php
                                $id2 = $value['id_resultat_foot'];
                                $buteur = new matchs();
                                $buteur->setDate($id2);
                                echo $buteur->getDate() ?></h3>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <p class="mb-5">
                            </p>
                        </div>

                    </div>
                </div>

                <div class="container">


                    <div class="row">
                        <div class="col-lg-12">

                            <?php $match = new matchs();
                            $match->setScoreEquipe1($id2);
                            $match->setScoreEquipe2($id2);
                            ?>
                            <div class="d-flex team-vs">
                                <span class="score"><?php echo $match->getScoreEquipe1() . " - " . $match->getScoreEquipe2() ?></span>

                                <div class="team-1 w-50">
                                    <div class="team-details w-100 text-center">
                                        <img src="images/FC_THAY-removebg-preview.png" alt="Image" class="img-fluid">
                                        <h3><?php $nom = new matchs();
                                            $nom->setNomEquipe1($id2);
                                            echo $nom->getNomEquipe1();
                                            ?></h3>
                                        <ul class="list-unstyled">
                                            <?php
                                            $bdd = new bdd("projet_thay", "localhost", "", "root");
                                            $requ = $bdd->b->prepare("SELECT joueur_foot.*, buteur.minute FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot LEFT JOIN resultat_foot ON buteur.ref_match = resultat_foot.id_resultat_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot and joueur_foot.ref_equipe = resultat_foot.ref_equipe_1 and buteur.ref_match = resultat_foot.id_resultat_foot  and id_resultat_foot = :id ORDER BY buteur.minute ASC");
                                            $requ->execute(array('id' => $id2));
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
                                <div id="ancre2" class="team-2 w-50">
                                    <div class="team-details w-100 text-center">
                                        <img src="images/logo_2.png" alt="Image" class="img-fluid">
                                        <h3><?php
                                            $nom->setNomEquipe2($id2);
                                            echo $nom->getNomEquipe2();
                                            ?></h3>
                                        <ul class="list-unstyled">
                                            <?php
                                            $requ2 = $bdd->b->prepare("SELECT joueur_foot.*, buteur.minute FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot LEFT JOIN resultat_foot ON buteur.ref_match = resultat_foot.id_resultat_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot and joueur_foot.ref_equipe = resultat_foot.ref_equipe_2 and buteur.ref_match = resultat_foot.id_resultat_foot and id_resultat_foot = :id ORDER BY buteur.minute ASC");
                                            $requ2->execute(array('id' => $id2));
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


                <?php
            }
            ?>


            <div class="col-lg-6 mb-4">
                <div class="bg-light p-4 rounded">
                    <div class="widget-body">
                        <div class="widget-vs">
                            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                <div class="team-1 text-center">
                                </div>
                                <div>
                                </div>
                                <div class="team-2 text-center">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget-title">
                        <form method="post" action="#ancre">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="bouton">Afficher plus</button>
                            </div>
                        </form>

                    </div>

                    <div class="text-center widget-vs-contents mb-4">
                        <p class="mb-5">
                        </p>
                    </div>

                </div>
            </div>


            <?php
            if (isset($_POST['bouton']) and !isset($_POST['boutonmoins'])) {
                $plus = $bdd->b->query("SELECT id_resultat_foot FROM resultat_foot ORDER BY date DESC LIMIT 3, 20");
                $rrr = $plus->fetchAll();
                foreach ($rrr as $value) {
                    ?>
                    <div id="ancre" class="col-lg-6 mb-4">
                        <div class="bg-light p-4 rounded">
                            <div class="widget-body">
                                <div class="widget-vs">
                                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                        </div>
                                        <div>
                                        </div>
                                        <div class="team-2 text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-title">
                                <h3><?php
                                    $id2 = $value['id_resultat_foot'];
                                    $buteur = new matchs();
                                    $buteur->setDate($id2);
                                    echo $buteur->getDate() ?></h3>
                            </div>

                            <div class="text-center widget-vs-contents mb-4">
                                <p class="mb-5">
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="container">


                        <div class="row">
                            <div class="col-lg-12">

                                <?php $match = new matchs();
                                $match->setScoreEquipe1($id2);
                                $match->setScoreEquipe2($id2);
                                ?>
                                <div class="d-flex team-vs">
                                    <span class="score"><?php echo $match->getScoreEquipe1() . " - " . $match->getScoreEquipe2() ?></span>

                                    <div class="team-1 w-50">
                                        <div class="team-details w-100 text-center">
                                            <img src="images/FC_THAY-removebg-preview.png" alt="Image"
                                                 class="img-fluid">
                                            <h3><?php $nom = new matchs();
                                                $nom->setNomEquipe1($id2);
                                                echo $nom->getNomEquipe1();
                                                ?></h3>
                                            <ul class="list-unstyled">
                                                <?php
                                                $bdd = new bdd("projet_thay", "localhost", "", "root");
                                                $requ = $bdd->b->prepare("SELECT joueur_foot.*, buteur.minute FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot LEFT JOIN resultat_foot ON buteur.ref_match = resultat_foot.id_resultat_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot and joueur_foot.ref_equipe = resultat_foot.ref_equipe_1 and buteur.ref_match = resultat_foot.id_resultat_foot  and id_resultat_foot = :id ORDER BY buteur.minute ASC");
                                                $requ->execute(array('id' => $id2));
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
                                                $nom->setNomEquipe2($id2);
                                                echo $nom->getNomEquipe2();
                                                ?></h3>
                                            <ul class="list-unstyled">
                                                <?php
                                                $requ2 = $bdd->b->prepare("SELECT joueur_foot.*, buteur.minute FROM joueur_foot LEFT JOIN buteur ON buteur.ref_joueur_foot = joueur_foot.id_joueur_foot LEFT JOIN resultat_foot ON buteur.ref_match = resultat_foot.id_resultat_foot WHERE buteur.ref_joueur_foot = joueur_foot.id_joueur_foot and joueur_foot.ref_equipe = resultat_foot.ref_equipe_2 and buteur.ref_match = resultat_foot.id_resultat_foot and id_resultat_foot = :id ORDER BY buteur.minute ASC");
                                                $requ2->execute(array('id' => $id2));
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

                    <?php
                }
            }
            ?>
            <?php
            if (isset($_POST['bouton'])) {

                ?>
                <form method="post" action="#ancre2">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="boutonmoins">Afficher moins</button>
                    </div>
                </form>
            <?php } ?>


        </div>
    </div>
</div> <!-- .site-section -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-6 title-section">
                <h2 class="heading">Videos</h2>
            </div>
            <div class="col-6 text-right">
                <div class="custom-nav">
                    <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
                    <span></span>
                    <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
                </div>
            </div>
        </div>


        <div class="owl-4-slider owl-carousel">
            <div class="item">
                <div class="video-media">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                        <div class="caption">
                            <h3 class="m-0">Dogba set for Juvendu return?</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="video-media">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                        <div class="caption">
                            <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="video-media">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                        <div class="caption">
                            <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item">
                <div class="video-media">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                        <div class="caption">
                            <h3 class="m-0">Dogba set for Juvendu return?</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="video-media">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                        <div class="caption">
                            <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="video-media">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                        <div class="caption">
                            <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="container site-section">
    <div class="row">
        <div class="col-6 title-section">
            <h2 class="heading">Our Blog</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="custom-media d-flex">
                <div class="img mr-4">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <span class="meta">May 20, 2020</span>
                    <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora
                        dolorem.</p>
                    <p><a href="#">Read more</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="custom-media d-flex">
                <div class="img mr-4">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <span class="meta">May 20, 2020</span>
                    <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora
                        dolorem.</p>
                    <p><a href="#">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget mb-3">
                    <h3>News</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">All</a></li>
                        <li><a href="#">Club News</a></li>
                        <li><a href="#">Media Center</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">RSS</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget mb-3">
                    <h3>Tickets</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Online Ticket</a></li>
                        <li><a href="#">Payment and Prices</a></li>
                        <li><a href="#">Contact &amp; Booking</a></li>
                        <li><a href="#">Tickets</a></li>
                        <li><a href="#">Coupon</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget mb-3">
                    <h3>Matches</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Standings</a></li>
                        <li><a href="#">World Cup</a></li>
                        <li><a href="#">La Lega</a></li>
                        <li><a href="#">Hyper Cup</a></li>
                        <li><a href="#">World League</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget mb-3">
                    <h3>Social</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Youtube</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row text-center">
            <div class="col-md-12">
                <div class=" pt-5">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with <i class="icon-heart"
                                                                            aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>


</div>
<!-- .site-wrap -->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>


<script src="js/main.js"></script>

</body>

</html>