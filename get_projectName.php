<?php 

error_reporting(0);
$project_code = $_GET['id'];
include 'db.php';

$qry = mysql_query("select name_add_proponent,responsible_person from projectdetail where project_code = '$project_code'");

while($data5 = mysql_fetch_array($qry))
{
	echo '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin:0 20px 20px 0;">'.$data5[0].'</span>';
	echo '<span style="padding:10px 20px; background:#FFE6CC; float:left;  margin:0 20px 20px 0;">'.$data5[1].'</span>'; 
	echo '<input type="hidden" id="agreementDate" name="agdate" value="<?php echo $data5[1] ?>" />';
}



?>