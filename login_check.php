<?php

	session_start();
	error_reporting(0);
	include('db.php');
	
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		$result = mysql_query("select id,username,password from user_data where username = '$username' and password = '$password'");
		if($result)
			{	
		if(mysql_num_rows($result) > 0)
			{
			while($data = mysql_fetch_array($result))
			{
			 $_SESSION['user'] = $data['username'];
			 $_SESSION['id'] = $data['id'];
			 $_SESSION['id2'] = $data['id'];
		   }

		if($_SESSION['user'] == "account") header('Location:acc_investment.php');
		else if($_SESSION['user'] == "envt")header('Location:acc_environment.php');
		else header('Location:main_page.php');	
		exit();		
		}

		else
		{
			header('Location:index.php?error=wrong');
			exit();
		}
		
	}
		

?>