<?php
include("head.php");
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
                       placeholder="POUR AFFICHER LE NOM DE L'EQUIPE SELON SON ID">
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
            $rech = new ajoutermatch();
            ?>
            <option><?php echo $rech->getRefEquipe($_POST['recherche']) ?></option>

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
    <div class="container">
        <div class="row align-items-center">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#">
                    <button name="a" type="button" class="btn btn-primary">Ajouter un prochain match</button>
                </a>
                <a href="remplirmatch.php">
                    <button name="r" type="button" class="btn btn-primary">Remplir un ancien match</button>
                </a>
            </div>
        </div>
    </div>

<?php
include("foot.html");
?>