<?php
	session_start();
	$project_code = $_GET['id'];
        $userId = $_GET['tbl'];
	include '../db.php';
	include('../models/show_proposed.php');
	
	$num_rec_per_page=25;
            
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

	$query = "select * from actual_investment where project_code = '$project_code'";
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
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Agreement Date</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Visit Date</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Report Date</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Source</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Detail</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Sector</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Remaining Balance of Contractual Commitment in Concerned Investment Head at the end of Previous Month</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Claim in Concerned Investment Head in Current Month</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Claim Reimbursed by HIMALI Grant</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>If amount reimbursed does not match with claimed amount then mention Reasons of Revision in Reimbursement</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Balance in Concerned Investment Head in Current Month</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Status of Investment Head in term of Completion of Contractual Commitment</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Delete</strong></td>
  </tr>
  <tr>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
    <td colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>    
  </tr>

 <?php     $sql = "select * from actual_investment "
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
                 
                    $detail_inv = "select * from investment where project_code = '".$result['project_code']."'";
                 $inv = mysql_query($detail_inv);
                 $inv_result = mysql_fetch_array($inv);
                ?>
      <tr>
<td height="50" align="center" bgcolor="#FFFFFF"><?php echo $count; ?></td>  
     <td align="center" bgcolor="#FFFFFF"><?php echo $show[0]; ?></td> 
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['visitdate']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['reportdate']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['source']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $inv_result['detail']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $inv_result['sector']?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $inv_result['unit']?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_price']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_gc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['r_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_price']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_gc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['claim_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_price']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_gc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['grant_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['Reimbursement_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_quantity']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_price']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_gc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['balance_pc']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $result['status']; ?></td>
    <td height="30" align="center"><?php if($userId == $result['userId']){ ?>
      <a href="deleteMe.php?page=show_actual_investment&table=actual_investment&pid=<?php echo $result[0];?>" onclick="return confirm('sure to delete !');" title="Delete">
        <div class="delete"></div>
        </a>
      <?php } ?></td>
      
    </tr>
                    <?php } ?>
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
