<?php 
 $project_code = $_GET['id'];

 include 'db.php';
 $val = "select name_add_proponent,responsible_person,agreement_date_ad,enterprises from projectdetail where project_code = '$project_code'";
 $qry = mysql_query($val);
 $thisForpagination = 'yes';
while($data5 = mysql_fetch_array($qry))
  { 
	$abc = '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;">'.$data5[0].'</span>';
	$abc .= '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;">'.$data5[1].'</span>'; 	
  }

	$sql = "select * from investment where project_code = '$project_code'";
	$result = mysql_query($sql);
	 $cnt=0;
	while($x1 = mysql_fetch_array($result))
	{
		$sn[$cnt] = $x1['sn_byUser'];
		$detail[$cnt] = $x1['detail'];
		$sector[$cnt] = $x1['sector'];
		$unit[$cnt] = $x1['unit']; 		
		$quality[$cnt] = $x1['quality'];
		$per_unit[$cnt] = $x1['per_unit'];
		$grant_contribution[$cnt] = $x1['grant_contribution']; 		
		$Proponent_contribution[$cnt] = $x1['Proponent_contribution'];  
		$cnt++;
	 }

	
	echo json_encode(array(
		'sn' => $sn,
		'a' => $detail,
		'b' => $sector,
		'c' => $unit,		
		'quality' => $quality,
		'per_unit' => $per_unit,
		'grant_contribution' => $grant_contribution,
		'Proponent_contribution' => $Proponent_contribution,		
		'project' => $abc
		));
			
?>