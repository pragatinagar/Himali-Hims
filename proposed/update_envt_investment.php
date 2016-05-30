<?php
include '../db.php';
$id = $_POST['id'];
$select = $_POST['select'];
//echo '<pre>'; var_dump($_POST);die;
foreach( $id as $key => $value )
{
	if($select[$key] != '')
  { 
    $sql = "UPDATE `investment` SET `environmental` = '".$select[$key]."' WHERE `id` = ".$id[$key];
	mysql_query($sql);
  }
	
}
//die;
header("Location:../acc_environment.php");


?>