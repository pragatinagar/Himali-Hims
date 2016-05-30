<?php
 session_start();
include("../db.php");
$userId = $_SESSION['id'];
$project = $_POST['projectid']; $visitdate = $_POST['visitdate'];$reportdate = $_POST['reportdate'];$source = $_POST['source'];

$sn = $_POST['sn'];$detail = $_POST['detail'];$select = $_POST['select'];$unit = $_POST['unit'];

$quantity = $_POST['quantity'];$local_quantity = $_POST['local_quantity'];$local_price = $_POST['local_price'];$local_revenue = $_POST['local_revenue'];

$traders_quantity = $_POST['traders_quantity'];$traders_price = $_POST['traders_price'];$traders_revenue = $_POST['traders_revenue'];$beyond_quantity = $_POST['beyond_quantity'];

$beyond_price = $_POST['beyond_price'];$beyond_revenue = $_POST['beyond_revenue'];$others_quantity = $_POST['others_quantity'];$others_price = $_POST['others_price'];

$others_revenue = $_POST['others_revenue'];

 foreach($detail as $a=>$b)
	{
            $sql = "INSERT INTO `actual_revenue` (`userId`,`project_code`, `sn`, "
                  . "`visitdate`, `reportdate`, `source`, `detail`, `types`, `unit`, "
                  . "`quantity`, `local_quantity`, `local_price`, `local_revenue`, "
                  . "`traders_quantity`, `traders_price`, `traders_revenue`, `beyond_quantity`,"
                  . " `beyond_price`, `beyond_revenue`, `others_quantity`, `others_price`, `others_revenue`)"
                  . " VALUES ('$userId','$project', '$sn[$a]', '$visitdate', '$reportdate', '$source', "
                  . "'$detail[$a]', '$select[$a]', '$unit[$a]', '$quantity[$a]', '$local_quantity[$a]',"
                  . " '$local_price[$a]', '$local_revenue[$a]', '$traders_quantity[$a]', '$traders_price[$a]',"
                  . " '$traders_revenue[$a]', '$beyond_quantity[$a]', '$beyond_price[$a]', '$beyond_revenue[$a]',"
                  . " '$others_quantity[$a]', '$others_price[$a]', '$others_revenue[$a]')";

	mysql_query($sql);
	
	}
	
	if($_SERVER['HTTP_HOST'] == 'localhost')
	{
		header("Location:actual_expances.php");
	}
	else
	{
		echo "<script>";
		echo "window.location.assign(\"http://himali.gov.np/hims/actual/output_revenue.php\")";
		echo "</script>";
	}


