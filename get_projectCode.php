<?php
error_reporting(0);
	include "db.php";
	
	 $get_projectCode = "select project_code,name_add_proponent from projectdetail where id = (select max(id) from projectdetail)";
	 $get_data = mysql_query($get_projectCode);
	
	while($data = mysql_fetch_array($get_data))
	{ 
		 $_SESSION['project_code'] = $data[0];
		 $_SESSION['project_name'] = $data[1];		
	}


?>