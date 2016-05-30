<?php
	session_start();
	isset($_POST['sex_actual'])?$_SESSION['sex_actual'] = $_POST['sex_actual']:$_SESSION['sex_actual']="";
	isset($_POST['type_actual'])?$_SESSION['type_actual'] = $_POST['type_actual']:$_SESSION['type_actual']="";
	isset($_POST['caste_actual'])?$_SESSION['caste_actual']=$_POST['caste_actual']:$_SESSION['caste_actual']=""; 
	isset($_POST['family_actual'])?$_SESSION['family_actual']=$_POST['family_actual']:$_SESSION['family_actual']='';
	isset($_POST['employee_actual'])?$_SESSION['employee_actual']=$_POST['employee_actual']:$_SESSION['employee_actual']='';
	isset($_POST['worked_month_actual'])?$_SESSION['worked_month_actual'] = $_POST['worked_month_actual']:$_SESSION['worked_month_actual']="";
	isset($_POST['cash_actual'])?$_SESSION['cash_actual'] = $_POST['cash_actual']:$_SESSION['cash_actual']="";
	isset($_POST['salary_actual'])?$_SESSION['salary_actual'] = $_POST['salary_actual']:$_SESSION['salary_actual']="";
	header('Location:actual_regular.php');
	
?>