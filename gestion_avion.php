<h2>Gestion des avions</h2>

<?php
    $lAvion = null; //avion a modifier
    if (isset($_GET['action']) && isset($_GET['idavion']))
    {
        $action = $_GET['action'];
        $idavion = $_GET['idavion'];

        switch($action)
        {
            case "sup" : $unControleur->deleteAvion($idavion); 
            break;
           
            case "edit" :$lAvion=$unControleur->selectWhereAvion ($idavion); 
            //var_dump ($lAvion); 
            break;
        }
    }
    $lesConstructeurs = $unControleur->selectAllConstructeurs(); 
    require_once ("vue/vue_insert_avion.php");
    
    if (isset($_POST['Valider']))
    {
        $unControleur->insertAvion ($_POST);
    }
    if (isset($_POST['Modifier']))
    {
        $unControleur->updateAvion ($_POST);
        header("location: index.php?page=3");
    }


    if (isset($_POST['Filtrer']))
    {
        $filtre = $_POST['filtre'];
        $lesAvions = $unControleur->searchAllAvions($filtre);
    
    }else{

        $lesAvions = $unControleur->selectAllAvions();
    }
    require_once ("vue/vue_select_avions.php");

?>