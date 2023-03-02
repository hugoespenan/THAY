<?php
session_start();

require_once __DIR__ .'/../src/bdd/bdd.php';
$bdd = new bdd("projet_thay", "localhost", "", "root");
$date = date("Y-m-d");
$recolte = $bdd->b->prepare("SELECT * FROM prochain_match WHERE date < :dateojd");
$recolte->execute(array('dateojd' => $date));
$re = $recolte->fetch();
$suppression = $bdd->b->prepare("DELETE FROM prochain_match WHERE date < :dateojd");
$suppression->execute(array('dateojd' => $date));
if (!empty($re)){
$insert = $bdd->b->prepare("INSERT INTO resultat_foot(ref_equipe_1, ref_equipe_2, score_equipe_1, score_equipe_2, date) VALUES (:ref1, :ref2, null, null, :date)");
$insert->execute(array('ref1' => $re['ref_equipe_1'], 'ref2' => $re['ref_equipe_2'], 'date' => $re['date']));
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Soccer &mdash; Website by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/jquery.fancybox.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="site-logo">
                        <a href="index.php">
                            <img src="images/FC_THAY-removebg-preview.png" width="140" alt="Logo">
                        </a>
                    </div>
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
<?php
$_SESSION['admin'] = true;
if (isset($_SESSION['admin'])){
    ?>
    <li><a href="ajoutdematch.php" class="nav-link">Ajouter un match</a></li>
                                <?php
}
?>