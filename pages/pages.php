<?php
switch ($page) {
   case "bienvenue":
      include("content/bienvenue.php");
      break;
	case "accueil":
      include("content/accueil.php");
      break;
	case "search":
	case "recherche":
      include("content/search.php");
      break;
	case "contact":
	case "mail":
      include("content/contact.php");
      break;
	case "le_cate":
	case "cate":
      include("content/le_cate.php");
      break;
	case "chants":
      include("content/chants.php");
      break;
	case "prieres":
      include("content/prieres.php");
      break;
	case "images":
      include("content/images.php");
      break;
	case "bricolages":
      include("content/bricolages.php");
      break;
	case "eveil_a_la_foi":
	case "eveilalafoi":
      include("content/eveil_a_la_foi.php");
      break;
	case "celebrations":
	case "ideescelebrations":
      include("content/celebrations.php");
      break;
	case "nouveautes":
      include("content/nouveautes.php");
      break;
	case "forum":
      include("content/forum.php");
      break;
   case "cookie":
      include("content/cookie.php");
      break;
   default:
      include("content/404.php");
}
?>
