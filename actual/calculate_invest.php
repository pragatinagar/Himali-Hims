<?php
	 session_start();
	 $all_value = $_GET['ids'];
	 $split = explode(',', $all_value);
	 $project_code = @$split[1];
	 $project_id = $split[0];
	 include '../db.php';
	 include('../models/show_proposed.php');
	
	$userId = $_SESSION['id'];
	//if(isset($userId)){echo $userId;}die;
	$num_rec_per_page=15;

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 

$start_from = ($page-1) * $num_rec_per_page; 

		$result = select_limit_pagination_forprojectdetail('investment',$start_from,$num_rec_per_page);
	
 $sql = "select * from investment where project_code = '$project_code' and sn_byUser = $project_id";
	$result = mysql_query($sql);
	while($x1 = mysql_fetch_array($result))
	{
		$detail = $x1['detail'];
		$sector = $x1['sector'];
		$unit = $x1['unit']; 		 
	}
	
	$sql_new = "select * from actual_investment where project_code = "; 
	$sql_new .= "'$project_code' and sn = $project_id"; 
	//echo $sql_new;die;
	$result_new = mysql_query($sql_new);
if(mysql_num_rows($result_new) > 0)	 
	{ while($x2 = mysql_fetch_array($result_new))
	  {
		$quantity = $x2['balance_quantity'];
		$price = $x2['balance_price'];
		$gc = $x2['balance_gc']; 
		$pc = $x2['balance_pc']; 
	  }
	 }
	 else
	 {
	$sql_next = "select * from investment where project_code = '$project_code' and sn_byUser = $project_id";
	$result_next = mysql_query($sql_next);
	while($x3 = mysql_fetch_array($result_next))
	{
		$quantity = $x3['quality'];
		$price = $x3['per_unit'];
		$gc = $x3['grant_contribution']; 
		$pc = $x3['Proponent_contribution'];
	}
	 }
	
?>
<script>

	function get_full_status()
	{
				var status = document.getElementById('id_status').value;	

		var remaining_quantity = document.getElementById('r_quantity').value;
		var remaining_price = document.getElementById('r_price').value;
		var remaining_gc = document.getElementById('r_gc').value;
		var remaining_pc = document.getElementById('r_pc').value;
				var multi_remaining = remaining_quantity*remaining_price;
    	var add_remaining = parseInt(remaining_gc)+parseInt(remaining_pc);
		
	<!-- This for claim  -->
	
		var claim_quantity = document.getElementById('c_quantity').value;
	    var claim_price = document.getElementById('c_price').value;
		var claim_pc = document.getElementById('c_pc').value;
		var claim_gc = document.getElementById('c_gc').value;
			var multi_claim = claim_quantity*claim_price;
    	var add_claim = parseInt(claim_pc)+parseInt(claim_gc);

<!-- This for grant  -->

 		var grant_quantity = document.getElementById('g_quantity').value;
		var grant_price = document.getElementById('g_price').value;
		var grant_gc = document.getElementById('g_gc').value;
		var grant_pc = document.getElementById('g_pc').value;
			var multi_grant = grant_quantity*grant_price;
    	var add_grant = parseInt(grant_gc)+parseInt(grant_pc);

<!-- This for balance  -->

		var balance_quantity = document.getElementById('bq').value;
		var balance_price = document.getElementById('b_p').value;
		var balance_gc = document.getElementById('bg').value;
		var balance_pc = document.getElementById('bp').value;
			var multi_balance = balance_quantity*balance_price;
    	var add_balance = parseInt(balance_gc)+parseInt(balance_pc);

		if((multi_remaining == add_remaining) &&  (multi_claim == add_claim) && (multi_grant == add_grant) 
		&& (multi_balance == add_balance) && (balance_gc = remaining_gc-grant_gc) && (balance_pc = remaining_pc-grant_pc) )
		{	
				$("#bq").css("background-color", "#5BF068");
				$("#b_p").css("background-color", "#5BF068");
				$("#bp").css("background-color", "#5BF068");
				$("#bg").css("background-color", "#5BF068");
				
				
				$("#r_quantity").css("background-color", "#5BF068");
				$("#r_price").css("background-color", "#5BF068");
				$("#r_gc").css("background-color", "#5BF068");
				$("#r_pc").css("background-color", "#5BF068");
				
				
			    $("#c_quantity").css("background-color", "#5BF068");
				$("#c_price").css("background-color", "#5BF068");
				$("#c_gc").css("background-color", "#5BF068");
				$("#c_pc").css("background-color", "#5BF068");			
				
			    $("#g_quantity").css("background-color", "#5BF068");
				$("#g_price").css("background-color", "#5BF068");
				$("#g_gc").css("background-color", "#5BF068");
				$("#g_pc").css("background-color", "#5BF068");			


							
		}
		else {
			alert("Please Check the Value Before Submit");
			
				$("#bq").css("background-color", "#F05518");
				$("#b_p").css("background-color", "#F05518");
				$("#bp").css("background-color", "#F05518");
				$("#bg").css("background-color", "#F05518");
				
				
				$("#r_quantity").css("background-color", "#F05518");
				$("#r_price").css("background-color", "#F05518");
				$("#r_gc").css("background-color", "#F05518");
				$("#r_pc").css("background-color", "#F05518");
				
				
			    $("#c_quantity").css("background-color", "#F05518");
				$("#c_price").css("background-color", "#F05518");
				$("#c_gc").css("background-color", "#F05518");
				$("#c_pc").css("background-color", "#F05518");			
				
			    $("#g_quantity").css("background-color", "#F05518");
				$("#g_price").css("background-color", "#F05518");
				$("#g_gc").css("background-color", "#F05518");
				$("#g_pc").css("background-color", "#F05518");			
		}
		
		  }
	

</script>
<div class="clear"></div>
<br />
<table width="100%" cellpadding="3" id="dataTable" cellspacing="1" bgcolor="#333333">
  <tr>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Code</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Detail</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Sector</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Remaining Balance of Contractual Commitment in Concerned Investment Head at the end of Previous Month</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Claim in Concerned Investment Head in Current Month</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Claim Reimbursed by HIMALI Grant</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>If amount reimbursed does not match with claimed amount then mention Reasons of Revision in Reimbursement</strong></td>
    <td colspan="4" align="center" bgcolor="#E8F8FF"><strong>Balance in Concerned Investment Head in Current Month</strong></td>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Status of Investment Head in term of Completion of Contractual Commitment</strong></td>
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
  <?php

  if(mysql_num_rows($result_new) >= 1)	 
	{
  $sql_new1 = "select * from actual_investment where project_code = '$project_code' and sn = $project_id";
  $query001 = mysql_query($sql_new1);	
	
		while($reslt = mysql_fetch_array($query001)){
		
  ?>
  <tr>

    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt['project_code'])) echo $reslt['project_code'];?></td> 
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($detail)) echo $detail;?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($sector)) echo $sector;?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($unit)) echo $unit;?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt['r_quantity'])) echo $reslt['r_quantity'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt['r_price'])) echo $reslt['r_price'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt['r_gc'])) echo $reslt['r_gc'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt['r_pc'])) echo $reslt['r_pc'];?></td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  
  </tr>
  <?php } }
  
    $sql_new2 = "select * from actual_investment where project_code = '$project_code' and sn = $project_id and status = 'Fully'";
  	$query002 = mysql_query($sql_new2);	
	
		if(mysql_num_rows($query002) < 1){
		  
  ?>
  <tr>
  <input type="hidden" name="sn_byUser" id="sn_byUser" value="<?php echo $project_id;?>" />
    <td align="center" bgcolor="#FFFFFF"><?php echo $project_code; ?></td>
    <td align="center" bgcolor="#FFFFFF"><div id="detail"><?php if(isset($detail)) echo $detail;?></div></td>
    <td align="center" bgcolor="#FFFFFF"><div id="sector"><?php if(isset($sector)) echo $sector;?></div></td>
    <td align="center" bgcolor="#FFFFFF"><div id="unit"><?php if(isset($unit)) echo $unit;?></div></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_quantity" id="r_quantity"  value="<?php if(isset($quantity)) echo $quantity; ?>" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_price" id="r_price" value="<?php if(isset($price)) echo $price; ?>" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_gc" id="r_gc" value="<?php if(isset($gc)) echo $gc; ?>" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_pc" id="r_pc" value="<?php if(isset($pc)) echo $pc; ?>" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_quantity" id="c_quantity"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_price" id="c_price"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_gc" id="c_gc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_pc" id="c_pc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_quantity" id="g_quantity"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_price" id="g_price"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_gc" id="g_gc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_pc" id="g_pc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><select name="reimbursement">
      <option value="">High Bill Amount</option>
      <option value="">Approved Allocation Insufficient</option>
      <option value="">Claim after Completion of Work</option>
      <option value="">Beyond Term of Contract</option>
      <option value="">Others</option>
    </select></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_quantity" id="bq" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_price" id="b_p" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_gc" id="bg" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_pc" id="bp" style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><select name="status" id="id_status">
      <option value="Initial">Initial Stage</option>
      <option value="Partially">Partially Completed</option>
      <option value="Fully">Fully Completed</option>
    </select></td>
  </tr>
  
  <?php }
  else
  {
	 while($reslt1 = mysql_fetch_array($query002)){
		
  ?>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt1['project_code'])) echo $reslt1['project_code'];?></td> 
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($detail)) echo $detail;?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($sector)) echo $sector;?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($unit)) echo $unit;?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt1['balance_quantity'])) echo $reslt1['balance_quantity'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt1['balance_price'])) echo $reslt1['balance_price'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt1['balance_gc'])) echo $reslt1['balance_gc'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php if(isset($reslt1['balance_pc'])) echo $reslt1['balance_pc'];?></td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  
  </tr>
  <?php }	 
  }
   ?>
  </table>

<div class="clear"></div><br />
<?php if(mysql_num_rows($query002) < 1){ ?>
<input type="submit" class="submit fr ml" id="submit" value="Submit" />
<input type="button" class="check fr ml" value="Check" id="check_equation" onclick="get_full_status()" />

<?php  }
    //// END of first else 
  
  ?>

