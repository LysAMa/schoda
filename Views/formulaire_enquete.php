<?php ?>

<!DOCTYPE html>

<html>
<head>
    <title>Schoda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../Public/static/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <!-- ################################################################################################ -->
    <!-- importation de bootstrap dans le projet -->
    <!-- importation des classes css de bootstrap -->
    <link rel="stylesheet" type="text/css" href="../Public/static/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../Public/static/Style/style.css"/>
    <script type="text/javascript" src="../Public/static/Js/jquery.min.js"></script>
    <script type="text/javascript" src="../Public/static/bootstrap/dist/js/bootstrap.min.js"></script>

</head>

<body id="top">
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">

        <div class="fl_right">
            <ul class="nospace inline pushright">
                <li><input type="text" class="form-control" id="pwd" name="champ_recherche"></li>
                <li><input type="submit" class="btn btn-info btn-log" name="btn_recherche" value="Recherche"></li>
                <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="bgded overlay" style="height: 130px;">
    <!-- menu -->
    <?php require_once("../Views/menu.php");    ?>
</div>

<div class="wrapper row3" >
    <main class="hoc container clear" id="act">
        <form action="">
            <h1>Publier les resultats d'une enquete: </h1>
            <hr />
            <div class="form-group">
                <label for="nom_enquete">Nom de l'enquete</label><br/>
                <input type="text" class="form-control" id="nom_enquete" />
            </div>
            <div class="form-group">
                <label for="des_enquete">Donner une description de l'enquete:</label><br/>
                <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="zone_enquete">Zone toucher par l'enquete: </label><br/>
                <input type="text" class="form-control" id="zone_enquete">
            </div>
            <div class="form-group">
                <label for="lien_enquete">Donner un lien vers l'enquete sur Kobo: </label><br/>
                <input type="url" class="form-control" id="lien_enquete" />
            </div>
            <button type="submit" class="btn btn-default">Soumettre</button>
        </form>

    </main>
</div>

<?php
// include("pied.php");
require_once("../Views/pied.php");
?>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../Public/static/layout/scripts/jquery.min.js"></script>
<script src="../Public/static/layout/scripts/jquery.backtotop.js"></script>
<script src="../Public/static/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
