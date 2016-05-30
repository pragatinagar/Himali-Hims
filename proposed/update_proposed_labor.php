<?php
session_start();
include("../db.php");

 $id = $_POST['hiddenId'];
 $sql = "select * from labor where id = "."$id";
 $result2 = mysql_query($sql);
 while($data = mysql_fetch_array($result2)){ 
  $detail = $data['detail']; 
  $unit = $data['unit'];
  $type = $data['type']; 
  $sex = $data['sex'];
  $caste = $data['caste'];
  $local = $data['local']; 
  $sn_byUser = $data['sn_byUser']; 
  $y1 = $data['y1'];$y2 = $data['y2'];$y3 = $data['y3'];$y4 = $data['y4'];$y5 = $data['y5'];
  $y6 = $data['y6'];$y7 = $data['y7'];$y8 = $data['y8'];$y9 = $data['y9'];$y10 = $data['y10'];
  $total1 = $data['total1'];$total2 = $data['total2'];$total3 = $data['total3'];$total4 = $data['total4'];$total5 = $data['total5'];
	 }
	 
	 
 if($_POST['detail'] == "") $detail = $detail;
 else $detail = $_POST['detail'];
 
 if($_POST['unit'] == "") $unit = $unit;
 else $unit = $_POST['unit'];
 
  if($_POST['type'] == "") $type = $type;
 else $type = $_POST['type'];
 
 if($_POST['sex'] == "") $sex = $sex;
 else $sex = $_POST['sex'];

 if($_POST['caste'] == "") $caste = $caste;
 else $caste = $_POST['caste'];
 
 if($_POST['local'] == "") $local = $local;
 else $local = $_POST['local'];

 if(isset($_POST['sn_byUser'])) $sn_byUser = $_POST['sn_byUser'];
 else $sn_byUser = $data['sn_byUser'];
 
 if(isset($_POST['y1'])) $y1 = $_POST['y1'];
 else $y1 = $data['y1'];

 if(isset($_POST['y2'])) $y2 = $_POST['y2'];
 else $y2 = $data['y2'];
 
  if(isset($_POST['y3'])) $y3 = $_POST['y3'];
 else $y3 = $data['y3'];
  
  if(isset($_POST['y4'])) $y4 = $_POST['y4'];
 else $y4 = $data['y4'];
 
 if(isset($_POST['y5'])) $y5 = $_POST['y5'];
 else $y5 = $data['y5'];
 
 if(isset($_POST['y6'])) $y6 = $_POST['y6'];
 else $y6 = $data['y6'];
 
  if(isset($_POST['y7'])) $y7 = $_POST['y7'];
 else $y7 = $data['y7'];
 
  if(isset($_POST['y8'])) $y8 = $_POST['y8'];
 else $y8 = $data['y8'];
 
  if(isset($_POST['y9'])) $y9 = $_POST['y9'];
 else $y9 = $data['y9'];
 
  if(isset($_POST['y10'])) $y10 = $_POST['y10'];
 else $y10 = $data['y10'];

  if(isset($_POST['total1'])) $total1 = $_POST['total1'];
 else $total1 = $data['total1'];

  if(isset($_POST['total2'])) $total2 = $_POST['total2'];
 else $total2 = $data['total2'];

  if(isset($_POST['total3'])) $total3 = $_POST['total3'];
 else $total3 = $data['total3'];
 
   if(isset($_POST['total4'])) $total4 = $_POST['total4'];
 else $total4 = $data['total4'];

  if(isset($_POST['total5'])) $total5 = $_POST['total5'];
 else $total5 = $data['total5'];
 

 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 
  $update = "UPDATE `labor` SET `detail` = '$detail', `unit` = '$unit', `sn_byUser` = '$sn_byUser', `type` = '$type',`sex` = '$sex',`caste` = '$caste',`local` = '$local',`y1` = '$y1', `y2` = '$y2', `y3` = '$y3', `y4` = '$y4', `y5` = '$y5', `y6` = '$y6', `y7` = '$y7', `y8` = '$y8', `y9` = '$y9', `y10` = '$y10', `total1` = '$total1', `total2` = '$total2', `total3` = '$total3', `total4` = '$total4', `total5` = '$total5' WHERE `id` = $id;";

 mysql_query($update);

 header("Location:show_proposed_labor.php");
 	echo "<script>"; 
	echo "window.location.assign(show_proposed_labor.php)";
	echo "</script>";
exit();

?>