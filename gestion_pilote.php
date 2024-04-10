<h2>Gestion des pilotes</h2>

<?php
    $lePilote = null; //pilote a modifier
    if (isset($_GET['action']) && isset($_GET['idpilote']))
    {
        $action = $_GET['action'];
        $idpilote = $_GET['idpilote'];

        switch($action)
        {
            case "sup" : $unControleur->deletePilote($idpilote); 
            break;
           
            case "edit" :$lePilote=$unControleur->selectWherePilote ($idpilote); 
            //var_dump ($lePilote); 
            break;
        }
    }
    require_once ("vue/vue_insert_pilote.php");
    
    if (isset($_POST['Valider']))
    {
        $unControleur->insertPilote ($_POST);
    }
    if (isset($_POST['Modifier']))
    {
        $unControleur->updatePilote ($_POST);
        header("location: index.php?page=4");
    }


    if (isset($_POST['Filtrer']))
    {
        $filtre = $_POST['filtre'];
        $lesPilotes = $unControleur->searchAllPilotes($filtre);
    
    }else{

        $lesPilotes = $unControleur->selectAllPilotes ();
    }
    require_once ("vue/vue_select_pilotes.php");

?>