<?php
require_once ("modele/modele.class.php");
class Controleur {
        private $unModele ;

        public function __construct (){
            $this->unModele = new Modele ();
        }
        /*********************Gestion constructeur***************** */
        public function selectAllConstructeurs(){
            return $this->unModele->selectAllConstructeurs();
        }
        public function searchAllConstructeurs($filtre){
            return $this->unModele->searchAllConstructeurs($filtre);
        }

        public function insertConstructeur ($tab){
            $this->unModele->insertConstructeur($tab);
        }
        public function deleteConstructeur($idconstructeur){
            $this->unModele->deleteConstructeur($idconstructeur);
        }
        public function selectWhereConstructeur ($idconstructeur){
            return $this->unModele->selectWhereConstructeur($idconstructeur);
        }
        public function updateConstructeur($tab){
            return $this->unModele->updateConstructeur($tab);
        }


        /*********************Gestion avion***************** */
        public function selectAllAvions(){
            return $this->unModele->selectAllAvions();
        }
        public function searchAllAvions($filtre){
            return $this->unModele->searchAllAvions($filtre);
        }
    
        public function insertAvion ($tab){
            $this->unModele->insertAvion($tab);
        }
        public function deleteAvion ($idavion){
            $this->unModele->deleteAvion($idavion);
        }
        public function selectWhereAvion($idavion){
            return $this->unModele->selectWhereAvion($idavion);
        }
        public function updateAvion ($tab){
            return $this->unModele->updateAvion($tab);
        }

        /*********************Gestion pilote***************** */
        public function selectAllPilotes(){
            return $this->unModele->selectAllPilotes();
        }

        public function searchAllPilotes($filtre){
            return $this->unModele->searchAllPilotes($filtre);
        }

        public function insertPilote ($tab){
            $this->unModele->insertPilote($tab);
        }

        public function deletePilote ($idpilote){
            $this->unModele->deletePilote($idpilote);
        }
        public function selectWherePilote($idpilote){
            return $this->unModele->selectWherePilote($idpilote);
        }
        public function updatePilote ($tab){
            return $this->unModele->updatePilote($tab);
        }
          /*********************Gestion vol***************** */
          public function selectAllVols(){
            return $this->unModele->selectAllVols();
        }

        public function searchAllVols($filtre){
            return $this->unModele->searchAllVols($filtre);
        }

        public function insertVol ($tab){
            $this->unModele->insertVol($tab);
        }

        public function deleteVol ($idvol){
            $this->unModele->deleteVol($idvol);
        }
        
        public function selectWhereVol($idvol){
            return $this->unModele->selectWhereVol($idvol);
        }
        
        public function updateVol ($tab){
            return $this->unModele->updateVol($tab);
        }


    }

?>

