<?php
include_once("data.inc.php");

$link = mysql_connect($host, $user, $pass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db($dbName, $link);
if (!$db_selected) {
    die ('Can\'t use SISTEMA : ' . mysql_error());
}

mysql_set_charset('utf8', $link);

	$result = mysql_query("SELECT ID FROM `sistema`.`registracija` WHERE Starts != '0'", $link);
	$num_rows = mysql_num_rows($result);
	echo "Startējuši: " . $num_rows;

mysql_close($link);
?>