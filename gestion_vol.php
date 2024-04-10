<h2>Gestion des vols</h2>

<?php
    $leVol = null; //vol a modifier
    if (isset($_GET['action']) && isset($_GET['idvol']))
    {
        $action = $_GET['action'];
        $idvol = $_GET['idvol'];

        switch($action)
        {
            case "sup" : $unControleur->deleteVol($idvol);  
            break;
           
            case "edit" :$leVol=$unControleur->selectWhereVol ($idvol); 
            //var_dump ($leVol); 
            break;
        }
    }
    $lesAvions = $unControleur->selectAllAvions(); 
    $lesPilotes = $unControleur->selectAllPilotes(); 
    $lesConstructeurs = $unControleur->selectAllConstructeurs(); 
    require_once ("vue/vue_insert_vol.php");
    
    if (isset($_POST['Valider']))
    {
        $unControleur->insertVol ($_POST);
    }
    if (isset($_POST['Modifier']))
    {
        $unControleur->updateVol ($_POST);
        header("location: index.php?page=5");
    }


    if (isset($_POST['Filtrer']))
    {
        $filtre = $_POST['filtre'];
        $lesVols = $unControleur->searchAllVols($filtre);
    
    }else{

        $lesVols = $unControleur->selectAllVols ();
    }
    require_once ("vue/vue_select_vols.php");

?>