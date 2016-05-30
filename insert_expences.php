<?php
	session_start();
	if(isset($_SESSION['id']))
	{ 
	//echo "<pre>";var_dump($_POST);die;
		if(isset($_POST['submit']) == 'Insert'){
	include("get_projectList.php");
	include("get_projectCode.php");
	$userId = $_SESSION['id2'];
	$project_code = $_POST['projectid'];
	
	$nameOfOther = $_POST['nameOfOther'];
	$agri_input=$_POST["agri_input"]; $agri_unit=$_POST["agri_unit"]; $agri_y1=$_POST["agri_y1"]; $agri_y2=$_POST["agri_y2"]; $agri_y3=$_POST["agri_y3"]; $agri_y4=$_POST["agri_y4"]; 		    $agri_y5=$_POST["agri_y5"];	$agri_y6=$_POST["agri_y6"]; $agri_y7=$_POST["agri_y7"]; $agri_y8=$_POST["agri_y8"]; $agri_y9=$_POST["agri_y9"]; $agri_y10=$_POST["agri_y10"];
			$total1=$_POST["rent_y6"];$total2=$_POST["rent_y7"];  $total3=$_POST["rent_y8"]; $total4=$_POST["rent_y9"]; $total5=$_POST["rent_y10"];
	
	foreach($agri_input as $a=>$b){ 
			
	 $insert_agri = "INSERT INTO `expenses` (`userId`,`project_code`, `detail`, `unit`,`nameOfOther`, `y1`, `y2`, `y3`, `y4`, `y5`, `y6`, `y7`, `y8`, `y9`, `y10`, `total1`, `total2`, `total3`, `total4`, `total5`) VALUES ('$userId', '$project_code', '$agri_input[$a]', '$agri_unit[$a]','$nameOfOther[$a]' , '$agri_y1[$a]', '$agri_y2[$a]', '$agri_y3[$a]', '$agri_y4[$a]', '$agri_y5[$a]', '$agri_y6[$a]', '$agri_y7[$a]', '$agri_y8[$a]', '$agri_y9[$a]', '$agri_y10[$a]', '$total1[$a]', '$total2[$a]', '$total3[$a]', '$total4[$a]', '$total5[$a]');"; 
	
	mysql_query($insert_agri) or die("Can't Insert agri");}
	
		//// Accepting the value of Marketing and Distribution and insert
 
	 header("Location: revenue.php");
		}
		else
		echo 'No data found';
		
	}

	
		
?>