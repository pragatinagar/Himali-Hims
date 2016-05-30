
     <?php
	 session_start(); /////Select Detail:
         error_reporting(0);
	 include('../db.php');
	 include('../inc/header.php');
	 include('../inc/nav.php'); 
	if(isset($_SESSION['id'])){ 		
	include("../get_projectCode.php");
	$project_code = $_SESSION['project_code'];
     ?>
 
<script src="../js/actual_investment.js"></script> 
<script src="../js/investment_calculate.js"></script> 

<div class="content-wrapper">
        
<form action="insert_investment.php" method="post" id="regForm">
<input type="hidden" value="investment" id="table" />  
	<h3 style="color:#069;">Actual Investment</h3> 
		<?php include('actualHeader/actual_headr.php'); ?>
	<div id="projectDetail" ></div>
     <div class="clear"></div>      
    <br />
        
    <div class="fl"><strong>Date of Visit:</strong><br />
    <input type="text" id="visitDate" name="visitdate" style="width:200px" onblur="compareReporting()" placeholder="YYYY/MM/DD" /></div>
        
    <div class="fr"><strong>Month of Reporting:</strong><br />
    <input type="text" id="reportDate" name="reportdate" style="width:200px" onblur="compareReporting()" placeholder="YYYY/MM/DD" /></div>
     <div class="clear"></div> 
     <br />     
            
    <h3 style="color:#069;">Source of Information:</h3>
   <select name="source" onchange="hideEmployee()" id="hide">
   <option value="">Select....</option>
   <option value="Agribuiness Diary">Agribuiness Diary</option>
   <option value="Interview with Owner">Interview with Subproject Owner</option>
   <option value="Agribuiness and Interview with Subproject Owner">Agribuiness Interview</option>
   <option value="Other">Other</option>
   </select>
   <br />
<br />
    <div class="clear"></div>      
    <br />
    <div id="show_tableData">
    <table width="100%" cellpadding="3" id="dataTable" cellspacing="1" bgcolor="#333333">
  <tr>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
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
  <tr>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser" id="sn_byUser"  style="width: 30px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><div id="detail"></div></td>
    <td align="center" bgcolor="#FFFFFF"><div id="sector"></div></td>
    <td align="center" bgcolor="#FFFFFF"><div id="unit"></div></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_quantity" id="remaining_quantity"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_price" id="remaining_price"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_gc" id="remaining_gc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="remaining_pc" id="remaining_pc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_quantity" id="claim_quantity"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_price" id="claim_price"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_gc" id="claim_gc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="claim_pc" id="claim_pc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_quantity" id="grant_quantity"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_price" id="grant_price"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_gc" id="grant_gc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="grant_pc" id="grant_pc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="reim123" class="dropdown-select">
      <option value="High">High Bill Amount</option>
      <option value="Approved">Approved Allocation Insufficient</option>
      <option value="Claim">Claim after Completion of Work</option>
       <option value="Beyond">Beyond Term of Contract</option>
        <option value="other">Others</option>
    </select></div>
    <!--<select name="reim123">
      <option value="High">High Bill Amount</option>
      <option value="Approved">Approved Allocation Insufficient</option>
      <option value="Claim">Claim after Completion of Work</option>
      <option value="Beyond">Beyond Term of Contract</option>
      <option value="Others">Others</option>
    </select>--></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_quantity" id="balance_quantity"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_price" id="balance_price"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_gc" id="balance_gc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="balance_pc" id="balance_pc"  style="width: 135px;" /></td>
    <td align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="status1" class="dropdown-select">
      <option value="Initial">Initial Stage</option>
      <option value="Partially">Partially Completed</option>
      <option value="Fully">Fully Completed</option>
    </select></div></td>
  </tr>
</table>
	
    
<div class="clear"></div><br /></div>


<div id="show_me"></div>
<!--<input type="button" class="add-labor fr mr" value="Add Row" onclick="addRow()"/>-->
<div class="clear"></div>

</form>
</div>
<?php 

	///////////// first if ends here  
	}
	else
	{	
 header("location:../index.php");
	}
	 ?> 
<?php include('../inc/footer.php'); ?>

