<?php
include("head.php");
require_once __DIR__ .'/../src/traitement/Recherche.php';
require_once __DIR__ .'/../src/bdd/bdd.php';
?>

                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li class="active"><a href="players.php" class="nav-link">Joueurs</a></li>
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
                       placeholder="Rechercher un joueur avec son nom">
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
            <option><?php echo $item['nom']." id = ".$item['id_joueur_foot'] ?></option>

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
                <div class="col-lg-5 mx-auto text-center">
                    <h1 class="text-white">Players</h1>
                </div>
            </div>
        </div>
    </div>

<?php
include("foot.html");
?>