<?php
session_start();
include("../db.php");

 $id = $_POST['hiddenId'];
 $sql = "select * from investment where id = "."$id";
 $result2 = mysql_query($sql);
 while($data = mysql_fetch_array($result2)){ 
 $sn = $data['sn_byUser'];
 $detail = $data['detail']; 
 $select_sector = $data['sector'];
 $unit = $data['unit'];
 $per_unit = $data['per_unit'];
 $quality = $data['quality'];
 $grant = $data['grant_contribution'];
 $proponent = $data['Proponent_contribution'];
  
	 }
	 	 
 if($_POST['unit'] == "") $unit = $unit;
 else $unit = $_POST['unit'];
 
 if($_POST['select_sector'] == "") $select_sector = $select_sector;
 else $select_sector = $_POST['select_sector'];
 
$sn = $_POST['sn_byUser'];
$detail = $_POST['detail'];
$per_unit = $_POST['per_unit'];
$quality = $_POST['quality'];
$grant = $_POST['grant'];
$proponent = $_POST['proponent'];

 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



 
 $update = "UPDATE `investment` SET `sn_byUser` = '$sn', `quality` = '$quality', `detail` = '$detail', `unit` = '$unit', `sector` = '$select_sector', `Proponent_contribution` = '$proponent', `per_unit` = '$per_unit', `grant_contribution` = '$grant' WHERE `id` = $id;";

 mysql_query($update);

 header("Location:show_proposed_investment.php");
 	echo "<script>"; 
	echo "window.location.assign(show_proposed_investment.php)";
	echo "</script>";
exit();

?>