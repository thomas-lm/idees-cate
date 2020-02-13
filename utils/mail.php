<?php
require_once("classes/bdForum.class.php");
require_once("classes/utils.class.php");
$utils = new Utils();
$bddForum = new BdForum($databaseUser,$databasePwd,$databaseName,$databaseUrl);
$mail = $bddForum->getmail(addslashes($_GET['mailForum']));
$bddForum->disconnect();
$texte = "";
if(isset($mail) && $mail != ""){
	$texte="email : $mail";
}
$largeur = 400;
$hauteur = 20;
$image = imagecreate($largeur, $hauteur);

$fond = imagecolorallocate($image, 255,255,255);
$couleurTexte = imagecolorallocate($image, 125, 125, 125); // Noir

imagestring($image, 6, 0, 0, $texte , $couleurTexte);
header("Content-type: image/jpg");
imagejpeg($image);
imagedestroy($image);
?>