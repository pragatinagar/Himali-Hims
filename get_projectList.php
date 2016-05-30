<?php
error_reporting(0);
	include "db.php";
	 if(isset($_GET['table'])){
		 $value = $_GET['value'];
		 $table_name = $_GET['table'];		 
		$cnt = 1;
		$res = 0;
		
	 echo  $query = "SELECT p.id,p.project_code,p.name_add_proponent,p.responsible_person FROM projectdetail p WHERE p.project_code like \"%$value%\" and p.project_code NOT IN ( SELECT DISTINCT (revenue.project_code) FROM revenue)";
	   
	$projects = mysql_query($query);
	if(mysql_num_rows($projects)>0);
	{	
	while ($result = mysql_fetch_array($projects))
	 {
	$res = "<input type='text' name='sn' value='0' hidden>";
	$res .= '<b><tr><td align="center" bgcolor="#FFFFFF"><input name="sn" type="radio" id='.$result[1].' value='.$result[1].' onchange="check_project(this.id)" /></td><td align="center" bgcolor="#FFFFFF">'.$cnt.'</td>';
	$res .= '<td align="center" bgcolor="#FFFFFF">'.$result[0].'</td><td bgcolor="#FFFFFF">'.$result[1].'</td><td bgcolor="#FFFFFF">'.$result[2].'</td></tr>';
	$res .= '<br />'; 
	return $res;
	 $cnt++;
		 }
	 }
		 }
	
	function select_project_list($table_name)
	{
		$cnt = 1;
		
	    $query = "SELECT p.id,p.project_code,p.name_add_proponent,p.responsible_person FROM projectdetail p WHERE p.project_code NOT IN ( SELECT DISTINCT ($table_name.project_code) FROM $table_name)";
	   
	$projects = mysql_query($query);
	if(mysql_num_rows($projects)>0);
	{	while ($result = mysql_fetch_array($projects))
	 {
				 echo "<input type='text' name='sn' value='0' hidden>";
	echo '<b><tr><td align="center" bgcolor="#FFFFFF"><input name="sn" type="radio" id='.$result[1].' value='.$result[1].' onchange="check_project(this.id)" /></td><td align="center" bgcolor="#FFFFFF">'.$cnt.'</td>';
	echo '<td align="center" bgcolor="#FFFFFF">'.$result[0].'</td><td bgcolor="#FFFFFF">'.$result[1].'</td><td bgcolor="#FFFFFF">'.$result[2].'</td></tr>';
	echo '<br />'; 
	 $cnt++;
			 }
	 }}


	 ?>