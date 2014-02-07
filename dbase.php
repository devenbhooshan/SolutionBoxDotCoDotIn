<?php
$username = "";
$password = "";
$hostname = ""; 

$link = mysql_connect($hostname, $username, $password);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('ignus', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>