<?php 

 //error_reporting(0);
 $project_code = $_GET['id'];

 include '../db.php';
 $val = "select name_add_proponent,responsible_person,agreement_date_ad,enterprises from projectdetail where project_code = '$project_code'";
 $qry = mysql_query($val);
 $thisForpagination = 'yes';
 $abc = "";
while($data5 = mysql_fetch_array($qry))
{ 
    $newDate = date("Y/m/d", strtotime($data5[2]));
	$group = explode(" ",$data5[3]);
	 $abc = '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin:0 20px 20px 0;">'.$data5[0].'</span>';
	 $abc .= '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin:0 20px 20px 0;">'.$data5[1].'</span>'; 
	 $abc .= '<input type="text" id="agreementDate" name="agdate" value="'.$newDate.'" hidden />';
	 $abc .= '<input type="text" id="groupid" name="group" value="'.$group[0].'" hidden />';
	 echo $abc;
}

?>
<div class="clear"></div> 
<br />
<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php

        $query_sn = mysql_query("select sn_byUser,detail from investment where project_code = '$project_code' order by project_code asc"); ?>
        Select Detail: <select name="sn_id" id="sn_id" required>
        			<option value='' selected>Detail...</option>
       <?php while($data_sn = mysql_fetch_array($query_sn)){
        	 $projct_sn = $data_sn[0].",".$project_code;   
			 			 
        echo "<option value=\"$projct_sn\">$data_sn[1]</option>"; 
	   }
           ?>    
        </select>   
        </span>