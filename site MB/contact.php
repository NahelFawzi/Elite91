<?php
require 'include/header.php';
include 'mail.php';
//ici on verifie que y existe dans la barre de navigation, sil existe on l'attibu a $e
if(isset($_GET['e']))
  $e = $_GET['e']; 
else
    $e =0;
?>
<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li class="active">Contact</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Nous contacter</h1>
            </header>

            <p>
                Ici on peut explique au prospect que nous allons répondre rapidement à son courriel s'il a une question, s'il s'agit d'une question urgente il peux nous appeler pour une prompte réponse.
            </p>
            <br>
            <?php
                //si $e est positif alors on affiche 
                    if(isset($e) && ($e == 1)){ echo "<div class=\"alert alert-success alert-dismissable\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a><strong>Email envoy&eacute;!</strong></div>"; }?> 
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-3">
                        <input class="form-control" type="text" placeholder="Nom" id="nom" name="nom">
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" placeholder="Email" id="email" name="email">
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" placeholder="Sujet" id="sujet" name="sujet">
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" placeholder="T&eacute;l&eacute;phone" id="tel" name="tel">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea placeholder="Taper votre message ici..." class="form-control" rows="9" id="message" name="message"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <input class="btn btn-action" type="submit" value="Envoyer votre message" id="envoi" name="envoi">
                    </div>
                </div>
            </form>

        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-3 sidebar sidebar-right">
            <div class="widget">
                <h4>Adresse</h4>
                <address>
                    91 route de l'Essone, 91000 EVRY
                </address>
                <h4>T&eacute;l&eacute;phone:</h4>
                <address>
                    <p>+33 1 23 45 67 89<br>
                </address>
            </div>
        </aside>
        <!-- /Sidebar -->
    </div>
</div> <!-- /container -->

<section class="container-full top-space">
    <div id="map"></div>
</section>
<?php
    require 'include/footer.php';
?>
