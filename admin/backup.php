<?php

function backuptble($table)
{
	$res = backup($table);
	/* création des liste s de clé */
	$liste = array_keys($res[0]);
	$liste2=null;
	$j=0;
	for ($i=1;$i<count($liste);$i+=2)
	{
		$liste2[$j]=$liste[$i];
		$j++;
	}

	$txt="";
	foreach($res as $row)
	{
		$val="";
		foreach($liste2 as $key)
		{
			$val.="'".$row[$key]."',";
		}
		$val=substr($val, 0, -1);
		$txt.="INSERT INTO `$table` VALUES($val);\n";
	}
	return $txt;
}

include "forum_bd.php";
connecte();

$tps=time();
$backupFile = 'backup/bak_'.$tps.'_idx.sql';
$backupFile2 = 'backup/bak_'.$tps.'_msg.sql';

$inF = fopen($backupFile,"w");
fwrite($inF,backuptble("index_forum"));
fclose($inF);

$inF = fopen($backupFile2,"w");
fwrite($inF,backuptble("messages_forum"));
fclose($inF);

echo "sauvegarde effectuees : <a href='$backupFile'>ici</a> et <a href='$backupFile2'>ici</a>.";
closeConnection();
?>