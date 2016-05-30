<?php
session_start();
	if(isset($_SESSION['id']))
	{ 
		//echo '<pre>';var_dump($_POST);die;
include("get_projectList.php");
include("get_projectCode.php");
	$userId = $_SESSION['id2'];
    $project_code = $_POST['projectid'];
	
	$detail = $_POST['detail'];
	$product_type = $_POST['product_type'];
	$unit = $_POST['unit'];

		$sn = $_POST['sn'];
		$q1 = $_POST['q1'];
		$q2 = $_POST['q2'];
		$q3 = $_POST['q3'];
		$q4 = $_POST['q4'];
		$q5 = $_POST['q5'];
		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$p3 = $_POST['p3'];
		$p4 = $_POST['p4'];
		$p5 = $_POST['p5'];
		$r1 = $_POST['r1'];
		$r2 = $_POST['r2'];
		$r3 = $_POST['r3'];
		$r4 = $_POST['r4'];
		$r5 = $_POST['r5'];

			foreach($product_type as $a=>$b)
				{ 
			 $insert_revenue = "INSERT INTO `revenue` (`userId`,`project_code`,`sn_byUser`, `detail`, `product_type`, `unit`, `q1`, `q2`, `q3`, `q4`, `q5`, `p1`, `p2`, `p3`, `p4`, `p5`, `r1`, `r2`, `r3`, `r4`, `r5`) VALUES ( '$userId','$project_code','$sn[$a]', '$detail[$a]', '$product_type[$a]', '$unit[$a]', '$q1[$a]', '$q2[$a]', '$q3[$a]', '$q4[$a]', '$q5[$a]', '$p1[$a]', '$p2[$a]', '$p3[$a]', '$p4[$a]', '$p5[$a]', '$r1[$a]', '$r2[$a]', '$r3[$a]', '$r4[$a]', '$r5[$a]')";
			mysql_query($insert_revenue);
				}			
			header("Location:labor.php");
			
				}
			?>