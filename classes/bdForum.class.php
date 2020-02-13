<?php
require_once("bd.class.php");

class BdForum extends Bd{
	private $tbIndexForum;
	private $tbMessagesForum;
	private $tbImageAssociation;
	private $tbCleAssociation;

	function __construct($user,$password,$databasename,$serveur){
		$this->tbIndexForum ="index_forum";
		$this->tbMessagesForum ="messages_forum";
		$this->tbImageAssociation ="imageassociation";
		$this->tbCleAssociation ="cleAssociation";
		$this->Bd($user,$password,$databasename,$serveur);
		parent::connect();
	}	
	
	/* 
	 * Retourne la liste des thème du forum
	 * Retourne un tableau  de thème (idTheme,nomTheme,descTheme,nbSujets,dateLastResp)
	 */
	function listerThemes(){
		$requete = 'SELECT t.id as idTheme,t.nom_forum as nomTheme, t.description as descTheme, '.
					'm1.no_suj as noSujet, max(m2.date_message) as dateLastResp '.
					'FROM '.$this->tbIndexForum.' t '.
					'LEFT JOIN '.$this->tbMessagesForum.' m1 ON m1.no_forum = t.id and m1.rplya=0 '.
					'LEFT JOIN '.$this->tbMessagesForum.' m2 ON (m1.no_suj = m2.rplya and m2.no_suj=0 and m2.no_forum = 0) or m2.no_suj=m1.no_suj '.
					'WHERE t.id>0 '.
					'GROUP BY m1.no_suj, t.id '.
					'ORDER BY idTheme';
		$result = $this->querySelect($requete);
		$tableau = array();
		foreach($result as $ligne) {
			if(!isset($tableau[$ligne['idTheme']])) {
				$tableau[$ligne['idTheme']] = array(
					"idTheme" => $ligne['idTheme'],
					"nomTheme" => $ligne['nomTheme'],
					"descTheme" => $ligne['descTheme'],
					"nbSujets" => isset($ligne['noSujet'])?1:0,
					"dateLastResp" => isset($ligne['noSujet'])?$ligne['dateLastResp']:null
				);
			} else {
				$row = $tableau[$ligne['idTheme']];
				if($ligne['dateLastResp']!=null && ($row["dateLastResp"]==null || $row["dateLastResp"]<$ligne['dateLastResp'])) {
					$tableau[$ligne['idTheme']]["dateLastResp"] = $ligne['dateLastResp'];
				}
				$tableau[$ligne['idTheme']]["nbSujets"]++;
			}
		}
		return $tableau;
	}
	
	/* 
	 * Retourne la liste des sujet pour un thème donné
	 * Retourne un tableau d'objet (idSujet,nomSujet,nomAuteur,nbResp,dateDernier)
	 */
	function listerSujets($idTheme){
		$requete = 'SELECT m1.no_suj as idSujet,m1.titre as nomSujet, m1.pseudo as nomAuteur, '.
					'count(m2.id)-1 as nbResp, max(m2.date_message) as dateLastResp '.
					'FROM '.$this->tbMessagesForum.' m1 '.
					'LEFT JOIN '.$this->tbMessagesForum.' m2 ON (m1.no_suj = m2.rplya and m2.no_suj=0 and m2.no_forum = 0) or (m2.no_suj = m1.no_suj) '.
					'WHERE m1.no_forum='.$idTheme.' and m1.rplya=0 '.
					'GROUP BY m1.no_suj '.
					'ORDER BY dateLastResp DESC';
					
		return $this->querySelect($requete);
	}
	
	/*
	 * Retourne la liste des message d'un sujet
	 */
	function listerMessages($idSujet){
		$requete = 'SELECT m1.no_suj, m1.id, m1.titre, m1.pseudo, m1.date_message, m1.message, m1.mail, m1.no_forum '.
					'FROM '.$this->tbMessagesForum.' m1 '.
					'WHERE m1.no_suj='.$idSujet.' or m1.rplya='.$idSujet.' '.
					'ORDER BY date_message';
					
		return $this->querySelect($requete);
	}
	
	/*
	 * Retourne le nom d'un thème pour un id
	 */
	function nomTheme($idTheme){
		$requete = "SELECT nom_forum as nomTheme FROM ".$this->tbIndexForum." WHERE id=$idTheme";
		$result = $this->querySelect($requete);
		$ligne = $result[0];
		if(isset($ligne) && isset($ligne['nomTheme'])){
			return $ligne['nomTheme'];
		} else {
			return "";
		}
	}
	
	/*
	 * Retourne le no du sujet maximum pour un thème donné
	 */
	function noMaxSujet(){
		$requete = "SELECT MAX(no_suj) as maxSuj FROM ".$this->tbMessagesForum." WHERE no_suj!='0'";
		$result = $this->querySelect($requete);
		$ligne = $result[0];
		if(isset($ligne) && isset($ligne['maxSuj'])){
			return $ligne['maxSuj'];
		} else {
			return 0;
		}
	}
	
	function verifCle($cle,$entree) {
		$entree = strtoupper($entree);
		$result = $this->querySelect("SELECT image FROM ".$this->tbCleAssociation." WHERE imagecle='$cle'");
		$ligne = $result[0];
		if(isset($ligne) && isset($ligne['image']) && $ligne['image'] == $entree){
			$this->queryUpdate("DELETE FROM ".$this->tbCleAssociation." WHERE imagecle='$cle'");
			return true;
		}
		return false;
	}
	
	function getmail($idMsg){
		$result = $this->querySelect("SELECT mail FROM ".$this->tbMessagesForum." WHERE `id`=$idMsg");
		$ligne = $result[0];
		if(isset($ligne) && isset($ligne['mail'])){
			return $ligne['mail'];
		}
		return "";
	}
	
	function ajouterCleValeur($cle, $valeur){
		$this->queryUpdate("DELETE FROM ".$this->tbCleAssociation." WHERE imagecle='$cle'");
	
		$date = time();
		$this->queryUpdate("INSERT INTO ".$this->tbCleAssociation." ( `imagecle` , `image` , `date` ) VALUES ('$cle', '$valeur' , '$date');");
		
		$date2 = time()-3600;

		$this->queryUpdate("DELETE FROM ".$this->tbCleAssociation." WHERE date<'$date2'");
	}
	
	function ajouterMessage($no_sujet,$idSujet,$idTheme,$titre,$nom,$mail,$message){
		$jour = date("d");
		$mois = date("m");
		$annee = date("Y");
		$date = $annee.'-'.$mois.'-'.$jour;
		$this->queryUpdate("INSERT INTO ".$this->tbMessagesForum." VALUES('', '$no_sujet', '$idSujet', '$idTheme', '$date', '$titre', '$nom', '$mail', '$message')");
	}
	
	function supprimerReponse($no_reponse) {
		$this->queryUpdate("UPDATE ".$this->tbMessagesForum." SET rplya='-1' WHERE id='".$no_reponse."';");
	}
}
?>
