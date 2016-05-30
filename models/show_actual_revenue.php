<?php
 
   function select_limit_pagination_forprojectdetail($table, $start_from,$num_rec_per_page)
	   {	  
		  $query = "select * from ".$table.' limit '.$start_from.','.$num_rec_per_page;
		  $get_value = mysql_query($query);
		  return $get_value;
	  }
 
?>