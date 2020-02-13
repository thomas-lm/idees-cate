<?php

session_start();
$_SESSION['isAdminFormLogin'] = true;

include "forum_bd.php";
connecte();
if (isset($_POST['idTheme'])) $id = $_POST['idTheme'];
else $id=0;

function listeTheme($idTheme,$nomForm) {
	$liste = listeCategorie();
	$rtrn = "<SELECT name = \"$nomForm\">";
	if ($liste!=null)
	foreach ($liste as $row)
	{
		$sel ="";
		if ($idTheme == $row['id']) $sel = "selected";
		$rtrn .= "<option $sel value=\"".$row['id']."\">".$row['nom_forum']."</option>";
	}
	$rtrn .= "</SELECT>";
	return $rtrn;
}

function listeSuj($idTheme,$nomform,$noSujet=0)
{
	$liste = listeSujet($idTheme);
	$rtrn = "<SELECT name = \"$nomform\">";
	if ($noSujet!=0) $rtrn .="<option value=\"-1\">Corbeille</option>";
	
	if ($liste!=null)
	foreach ($liste as $row)
	{
		$sel ="";
		if ($noSujet == $row['no_suj']) $sel = "selected";
		$rtrn .= "<option $sel value=\"".$row['no_suj']."\">".$row['no_suj']."-".$row['titre']."</option>";
	}
	$rtrn .= "</SELECT>";
	return $rtrn;
}

function listeMsg($idSuj,$nomform)
{
	$liste = listeReponse($idSuj);
	$rtrn = "<SELECT name = \"$nomform\">";
	if ($liste!=null)
	foreach ($liste as $row)
	{
		$rtrn .= "<option value=\"".$row['id']."\">".$row['id']."-".$row['titre']."</option>";
	}
	$rtrn .= "</SELECT>";
	return $rtrn;
}

?>
<p style="text-align : center;font-size : 24pt">Administration du forum</p>
<center><form action="backup.php" type="post"><input type="submit" value="Créer une sauvegarde du forum" /></form></center>
<form method="POST" action="./index.php"><p style="text-align : center;">Selection du thème :<?php echo listeTheme($id,"idTheme"); ?><input type="submit" value="Selectionner" /></p></form>
<?php
if (isset($_POST['idTheme']))
{
	$idTheme = $_POST['idTheme'];
	if (isset($_POST['nomTheme']))
	{
		sendQuery("UPDATE index_forum SET nom_forum ='".$_POST['nomTheme']."',description='".$_POST['descTheme']."' WHERE id='$idTheme'");
		echo "<p style=\"color : #0F0;text-align : center;\">Modifications prisent en compte !</p>";
	}
	?>
	<div style=" padding : 10px;width : 400px; border : 1px solid black; margin : auto;">
	<form method="POST" action="./index.php">
		<p style ="text-align : center; font-size : 14pt; font-weight : bold;font-decoration : underline;">Modifier : <?php echo nomCat($idTheme);?></p>
		<p>Nouveau nom : <input type="text" maxlenght="30" size="30" name="nomTheme" value="<?php echo nomCat($idTheme);?>" /></p>
		<p>Description : <input type="text" maxlenght="250" size="50" name="descTheme" value="<?php echo descCat($idTheme);?>" /></p>
		<input type="hidden" name="idTheme" value="<?php echo $idTheme;?>" />
		<p align="center"><input type="submit" value="Modifier" /></p>
	</form>
	</div>
	<br>
	<?php
	if (isset($_POST['idSujet']))
	{
		$titre = $_POST['titre'];
		if ($titre != "")
		{
			sendQuery("UPDATE messages_forum SET titre ='".$titre."',no_forum='".$_POST['idnouvTheme']."' WHERE no_suj='".$_POST['idSujet']."'");
		}
		else
		{
			sendQuery("UPDATE messages_forum SET no_forum='".$_POST['idnouvTheme']."' WHERE no_suj='".$_POST['idSujet']."'");
		}
		echo "<p style=\"color : #0F0;text-align : center;\">Modifications prisent en compte !</p>";
	}
	
	if (isset($_POST['idQuestion']))
	{
		sendQuery("UPDATE messages_forum SET rplya='".$_POST['idNvSujetQuestion']."' WHERE id='".$_POST['idQuestion']."'");
		echo "<p style=\"color : #0F0;text-align : center;\">Modifications prisent en compte !</p>";
	}
	?>
	<div style="width : 400px;padding : 10px; border : 1px solid black; margin : auto;">
	<form method="POST" action="./index.php">
		<p style ="text-align : center; font-size : 14pt; font-weight : bold;font-decoration : underline;">Modifier un sujet</p>
		<p>Sujet à modifier :<?php echo listeSuj($idTheme,"idSujet"); ?></p>
		<p>Nouveau nom (laisser vide si inchangé) : <input type="text" maxlenght="30" size="30" name="titre" /></p>
		<p>Changer le thème :<?php echo listeTheme($idTheme,"idnouvTheme"); ?></p>
		<input type="hidden" name="idTheme" value="<?php echo $idTheme;?>" />
		<p align="center"><input type="submit" value="Modifier" /></form></p>	
	</div>
	<?php
	?>
	<div style="width : 400px;padding : 10px; border : 1px solid black; margin : auto;">
	<form method="POST" action="./index.php">
		<p style ="text-align : center; font-size : 14pt; font-weight : bold;font-decoration : underline;">Modifier une question</p>
		<p>Selectionner un sujet :<?php echo listeSuj($idTheme,"idSujetQuestion"); ?><input type="submit" value="Selectionner" /></p>
		<input type="hidden" name="idTheme" value="<?php echo $idTheme;?>" />
	</form>	
	<?php
	if(isset($_POST['idSujetQuestion'])){
	?>
	<form method="POST" action="./index.php">
		<p>selectionner un message :<?php echo listeMsg($_POST['idSujetQuestion'],"idQuestion"); ?></p>
		<p>Changer de sujet :<?php echo listeSuj($_POST['idTheme'],"idNvSujetQuestion",$_POST['idSujetQuestion']); ?></p>
		<input type="hidden" name="idTheme" value="<?php echo $idTheme;?>" />
		<p align="cenetr"><input type="submit" value="Appliquer" /></p>
		
	</form>
	<?php	
	}
	?>
	</p>	
	</div>
	<?php
}

closeConnection();
?>