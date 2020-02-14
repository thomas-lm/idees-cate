<?php
/*
 *	Classe utilitaire
 */
 
class Utils {

	function Utils(){}
			 
	function filtrerHTML($str){
	   $sh = array('&', "'",'"','<','>',"\n");
	   $rp = array('&amp;', "&#39;",'&quot;','&lt;','&gt;','<br>');
	   return utf8_decode(str_replace($sh,$rp,$str));
	}
	
	public function filtrerTEXTE($str){
	   $sh = array("'","\n","<script","</script","[rtrn]","[u]","[/u]","[b]","[/b]","[i]","[/i]");
	   $rp = array("&#39;",'<br>',"<p","</p","<br>","<u>","</u>","<b>","</b>","<i>","</i>");
	   return str_replace($sh,$rp,$str);
	}
	
	public function genRandomString($nb = 15){
		$c= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		$str="";
		srand((double)microtime()*1000000);
		for($i=0; $i<$nb; $i++)
		{
			$str.= $c[rand()%strlen($c)];
		}
		return $str;
	}
	
	public function afficherDate($date) {
		$jour = substr($date,-2);
		$mois = substr($date,5,2);
		$annee = substr($date,0,4);
		switch ($mois)
		{
			case "01":
				return "le $jour janvier $annee";
			case "02":
				return "le $jour f&eacute;vrier $annee";
			case "03":
				return "le $jour mars $annee";
			case "04":
				return "le $jour avril $annee";
			case "05":
				return "le $jour mai $annee";
			case "06":
				return "le $jour juin $annee";
			case "07":
				return "le $jour juillet $annee";
			case "08":
				return "le $jour août $annee";
			case "09":
				return "le $jour septembre $annee";
			case "10":
				return "le $jour octobre $annee";
			case "11":
				return "le $jour novembre $annee";
			case "12":
				return "le $jour d&eacute;cembre $annee";		
		}
	}
	
	public function verifCapcha($gcapcha) {
		$url = "https://www.google.com/recaptcha/api/siteverify".
		"?secret=#########&response=".
		$gcapcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
 
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_TIMEOUT, 15);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, TRUE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, TRUE); 
		$curlData = curl_exec($curl);

		curl_close($curl);

		$res = json_decode($curlData, TRUE);
		if($res['success'] != 'true') 	
			return false;
		else 
			return true;
	}
}
?>
