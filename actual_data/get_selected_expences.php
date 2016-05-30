<?php
	session_start();
	$project_code = $_GET['id'];
        $userId = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$num_rec_per_page=3;
            
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

	$query = "select * from actual_expances where project_code = '$project_code'"
                . "and userId = ".$_SESSION['id'];
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
  <td  align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
  <td align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
   <td align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
   <td  align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
   <td  align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
   
  <td  align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
  <td  align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
  <td align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
  <td align="center" bgcolor="#E8F8FF"><strong>Cost per Unit(In NRs)</strong></td>
  <td align="center" bgcolor="#E8F8FF"><strong>Total Cost(In NRs)</strong></td>
  <td  align="center" bgcolor="#E8F8FF"><strong>Delete</strong></td>

   
  
  </tr>
         <?php  $sql = "select * from actual_expances "
                . "where project_code = '$project_code' "
                . "and userId = {$userId} "
                . "limit ".$start_from.','.$num_rec_per_page;
        
                $count = 0;
  		$query = mysql_query($sql);
		while($result = mysql_fetch_array($query))
		{   // echo $sql;die;
                 $count += 1;
                 $ag_date = "select agreement_date_ad,id from projectdetail where project_code = '$project_code'";
                 $show_ag_date = mysql_query($ag_date);
                 $show = mysql_fetch_array($show_ag_date);
                ?>
  <tr align="center">
    <td bgcolor="#FFFFFF"><?php echo $count; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $show[0]; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['visitdate']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['reportdate']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['source']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['detail']; ?></td>

    <td bgcolor="#FFFFFF"><?php echo $result['unit']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['total_cost']; ?></td>
     <td bgcolor="#FFFFFF"><?php echo $result['total_cost']; ?></td>
  
    <td height="30" align="center"><?php if($userId == $result['userId']){ ?>
      <a href="deleteMe.php?page=show_actual_expances&table=actual_expances&amp;pid=<?php echo $result[0];?>" onclick="return confirm('sure to delete !');" title="Delete">
        <div class="delete"></div>
        </a>
      <?php } ?></td>

  </tr> <?php } ?>
</table>

<div class="clear"></div>
<?php  
     //  include('pagination.php');
     //  pagination('actual_revenue','showactual_outputRevenue',$num_rec_per_page);  
            }   //// END of first else 

  else
  {
	echo '<div class="clear"></div>';
	echo "<h2>No Data Found !</h2>";	  
  }
  ?>
</div>
