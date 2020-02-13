<?php 
require_once("classes/bdForum.class.php");
require_once("classes/utils.class.php");
$utils = new Utils();
$bddForum = new BdForum($databaseUser,$databasePwd,$databaseName,$databaseUrl);

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$texte = generateRandomString(5);

//-----fin génération d'une clé ------

$largeur = 60;
$hauteur = 15;
$image = imagecreate($largeur, $hauteur);
$rnd = rand(0, 4);
$fond = imagecolorallocate($image, 255,255,255);
$couleurTexte = imagecolorallocate($image, 0, 0, 0); // blanc
imagestring($image, 5, 0, 0, $texte , $couleurTexte);
$cle = $_GET['capcha'];
$bddForum->ajouterCleValeur($cle,$texte);
$bddForum->disconnect();

header("Content-type: image/jpg");
imagejpeg($image);
imagedestroy($image);

?>