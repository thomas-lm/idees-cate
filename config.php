<?php
/* CONFIG PROD */
$urlBase = "http://www.idees-cate.com/";
$databaseUrl = "localhost";
$databaseUser= "######";
$databasePwd = "######";
$databaseName= "######";


/* CONFIG LOCAL *
$urlBase = "http://wwwlocal/idees-cate/";
$databaseUrl = "localhost";
$databaseUser= "root";
$databasePwd = "";
$databaseName= "idees_cate";
*/

$GLOBALS['urlBase'] = $urlBase;
$GLOBALS['actualUrl'] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>