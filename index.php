<?php
include("config.php");

session_start();
$isAdmin = false;
if($_SESSION['isAdminFormLogin'] == true) {
	$isAdmin = true;
}

if(isset($_GET["redirect"])) {
	header("Status: 301 Moved Permanently"); 
	header("Location:".$urlBase.$_GET["redirect"]); 
}

/* Traitement des anciens urls avec un redirect 301 */
if(isset($_GET["page"])) {
	include("pages/oldpage.php");
	$page = "404";
	include("pages/header.php");
	include("pages/body.php");
} else {
	/* traitement des nouveaux url */
	if(isset($_GET["print"])){
		include("pages/printimage.php");
	} else if(isset($_GET["capcha"])){
		include("utils/capcha.php");
	} else if(isset($_GET["mailForum"])){
		include("utils/mail.php");
	} else {
		$page="bienvenue";
		if(isset($_GET["pn"])){
			$page = $_GET["pn"];
		}
		include("pages/header.php");
		include("pages/body.php");
	}
}
?>