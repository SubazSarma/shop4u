<?php
/* Database Connection */
$sDbHost = 'localhost';
$sDbName = 'bk-store';
$sDbUser = 'root';
$sDbPwd = '';
$dbConn = mysql_connect ($sDbHost, $sDbUser, $sDbPwd) or die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($sDbName,$dbConn) or die('Cannot select database. ' . mysql_error());
?>
