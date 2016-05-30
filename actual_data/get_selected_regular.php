<?php
	//session_start();
	$project_code = $_GET['id'];
	 $session_id = $_GET['sessionId'];
	$table = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$num_rec_per_page=15;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

       $query = "select actual_regular.*,more_regular.* "
               . "from actual_regular "
               . "LEFT JOIN more_regular "
               . "ON actual_regular.id_new = more_regular.regular_id "
               . "where actual_regular.project_code = '$project_code' ";        
 	//echo $query;die;
	 $ag_date = "select agreement_date_ad from projectdetail where project_code = '$project_code'";
	 $show_ag_date = mysql_query($ag_date);
        $show = mysql_fetch_array($show_ag_date);
        $agmnt_date = $show[0];
        $result = mysql_query($query);
	if(mysql_num_rows($result) > 0){
		
		?>

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
  
  <?php $count = $start_from+1 ; 
	while($data = mysql_fetch_array($result))
	{  ?>
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
    <a href="deleteMe.php?page=show_actual_regular&table=actual_revenue&pid=<?php echo $data['id'];?>" onclick="return confirm('sure to delete !');" title="Delete"><div class="delete"></div></a><?php } ?></td>
  </tr>
  <?php } 	?>
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
