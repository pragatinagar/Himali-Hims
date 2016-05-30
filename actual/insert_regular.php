<?php 

include("../db.php");
$sn = $_POST['sn'];
$project = $_POST['projectid']; $visitdate = $_POST['visitdate'];$source = $_POST['source'];$reportdate = $_POST['reportdate'];
$type = $_POST['type_actual'];$sex_actual = $_POST['sex_actual'];$caste_actual = $_POST['caste_actual'];$family_actual = $_POST['family_actual'];$employee_actual = $_POST['employee_actual'];
$worked_month = $_POST['worked_month'];$cash_actual = $_POST['cash_actual'];$salary_actual = $_POST['salary_actual'];
//echo "<pre>";var_dump($_POST);
 $detail_product = $_POST['detail_product'];
 $unit = $_POST['unit'];
 $userId = $_POST['userId'];
 $quantity = $_POST['quantity'];
 $price = $_POST['price'];//echo "<pre>";var_dump($detail_product);die;
 $i=0;
 foreach($type as $a=>$b)
	{ 
	 $sql = "INSERT INTO `actual_regular` (`sn`, `userId`, `project_code`, `visit_date`, `report_month`, `source`, `employee`, `sex`, `caste`, `family`, `local`, `worked_month`, `incash`, `total_salary`) VALUES ('$sn[$a]','$userId','$project', '$visitdate', '$reportdate', '$source', '$type[$a]', '$sex_actual[$a]', '$caste_actual[$a]', '$family_actual[$a]', '$employee_actual[$a]', '$worked_month[$a]', '$cash_actual[$a]', '$salary_actual[$a]');";
	//echo $sql."<br/>";
	 mysql_query($sql);
	 $retrive = mysql_query("select id_new from `actual_regular` where id_new = (select max(id_new) from actual_regular)");
	 $regularId = mysql_result($retrive,0);
	 $insert = "INSERT INTO `more_regular` (`project_code`, `regular_id`, `product_detail`, `unit`, `quantity`, `price`) VALUES ";
	 $insert .= "('$project', '$regularId', '$detail_product[$i]', '$unit[$i]', '$quantity[$i]', '$price[$i]'),"; $i += 1;
	 $insert .= "('$project', '$regularId', '$detail_product[$i]', '$unit[$i]', '$quantity[$i]', '$price[$i]'),"; $i += 1;
	 $insert .= "('$project', '$regularId', '$detail_product[$i]', '$unit[$i]', '$quantity[$i]', '$price[$i]')"; $i += 1;
//echo $insert."<br />";

	////echo $insert;
	 mysql_query($insert);		
		  //// second foreach ends here
	
	}   //// first foreach ends here
	if($_SERVER['HTTP_HOST'] == 'localhost'){
		header("Location:actual_seasonal.php");	
	    }
	else
		 {
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/actual/actual_seasonal.php\")";
	echo "</script>"; }
	
	?>
	
    