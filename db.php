<?php 
$mysql_database = "agloan";
$connect = mysql_connect("himaligov.accountsupportmysql.com","agloan","nirdosh123") or die("Sorry!!!Could not connect database");
mysql_select_db($mysql_database) or die("Could not select database");
?>