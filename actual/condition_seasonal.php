<?php
	session_start();
	isset($_POST['sex_actual1'])?$_SESSION['sex_actual1'] = $_POST['sex_actual1']:$_SESSION['sex_actual1']="";
	isset($_POST['type_actual1'])?$_SESSION['type_actual1'] = $_POST['type_actual1']:$_SESSION['type_actual1']="";
	isset($_POST['caste_actual1'])?$_SESSION['caste_actual1']=$_POST['caste_actual1']:$_SESSION['caste_actual1']=""; 
	isset($_POST['family_actual1'])?$_SESSION['family_actual1']=$_POST['family_actual1']:$_SESSION['family_actual1']='';
	isset($_POST['employee_actual1'])?$_SESSION['employee_actual1']=$_POST['employee_actual1']:$_SESSION['employee_actual1']='';
	isset($_POST['worked_month_actual1'])?$_SESSION['worked_month_actual1'] = $_POST['worked_month_actual1']:$_SESSION['worked_month_actual1']="";
	isset($_POST['cash_actual1'])?$_SESSION['cash_actual1'] = $_POST['cash_actual1']:$_SESSION['cash_actual1']="";
	isset($_POST['salary_actual1'])?$_SESSION['salary_actual1'] = $_POST['salary_actual1']:$_SESSION['salary_actual1']="";
	header('Location:actual_seasonal.php');
	
?>