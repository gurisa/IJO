<?php
$username = "root";
$password = "";
$database = "gurisa_ijo";
mysql_connect("localhost",$username,$password) or die (mysql_error());
mysql_select_db($database) or die (mysql_error());
?>
