<?php 
$mysql_database = "agloan";
$connect = mysql_connect("himaligov.accountsupportmysql.com","agloan","nirdosh123") or die("Sorry!!!Could not connect database");
mysql_select_db($mysql_database) or die("Could not select database");

	
	/*filesize()*/
	
	function select_table_withAllvalues($table)
 	 {
	$query = "select * from ".$table;
	$get_value = mysql_query($query);
	return $get_value;		
	 }
	 
	 function select_table_oneORmany_columns($table, $column = '*')
 	 {		 //// For all columns no need to use $column 
	 		 //// for one or many columns use col1,col2,col3,.....
	$query = "select ".$column." from ".$table; 
	$get_value = mysql_query($query); //var_dump($get_value);
	
	return $get_value;		
	 }

	function select_table_oneWhere($table, $where = '', $whereValue = '')
	 {		//// $where means column name of table 
	 		//// $whereValue is value of that column to be checked
		$query = "select * from ".$table." where ".$where." = ".$whereValue;
		$get_value = mysql_query($query);
		return $get_value;		
	 }
	 
	 function select_table_manyWhere($table, $where = '')
	 {	    //// $where will hold all column names and it corresponding values like abc = 1, xyz = 'fine'
		$query = "select * from ".$table." where ".$where;
		$get_value = mysql_query($query);
		return $get_value;		
	 }
	 
	  function select_table_oneORmany_columns_AND_oneORmany_where($table,$column = '*', $where = '')
	 {	     //// $column will hold one or many column to be checked or to apply condition
			 //// $where will hold all column names and it corresponding values like abc = 1, xyz = 'fine'
		$query = "select ".$column." from ".$table." where ".$where;
		$get_value = mysql_query($query);
		return $get_value;		
	 }

	 function select_proposed($table, $select = '*', $where = '',$whereValue = '' , $order = '', $limit = '')
   	  {		
	$query = "select ".$select." from ".$table." where ".$where." = ".$whereValue." ORDER BY ".$order." limit = ".$limit ;
	$get_value = mysql_query($query);
	return $get_value;	
	  }
	  
	  function select_limit_pagination_forprojectdetail($table, $start_from,$num_rec_per_page)
	   {	  
		  $query = "select * from ".$table.' limit '.$start_from.','.$num_rec_per_page;
		  $get_value = mysql_query($query);
		  return $get_value;
	  }
	  
	  function select_limit_pagination($table,$start_from,$num_rec_per_page)
	  {		 //// $limit_from 
	  
		  $query = "select * from ".$table.' limit '.$start_from.','.$num_rec_per_page;
		  $get_value = mysql_query($query);
		  return $get_value;
	  }
	  
	  
	  
	  




?>