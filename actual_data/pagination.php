

<?php 

		function pagination($table,$myPage,$num_rec_per_page)
                {		
        $userId = $_SESSION['id'];
	$sql = "SELECT * FROM {$table}"; 
	$rs_result = mysql_query($sql); //run the query
	$total_records = mysql_num_rows($rs_result);  //count number of records
	$total_pages = ceil($total_records / $num_rec_per_page); 
	if($total_pages>1){
		echo '<div class="pagination">';
echo "<a href='{$myPage}.php?page=1' class=\"page\">"."First"."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) echo "<a href={$myPage}.php?page=".$i."  class=\"page\" >".$i."</a> "; 

echo "<a href={$myPage}.php?page=$total_pages  class=\"page\">"."Last"."</a> </div>"; // Goto last page
		}
		
}

	function pagination_condition($table,$myPage,$num_rec_per_page,$projct)
	{
		
	$sql = "SELECT * FROM {$table} where project_code = "."'$projct'"; 
	$rs_result = mysql_query($sql); //run the query
	$total_records = mysql_num_rows($rs_result);  //count number of records
	$total_pages = ceil($total_records / $num_rec_per_page); 
	if($total_pages>1){
		echo '<div class="pagination">';
echo "<a href='{$myPage}.php?page=1' class=\"page\">"."First"."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) echo "<a href={$myPage}.php?page=".$i."  class=\"page\" >".$i."</a> "; 

echo "<a href={$myPage}.php?page=$total_pages  class=\"page\">"."Last"."</a> </div>"; // Goto last page
		}
		
}

?>


