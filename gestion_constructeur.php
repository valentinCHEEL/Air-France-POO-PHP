<h2>Gestion des constructeurs</h2>

<?php
    $leConstructeur = null; //constructeur a modifier
    if (isset($_GET['action']) && isset($_GET['idconstructeur']))
    {
        $action = $_GET['action'];
        $idconstructeur = $_GET['idconstructeur'];

        switch($action)
        {
            case "sup" : $unControleur->deleteConstructeur($idconstructeur); 
            break;
           
            case "edit" :$leConstructeur=$unControleur->selectWhereConstructeur ($idconstructeur); 
            //var_dump ($leConstructeur); 
            break;
        }
    }
    require_once ("vue/vue_insert_constructeur.php");
    
    if (isset($_POST['Valider']))
    {
        $unControleur->insertConstructeur ($_POST);
    }
    if (isset($_POST['Modifier']))
    {
        $unControleur->updateConstructeur ($_POST);
        header("location: index.php?page=2");
    }


    if (isset($_POST['Filtrer']))
    {
        $filtre = $_POST['filtre'];
        $lesConstructeurs = $unControleur->searchAllConstructeurs($filtre);
    
    }else{

        $lesConstructeurs = $unControleur->selectAllConstructeurs ();
    }
    require_once ("vue/vue_select_constructeurs.php");

?>