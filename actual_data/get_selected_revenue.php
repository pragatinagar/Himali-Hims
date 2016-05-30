<?php
	session_start();
	$project_code = $_GET['id'];
        $userId = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$num_rec_per_page=25;
            
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

	$query = "select * from actual_revenue where project_code = '$project_code' and userId = '$userId'";
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
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Type of Products</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells in Local Market and Neighbors for Household Consumption</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells to Traders or Commercial Users in Local Market</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells beyond Local Market (Agriculture Market Centre, Cities and Export)</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Others (Household Use, Gifts, Feeder to Livestock and other non-commercial use)</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Delete</strong></td>

  </tr>
  <tr>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Quantity</td>
    <td align="center" bgcolor="#E8F8FF">Price per Unit (In NRs.)</td>
    <td align="center" bgcolor="#E8F8FF">Revenue (In NRs.)</td>
  </tr>
  <?php          $sql = "select * from actual_revenue "
                . "where project_code = '$project_code' "
                . "and userId = {$userId} "
                . "limit ".$start_from.','.$num_rec_per_page;
        
                 $count = 0;
  		$query = mysql_query($sql);//echo count($query);
		while($result = mysql_fetch_array($query))
		{    
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
    <td bgcolor="#FFFFFF"><?php echo $result['types']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['unit']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['local_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['local_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['local_revenue']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['traders_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['traders_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['traders_revenue']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['beyond_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['beyond_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['beyond_revenue']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['others_quantity']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['others_price']; ?></td>
    <td bgcolor="#FFFFFF"><?php echo $result['others_revenue']; ?></td>
    <td height="30" align="center"><?php if($userId == $result['userId']){ ?>
      <a href="deleteMe.php?page=show_actual_outputRevenue&table=actual_revenue&pid=<?php echo $result[0];?>" onclick="return confirm('sure to delete !');" title="Delete">
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
