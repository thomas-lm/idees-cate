<?php
$oldPage = $_GET["page"];
	switch ($oldPage) {
		case "bienvenue":
		case "accueil":
		case "search":
		case "contact":
		case "le_cate":
		case "chants":
		case "prieres":
		case "images":
		case "bricolages":
		case "eveil_a_la_foi":
		case "celebrations":
		case "nouveautes":
		case "forum":			
			break;
		case "eveilalafoi": //old
			$oldPage = "eveil_a_la_foi";
			break;
		case "cate": // old
			$oldPage = "le_cate";
			break;
		case "ideescelebrations": //old
			$oldPage = "celebrations";
			break;
		case "mail": // old
			$oldPage = "contact";
			break;
		case "recherche": // old
			$oldPage = "search";
			break;
		default:
			$oldPage = "";
	}
	if($oldPage != ""){
		$oldSeance = "";
		if(isset($_GET["seance"])) {
			$oldSeance = "/".$_GET["seance"];
		}
		header("Status: 301 Moved Permanently", false, 301);
		header("Location: $urlBase$oldPage$oldSeance.html");
		exit();
	}	
?>