
<?php session_start();
ob_start();
?>

<?php
	include("get_projectList.php");
	if(isset($_SESSION['id2']))
		{
	$project_code = $_POST['projectid'];
	$userId = $_SESSION['id'];
				
			//	echo "<pre>";var_dump($_POST);
	$sn_byUser = $_POST['sn_byUser'];   
	$detail = $_POST['detail']; 
	 $select_sector = $_POST['select_sector']; 
	 $select_types = $_POST['select_types']; 
	 $select_env = $_POST['select_env']; 
	 $unit = $_POST['unit']; 
	$quality = $_POST['quality']; 
	$price_perUnit = $_POST['price_perUnit']; 
	$grant = $_POST['grant']; 
	$proponent = $_POST['proponent']; 
	
	foreach($detail as $a=>$b)
	{ 
		$insert_seasonal = "INSERT INTO `investment` (`userId`,`sn_byUser`, `project_code`, `detail`, `sector`, `environmental`, `types`, `unit`, `quality`, `per_unit`, `grant_contribution`, `Proponent_contribution`) VALUES ('$userId','$sn_byUser[$a]', '$project_code', '$detail[$a]', '$select_sector[$a]', '$select_env[$a]', '$select_types[$a]', '$unit[$a]', '$quality[$a]', '$price_perUnit[$a]', '$grant[$a]', '$proponent[$a]');";
		mysql_query($insert_seasonal);
	} 
	
	if($_SERVER['HTTP_HOST'] == 'localhost')
			{
		header("Location:investment.php");	
			}
	else
	 {
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/investment.php\")";
	echo "</script>";
	 }
	

	//header("Location: operate_exp.php");
	//exit();
	//header("Location:http://himali.gov.np/hims/investment.php");

		}
		else header('Location:index.php');

?>