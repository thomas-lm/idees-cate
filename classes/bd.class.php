<?php
/*
 *	Classe pour se connecter a une base de donnée.
 */
 
class Bd {
	private $bdUser;
	private $bdPassWord;
	private $bdDataBase;
	private $bdServeur;
	protected $connexion;

	function Bd($user,$password,$databasename,$serveur){
		$this->bdUser = $user;
		$this->bdPassWord = $password;
		$this->bdDataBase = $databasename;
		$this->bdServeur = $serveur;
	}
		
	/*
	 * Se connecte à la base de donnée
	 */
	protected function connect(){	
		try{
			$this->connexion = mysql_connect($this->bdServeur, $this->bdUser, $this->bdPassWord); 
			mysql_select_db($this->bdDataBase,$this->connexion);
		} catch ( Exception $e ) {
			echo "Connection à MySQL impossible: ", $e->getMessage();
			die();
		}
	}
	
	protected function queryUpdate($requete){
		$result = mysql_query($requete) or die('Erreur SQL !<br>'.mysql_error()); 
	}
	
	protected function querySelect($requete){
		$tabReturn = array();
		$result = mysql_query($requete) or die('Erreur SQL !<br>'.mysql_error());
		$i=0;
		while($data = mysql_fetch_assoc($result)) 
		{
			$tabReturn[$i] = $data;
			$i++;
		}
		return $tabReturn;
	}
	
	/*
	 * Se déconnecte de la base de donnée
	 */
	function disconnect(){
		mysql_close();
	}
}
?>
