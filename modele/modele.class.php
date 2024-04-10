<?php
	class Modele {
		private $unPDO ;
		public function __construct (){
			try{
			$this->unPDO = new PDO ("mysql:host=localhost;dbname=air_france","root","") ;
		}
			catch (PDOException $exp)
			{
				echo "Erreur connexion :".$exp->getMessage ();
			}
		}
		/**********Gestion des constructeurs*********/
		public function selectAllConstructeurs (){
			$requete = "select * from constructeur ;" ;
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ();
			return $select->fetchAll();
		}
		public function searchAllConstructeurs ($filtre){
			$requete = "select * from constructeur 
					where libelle like :filtre or pays like :filtre or statut like :filtre ;" ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetchAll();
		}
		public function insertConstructeur ($tab){
			$requete = "insert into constructeur values (null, :libelle, :pays, :statut);" ;
			$donnees =array( 	":libelle"=>$tab['libelle'],
								":pays"=>$tab['pays'],
								":statut"=>$tab['statut']);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
			public function deleteConstructeur ($idconstructeur){
			$requete ="delete from constructeur where idconstructeur = :idconstructeur ;" ;
			$donnees =array(":idconstructeur"=>$idconstructeur);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
		public function selectWhereConstructeur ($idconstructeur)
		{
			$requete ="select * from constructeur where idconstructeur=:idconstructeur;" ;
			$donnees =array(":idconstructeur"=>$idconstructeur);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
			$unConstructeur = $select->fetch ();
			return $unConstructeur;
		}
		public function updateConstructeur ($tab){
			$requete ="update constructeur set libelle = :libelle, pays=:pays, statut=:statut where idconstructeur=:idconstructeur;";
			$donnees=array(	":libelle"=>$tab['libelle'],
							":pays"=>$tab['pays'],
							":statut"=>$tab['statut'],
							":idconstructeur"=>$tab['idconstructeur']
						);
		$select = $this->unPDO->prepare ($requete);
		$select->execute ($donnees);	
		}
		/**********Gestion des avions*********/
		public function selectAllAvions (){
			$requete = "select * from avion ;" ;
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ();
			return $select->fetchAll();
		}
		public function searchAllAvions ($filtre){
			$requete = "select * from avion
					where designation like :filtre or dateAchat like :filtre or capacite like :filtre;" ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetchAll();
		}
		public function insertAvion ($tab){
			$requete = "insert into avion values (null, :designation, :dateAchat, :capacite, :idconstructeur); " ;
			$donnees =array( 	":designation"=>$tab['designation'],
								":dateAchat"=>$tab['dateAchat'],
								":capacite"=>$tab['capacite'],
								":idconstructeur"=>$tab['idconstructeur']);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
		public function deleteAvion ($idavion){
			$requete ="delete from avion where idavion = :idavion ;" ;
			$donnees =array(":idavion"=>$idavion);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
		public function selectWhereAvion ($idavion)
		{
			$requete ="select * from avion where idavion=:idavion;" ;
			$donnees =array(":idavion"=>$idavion);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
			$unAvion = $select->fetch ();
			return $unAvion;
		}
		public function updateAvion ($tab){
			$requete ="update avion set designation=:designation, dateAchat=:dateAchat, capacite=:capacite, idconstructeur=:idconstructeur where idavion=:idavion  ;";
			$donnees=array(	":designation"=>$tab['designation'],
							":dateAchat"=>$tab['dateAchat'],
							":capacite"=>$tab['capacite'],
							":idconstructeur"=>$tab['idconstructeur'],
							":idavion"=>$tab['idavion']
						);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}

		/**********Gestion des pilotes*********/

		public function selectAllPilotes (){
			$requete = "select * from pilote ;" ;
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ();
			return $select->fetchAll();
		}

		public function searchAllPilotes ($filtre){
			$requete = "select * from pilote
					where nom like :filtre or prenom like :filtre or adresse like :filtre or email like :filtre or bip like :filtre;" ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetchAll();
		}

		public function insertPilote ($tab){
			$requete = "insert into pilote values (null, :nom, :prenom, :adresse, :email, :bip, :nbHeuresVols); " ;
			$donnees =array( 	":nom"=>$tab['nom'],
								":prenom"=>$tab['prenom'],
								":adresse"=>$tab['adresse'],
								":email"=>$tab['email'],
								":bip"=>$tab['bip'],
								":nbHeuresVols"=>$tab['nbHeuresVols'],
							);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}

		public function deletePilote ($idpilote){
			$requete ="delete from pilote where idpilote = :idpilote ;" ;
			$donnees =array(":idpilote"=>$idpilote);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
		public function selectWherePilote ($idpilote)
		{
			$requete ="select * from pilote where idpilote=:idpilote;" ;
			$donnees =array(":idpilote"=>$idpilote);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
			$unPilote = $select->fetch ();
			return $unPilote;
		}
		public function updatePilote ($tab){
			$requete ="update pilote set nom=:nom, prenom=:prenom, adresse=:adresse, email=:email, bip=:bip, nbHeuresVols=:nbHeuresVols where idpilote=:idpilote  ;";
			$donnees=array(		":nom"=>$tab['nom'],
								":prenom"=>$tab['prenom'],
								":adresse"=>$tab['adresse'],
								":email"=>$tab['email'],
								":bip"=>$tab['bip'],
								":nbHeuresVols"=>$tab['nbHeuresVols'],
								":idpilote"=>$tab['idpilote']
						);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
		/**********Gestion des vols*********/
		public function selectAllVols (){
			$requete = "select * from vol ;" ;
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ();
			return $select->fetchAll();
		}

		public function searchAllVols ($filtre){
			$requete = "select * from vol
					where libelle like :filtre or dateVol like :filtre or heureVol like :filtre;" ;
			$donnees=array(":filtre"=> "%".$filtre."%");
			$select = $this-> unPDO->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetchAll();
		}

		public function insertVol($tab){
			$requete = "insert into vol values (null, :libelle, :dateVol, :heureVol, :idavion, :idpilote1, :idpilote2); " ;
			$donnees =array( 	":libelle"=>$tab['libelle'],
								":dateVol"=>$tab['dateVol'],
								":heureVol"=>$tab['heureVol'],
								":idavion"=>$tab['idavion'],
								":idpilote1"=>$tab['idpilote1'],
								":idpilote2"=>$tab['idpilote2']
							);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}

		public function deleteVol ($idvol){
			$requete ="delete from vol where idvol = :idvol ;" ;
			$donnees =array(":idvol"=>$idvol);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
		public function selectWhereVol ($idvol)
		{
			$requete ="select * from vol where idvol=:idvol;" ;
			$donnees =array(":idvol"=>$idvol);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
			$unVol = $select->fetch ();
			return $unVol;
		}
		public function updateVol ($tab){
			$requete ="update vol set libelle=:libelle, dateVol=:dateVol, heureVol=:heureVol, idavion=:idavion, idpilote1=:idpilote1, idpilote2=:idpilote2 where idvol=:idvol  ;";
			$donnees=array(		":libelle"=>$tab['libelle'],
								":dateVol"=>$tab['dateVol'],
								":heureVol"=>$tab['heureVol'],
								":idavion"=>$tab['idavion'],
								":idpilote1"=>$tab['idpilote1'],
								":idpilote2"=>$tab['idpilote2'],
								":idvol"=>$tab['idvol']
						);
			$select = $this->unPDO->prepare ($requete);
			$select->execute ($donnees);
		}
	} 
?>