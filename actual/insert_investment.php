<?php
 
 session_start();
 
 include("../db.php");

$project_code = $_POST['projectid'];

$userId = $_SESSION['id'];

$visitdate = $_POST['visitdate'];$reportdate= $_POST['reportdate'];$source = $_POST['source'];

 $sn_byUser = $_POST['sn_byUser'];  $reim = $_POST['reim123'];$status = $_POST['status'];

$remaining_pc = $_POST['remaining_pc'];$remaining_quantity = $_POST['remaining_quantity'];$remaining_price = $_POST['remaining_price'];$remaining_gc = $_POST['remaining_gc'];

$claim_quantity = $_POST['claim_quantity'];$claim_price = $_POST['claim_price'];$claim_gc = $_POST['claim_gc'];$claim_pc = $_POST['claim_pc'];

$grant_quantity = $_POST['grant_quantity'];$grant_price = $_POST['grant_price'];$grant_gc = $_POST['grant_gc'];$grant_pc = $_POST['grant_pc'];

$balance_quantity = $_POST['balance_quantity'];$balance_price = $_POST['balance_price'];$balance_gc = $_POST['balance_gc'];$balance_pc = $_POST['balance_pc'];

$sql = "INSERT INTO `actual_investment` ";
$sql .= "(`project_code`,`userId` , `sn`,`visitdate`, `reportdate`, `source`, `r_quantity`, `r_price`, `r_gc`, `r_pc`, `claim_quantity`, `claim_price`, `claim_gc`, `claim_pc`, `grant_quantity`,";
$sql .= " `grant_price`, `grant_gc`, `grant_pc`, `Reimbursement_quantity`, `balance_quantity`, `balance_price`, `balance_gc`, `balance_pc`, `status`) ";
$sql .= "VALUES ('$project_code',$userId , '$sn_byUser','$visitdate','$reportdate','$source' , '$remaining_quantity', '$remaining_price', '$remaining_gc', '$remaining_pc', '$claim_quantity', '$claim_price', '$claim_gc', '$claim_pc', ";
$sql .= "'$grant_quantity', '$grant_price', '$grant_gc', '$grant_pc', '$reim', '$balance_quantity', '$balance_price', '$balance_gc', '$balance_pc', '$status');";
//echo $sql;die;
	mysql_query($sql);
	
	if($_SERVER['HTTP_HOST'] == 'localhost')
			{
		header("Location:actual_investment.php");	
			}
	else
	 {
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/actual/actual_investment.php\")";
	echo "</script>"; }


?>