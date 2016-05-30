<?php
	session_start();
	$project_code = $_GET['id'];
	$session_id = $_GET['sessionId'];
    $userId = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$num_rec_per_page=3;
            
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

	//$query = "select * from actual_seasonal where project_code = '$project_code' and userId = '$userId'";
           $query = "select actual_seasonal.*,more_seasonal.* "
               . "from actual_seasonal "
               . "LEFT JOIN more_seasonal "
               . "ON actual_seasonal.id_new = more_seasonal.regular_id "
               . "where actual_seasonal.project_code = '$project_code'";
       // echo $query;die;
		$ag_date = "select agreement_date_ad from projectdetail where project_code = '$project_code'";
        $result = mysql_query($query);
        $show_ag_date = mysql_query($ag_date);
        $show = mysql_fetch_array($show_ag_date);
        $agmnt_date = $show[0];
	if(mysql_num_rows($result) > 0){
			?>
<div class="clear"></div>
<br />

<div id="show_tableData">
<table id="dataTable" width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333">
    <tr>
   <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
   <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
   <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
   <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
   <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Types of Employee</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Sex of Employee</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Caste and Ethnicity</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Family Member</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Local Employee</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>No. of Month Worked</strong></td>
    <td height="50" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Salary per Month</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Total Salary of Reporting Month (NRs.)</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Delete</strong></td>
  </tr>
  <tr>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>In Cash (NRs.)</strong></td>
    <td height="50" colspan="4" align="center" bgcolor="#E8F8FF"><strong>In Kind</strong></td>
    </tr>
  <tr>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Detail of Products</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Price per Unit (NRs.)</strong></td>
    
  </tr>  
  <?php         
      
                   $count = 1;
  		$query1 = mysql_query($query);//echo count($query);
		while($data = mysql_fetch_array($query1))
		{                 
                ?>
  <tr>
    <td align="center"><?php echo $count++;?></td>
    <td align="center"><?php echo $agmnt_date;?></td>
    <td align="center"><?php echo $data['visit_date'];?></td>
    <td align="center"><?php echo $data['report_month'];?></td>
    <td align="center"><?php echo $data['source'];?></td>  
    <td height="30" align="center"><?php echo $data['employee'];?></td>   
    <td height="30" align="center"><?php echo $data['sex'];?></td>
    <td height="30" align="center"><?php echo $data['caste'];?></td>
    <td height="30" align="center"><?php echo $data['family'];?></td>
    <td height="30" align="center"><?php echo $data['local'];?></td>
    <td height="30" align="center"><?php echo $data['worked_month'];?></td>
    <td height="30" align="center"><?php echo $data['incash'];?></td>
    <td height="30" align="center"><?php echo $data['product_detail'];?></td>
    <td height="30" align="center"><?php echo $data['unit'];?></td>
    <td height="30" align="center"><?php echo $data['quantity'];?></td>
    <td height="30" align="center"><?php echo $data['price'];?></td>
    <td height="30" align="center"><?php echo $data['total_salary'];?></td>

    <td height="30" align="center"><?php if($session_id == $data['userId']){ ?>
    <a href="deleteMe.php?page=show_actual_seasonal&table=more_seasonal&pid=<?php echo $data['id'];?>" onclick="return confirm('Sure to delete !');" title="Delete"><div class="delete"></div></a><?php } ?></td>
  </tr> <?php } ?>
</table>

<div class="clear"></div>
	<?php  
            }   //// END of first else 

  else
  {
	echo '<div class="clear"></div>';
	echo "<h2>No Data Found !</h2>";	  
  }
  ?>
</div>
