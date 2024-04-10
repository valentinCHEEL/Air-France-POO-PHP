<?php
   require_once("controleur/controleur.class.php");
    $unControleur = new Controleur();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air france</title>
</head>
<body>
    <center>
        <h1> Gestion des vols de AIR FRANCE </h2>
        <br>
        <a href="index.php?page=1">
            <img src="images/airfrance.jpg" height="100" width="100">
        </a>
        <a href="index.php?page=2">
            <img src="images/constructeur.png" height="100" width="100">
        </a>

        <a href="index.php?page=3">
            <img src="images/avion.png" height="100" width="100">
        </a>

        <a href="index.php?page=4">
            <img src="images/pilote.png" height="100" width="100">
        </a>

        <a href="index.php?page=5">
            <img src="images/vol.png" height="100" width="100">
        </a>

        <?php
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }

        switch($page){
            case 1 : require_once ("home.php"); break;
            case 2 : require_once ("gestion_constructeur.php"); break;
            case 3 : require_once ("gestion_avion.php"); break;
            case 4 : require_once ("gestion_pilote.php"); break;
            case 5 : require_once ("gestion_vol.php"); break;
            default : require_once ("erreur.php"); break;
        }
        ?>
    </center>
</body>
</html>