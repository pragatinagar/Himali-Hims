<?php
session_start();
include("../db.php");

 $id = $_POST['hiddenId'];
   $sql = "select * from revenue where id = "."$id";
 $result2 = mysql_query($sql);
 while($data = mysql_fetch_array($result2)){ 
   $detail = $data['detail']; 
   $unit = $data['unit'];
   $sn = $data['sn_byUser'];
   $product_type = $data['product_type'];
  $q1 = $data['q1'];$q2 = $data['q2'];$q3 = $data['q3'];$q4 = $data['q4'];$q5 = $data['q5'];
  $p1 = $data['p1'];$p2 = $data['p2'];$p3 = $data['p3'];$p4 = $data['p4'];$p5 = $data['p5'];
  $r1 = $data['r1'];$r2 = $data['r2'];$r3 = $data['r3'];$r4 = $data['r4'];$r5 = $data['r5'];
	 }
	 	 
 if($_POST['unit'] == "") $unit = $unit;
 else $unit = $_POST['unit'];
 
 if($_POST['product_type'] == "") $product_type = $product_type;
 else $product_type = $_POST['product_type'];
 
  if(isset($_POST['detail'])) $detail = $_POST['detail'];
 else $detail = $data['detail'];

 if(isset($_POST['sn_byUser'])) $sn_byUser = $_POST['sn_byUser'];
 else $sn_byUser = $data['sn_byUser'];
 
 if(isset($_POST['q1'])) $q1 = $_POST['q1'];
 else $q1 = $data['q1'];

 if(isset($_POST['q2'])) $q2 = $_POST['q2'];
 else $q2 = $data['q2'];
 
  if(isset($_POST['q3'])) $q3 = $_POST['q3'];
 else $q3 = $data['q3'];
  
  if(isset($_POST['q4'])) $q4 = $_POST['q4'];
 else $q4 = $data['q4'];
 
 if(isset($_POST['q5'])) $q5 = $_POST['q5'];
 else $q5 = $data['q5'];
 
 if(isset($_POST['p1'])) $p1 = $_POST['p1'];
 else $p1 = $data['p1'];
 
  if(isset($_POST['p2'])) $p2 = $_POST['p2'];
 else $p2 = $data['p2'];
 
  if(isset($_POST['p3'])) $p3 = $_POST['p3'];
 else $p3 = $data['p3'];
 
  if(isset($_POST['p4'])) $p4 = $_POST['p4'];
 else $p4 = $data['p4'];
 
  if(isset($_POST['p5'])) $p5 = $_POST['p5'];
 else $p5 = $data['p5'];

  if(isset($_POST['r1'])) $r1 = $_POST['r1'];
 else $r1 = $data['r1'];

  if(isset($_POST['r2'])) $r2 = $_POST['r2'];
 else $r2 = $data['r2'];

  if(isset($_POST['r3'])) $r3 = $_POST['r3'];
 else $r3 = $data['r3'];
 
   if(isset($_POST['r4'])) $r4 = $_POST['r4'];
 else $r4 = $data['r4'];

  if(isset($_POST['r5'])) $r5 = $_POST['r5'];
 else $r5 = $data['r5'];
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
  $update = "UPDATE `revenue` SET `sn_byUser` = '$sn', `product_type` = 'product_type', `detail` = '$detail', `unit` = '$unit', `q1` = '$q1', `q2` = '$q2', `q3` = '$q3', `q4` = '$q4', `q5` = '$q5', `p1` = '$p1', `p2` = '$p2', `p3` = '$p3', `p4` = '$p4', `p5` = '$p5', `r1` = '$r1', `r2` = '$r2', `r3` = '$r3', `r4` = '$r4', `r5` = '$r5' WHERE `id` = $id;";

 	mysql_query($update);
	header("Location:show_proposed_revenue.php");
 	echo "<script>"; 
	echo "window.location.assign(show_proposed_revenue.php)";
	echo "</script>";
	exit();

?>