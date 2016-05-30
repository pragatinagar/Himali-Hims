
<?php 
include('../db.php');

	
if(isset($_GET['pid']))
{
	$projectid = $_GET['pid']; 
	$table = $_GET['table'];
	$myPage = $_GET['page'];
		if($myPage == 'show_proposed_project')	/// for page detail where condition is used in project_code 	
	$sql = "delete from {$table} where project_code = "."'$projectid'";  
		else 	/// for page detail where condition is used in id 	
	$sql = "delete from {$table} where id = "."'$projectid'";
		mysql_query($sql);
	echo "<script>"; 
	echo "window.location.assign(\" {$myPage}.php\")";
	echo "</script>";
		
}
else 
{
	echo "<script>";
	echo "window.location.assign(\" {$myPage}.php\")";
	echo "</script>";	
}

?>