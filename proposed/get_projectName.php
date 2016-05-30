<?php 

//error_reporting(0);
 $project_code = $_GET['id'];

include '../db.php';
 $val = "select name_add_proponent,responsible_person from projectdetail where project_code = '$project_code'";
 $qry = mysql_query($val);
$thisForpagination = 'yes';
while($data5 = mysql_fetch_array($qry))
{
	echo '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;">'.$data5[0].'</span>';
	echo '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;">'.$data5[1].'</span>'; 
}



?>
