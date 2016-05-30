
<?php session_start();
	  ob_start();
		include("get_projectList.php");
	
	if(isset($_SESSION['id'])){
	$project_code = $_POST['projectid'];
	$userId = $_SESSION['id2'];
	 $type = $_POST['type'];
	 $sn_byUser = $_POST['sn_byUser'];
	 $unit = $_POST['unit'];
	 $sex = $_POST['sex'];
	 $detail = $_POST['detail'];
	$caste = $_POST['caste'];
	$local = $_POST['local'];
 $agri_y1=$_POST["agri_y1"]; $agri_y2=$_POST["agri_y2"]; $agri_y3=$_POST["agri_y3"]; $agri_y4=$_POST["agri_y4"]; $agri_y5=$_POST["agri_y5"];
 $agri_y6=$_POST["agri_y6"]; $agri_y7=$_POST["agri_y7"]; $agri_y8=$_POST["agri_y8"]; $agri_y9=$_POST["agri_y9"]; $agri_y10=$_POST["agri_y10"];
 $total1=$_POST["rent_y6"];	$total2=$_POST["rent_y7"]; $total3=$_POST["rent_y8"]; $total4=$_POST["rent_y9"]; $total5=$_POST["rent_y10"]; 
	foreach($type as $a=>$b)
	{
		
	 $insert_regular = "INSERT INTO `labor` (`userId`,`project_code`, `sn_byUser`,`detail`,`unit`, `y1`, `y2`, `y3`, `y4`, `y5`, `y6`, `y7`, `y8`, `y9`, `y10`, `total1`, `total2`, `total3`, `total4`, `total5`,`type`, `sex`, `caste`, `local`) 
		VALUES ('$userId','$project_code', '$sn_byUser[$a]','$detail[$a]','$unit[$a]', '$agri_y1[$a]', '$agri_y2[$a]', '$agri_y3[$a]', '$agri_y4[$a]', '$agri_y5[$a]', '$agri_y6[$a]', '$agri_y7[$a]', '$agri_y8[$a]', '$agri_y9[$a]', '$agri_y10[$a]', '$total1[$a]', '$total2[$a]', '$total3[$a]', '$total4[$a]', '$total5[$a]', '$type[$a]', '$sex[$a]', '$caste[$a]', '$local[$a]');";
		mysql_query($insert_regular);}

	if( $_SERVER['HTTP_HOST'] == 'localhost') header('Location: investment.php');
	else{
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/investment.php\")";
	echo "</script>";}
	//header("Location:http://himali.gov.np/hims/investment.php");

	
			}

?>