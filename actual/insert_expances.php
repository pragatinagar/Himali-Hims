<?php
include("../db.php");
$userId = $_POST['userId'];
$sn = $_POST['sn'];
$project = $_POST['projectid']; $visitdate = $_POST['visitdate'];$source = $_POST['source'];$reportdate = $_POST['reportdate'];
$detail = $_POST['detail'];$unit = $_POST['unit'];$quantity = $_POST['quantity'];$cost = $_POST['cost'];$total = $_POST['total'];
foreach($detail as $a=>$b)
{   	
      $sql = "INSERT INTO `actual_expances` (`sn`,`userId`,`project_code`, `visitdate`, `reportdate`, `source`, `detail`, `unit`, `quantity`, `cost`, `total_cost`) VALUES ('$sn','$userId','$project', '$visitdate', '$reportdate', '$source', '$detail[$a]', '$unit[$a]', '$quantity[$a]', '$cost[$a]','$total[$a]');";
         mysql_query($sql);
}
            if($_SERVER['HTTP_HOST'] == 'localhost')			
		header("Location:actual_investment.php");	
		
           		else {
                echo "<script>";
                echo "window.location.assign(\"http://himali.gov.np/hims/actual/actual_investment.php\")";
                echo "</script>"; }

 ?>