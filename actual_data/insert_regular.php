<?php
include("../db.php");

$project = $_POST['projectid']; $visitdate = $_POST['visitdate'];$source = $_POST['source'];$reportdate = $_POST['reportdate'];
$type = $_POST['type_actual'];$sex_actual = $_POST['sex_actual'];$caste_actual = $_POST['caste_actual'];$family_actual = $_POST['family_actual'];$employee_actual = $_POST['employee_actual'];
$worked_month = $_POST['worked_month'];$cash_actual = $_POST['cash_actual'];$salary_actual = $_POST['salary_actual'];
 $detail_product = $_POST['detail_product'];
//echo "<pre>";var_dump($_POST);
 $unit = $_POST['unit'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
foreach($type as $a=>$b)
	{
	 $sql =	"INSERT INTO `actual_regular` (`project_code`, `visit_date`, `report_month`, `source`, `employee`, `sex`, `caste`, `family`, `local`, `worked_month`, `incash`, `total_salary`) VALUES ('$project', '$visitdate', '$reportdate', '$source', '$type[$a]', '$sex_actual[$a]', '$caste_actual[$a]', '$family_actual[$a]', '$employee_actual[$a]', '$worked_month[$a]', '$cash_actual[$a]', '$salary_actual[$a]');";
	mysql_query($sql);   

	 $retrive = mysql_query("select id from `actual_regular` where id = (select max(id) from actual_regular)");
	 $regularId = mysql_result($retrive,0);
	 $insert = "INSERT INTO `more_regular` (`project_code`, `regular_id`, `product_detail`, `unit`, `quantity`, `price`) VALUES ";
$values = array();

    $values[] = "('$project', '$regularId', '$detail_product[0]', '$unit[0]', '$quantity[0]', '$price[0]')";
    $values[] = "('$project', '$regularId', '$detail_product[1]', '$unit[1]', '$quantity[1]', '$price[1]')";
    $values[] = "('$project', '$regularId', '$detail_product[2]', '$unit[2]', '$quantity[2]', '$price[2]')";
	if (! empty($values)){
    $insert .= implode(', ', $values);
	$insert .= ";"; 
}
	
	 mysql_query($insert);
	
	
		 //// second foreach ends here
	
	}   //// first foreach ends here
	if($_SERVER['HTTP_HOST'] == 'localhost')
			{
		header("Location:actual_seasonal.php");	
			}
	else
					 {
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/actual_seasonal.php\")";
	echo "</script>"; }
	
	?>