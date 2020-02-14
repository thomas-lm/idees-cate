<?php
function connecte()
{
	mysql_connect("localhost", "####", "####");
	mysql_select_db("####");
}

function closeConnection()
{
	mysql_close();
}
function sendQuery($req)
{
	//Requete Mysql
	$reponse = mysql_query($req);
	//transformation en tableau
	return $reponse;
}

/******** partie liste de cat�gorie *******/

// Fait la liste de toutes les cat�gorie.
//$type 1 : nouveau sujet
//$type 2 : reponse
function listeCategorie()
{
	$requete = "SELECT * FROM `index_forum` ORDER BY `id`";
	$i=0;
	$tableau = NULL;
	$reponse = sendQuery($requete);
	while ($row = mysql_fetch_array($reponse))
	{
	   $tableau[$i] = $row;
	   $i++;
	}
	return $tableau;
}

//Retourne le nom de la cat�gorie.
function nomCat($idCat)
{
	$requete = "SELECT * FROM `index_forum` WHERE id=$idCat";
	$reponse = sendQuery($requete);
	$res = mysql_fetch_array($reponse);
	return $res['nom_forum'];
}
//Retourne la description de la cat�gorie.
function descCat($idCat)
{
	$requete = "SELECT * FROM `index_forum` WHERE id=$idCat";
	$reponse = sendQuery($requete);
	$res = mysql_fetch_array($reponse);
	return $res['description'];
}



/********* Partie liste des sujets **********/

// fait la liste des sujets pour une cat�gorie
function listeSujet($idCat)
{
	$requete = "SELECT * FROM `messages_forum` WHERE `rplya`=0 and `no_forum`=$idCat ORDER BY `no_suj`";
	$i=0;
	$tableau = NULL;
	$reponse = sendQuery($requete);
	while ($row = mysql_fetch_array($reponse))
	{
	   $tableau[$i] = $row;
	   $i++;
	}
	return $tableau;
}
/********** Partie liste des Reponse **********/

function  listeReponse($idSuj)
{
	$requete = "SELECT * FROM `messages_forum` WHERE `rplya`=$idSuj";
	$i=0;
	$tableau = NULL;
	$reponse = sendQuery($requete);
	while ($row = mysql_fetch_array($reponse))
	{
	   $tableau[$i] = $row;
	   $i++;
	}
	return $tableau;
}

// fait la liste des r�ponses concernant un sujet. class� par date
function listeMessage($noSuj)
{
	$requete = "SELECT * FROM `messages_forum` WHERE `no_suj`=$noSuj";
	$tableau = NULL;
	$reponse = sendQuery($requete);
	$row = mysql_fetch_array($reponse);
	$i=0;
	$tableau[$i] = $row;
	$requete = "SELECT * FROM `messages_forum` WHERE `rplya`=$noSuj ORDER BY `date_message` ASC";
	$i=1;
	$reponse = sendQuery($requete);
	while ($row = mysql_fetch_array($reponse))
	{
	   $tableau[$i] = $row;
	   $i++;
	}
	return $tableau;
}

/***** BACKUP *******/
function backup($table)
{
	$requete = "SELECT * FROM `$table`";
	$i=0;
	$tableau = NULL;
	$reponse = sendQuery($requete);
	while ($row = mysql_fetch_array($reponse))
	{
	   $tableau[$i] = $row;
	   $i++;
	}
	return $tableau;
}
?>