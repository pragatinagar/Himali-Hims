<?php 
include '../db.php';
$delete = "DELETE FROM ".$_GET['table']." WHERE `id` = ".$_GET['pid'];
mysql_query($delete);
header("Location: ".$_GET['page'].".php"); 
?>

