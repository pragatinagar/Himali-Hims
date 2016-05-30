<?php
	session_start();
	isset($_POST['details'])?$_SESSION['details'] = $_POST['details']:$_SESSION['details']="";
	isset($_POST['quantity'])?$_SESSION['quantity'] = $_POST['quantity']:$_SESSION['quantity']="";
	isset($_POST['sell_quantity'])?$_SESSION['sell_quantity']=$_POST['sell_quantity']:$_SESSION['sell_quantity']=""; 
	isset($_POST['price_perUnit'])?$_SESSION['price_perUnit']=$_POST['price_perUnit']:$_SESSION['price_perUnit']='';
	isset($_POST['revenue'])?$_SESSION['revenue']=$_POST['revenue']:$_SESSION['revenue']='';
	isset($_POST['worked_month_actual'])?$_SESSION['worked_month_actual'] = $_POST['worked_month_actual']:$_SESSION['worked_month_actual']="";
	isset($_POST['cash_actual'])?$_SESSION['cash_actual'] = $_POST['cash_actual']:$_SESSION['cash_actual']="";
	
	if($_POST['sell_quantity'] == $_POST['price_perUnit']){}
	else
	{
		echo "<script>";
		echo "alert('wrong');";
		echo "window.location.assign('output_revenue.php');";
		echo "</script>";
		//
		}		
	header('Location:output_revenue.php');
	
?>