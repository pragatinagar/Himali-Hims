
 <?php
	 session_start();
	 include('../db.php');
	 include('../inc/header.php');
	 include('../inc/nav.php'); 
	if(isset($_SESSION['id'])){ 		
	include("../get_projectCode.php");
	$project_code = $_SESSION['project_code'];
 ?>
<script src="../js/output_revenue.js"></script>
<script src="../js/common_actual.js"></script> 
<script src="../js/output_check.js"></script> 

<div class="content-wrapper">
        
<form action="insert_revenue.php" method="post" id="regForm">
	<h3 style="color:#069;">Output And Revenue</h3> 
		<?php include('actualHeader/actual_header.php'); ?>
   
    <div id="projectDetail"> </div>  
    <div class="clear"></div>      
    <br />
<table id="dataTable" width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333">
  <tr>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:110px;"><strong>Type of Products</strong></div></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:90px;"><strong>Unit</strong></div></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells in Local Market and Neighbors for Household Consumption</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells to Traders or Commercial Users in Local Market</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Sells beyond Local Market (Agriculture Market Centre, Cities and Export)</strong></td>
    <td colspan="3" align="center" bgcolor="#E8F8FF"><strong>Others (Household Use, Gifts, Feeder to Livestock and other non-commercial use)</strong></td>
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
  <tr align="center">
    <td bgcolor="#FFFFFF"><input type="text" name="sn[]" id="sn" style="width:30px;" /> </td>
    <td bgcolor="#FFFFFF"><input type="text" name="detail[]" id="detail" /></td>
    <td bgcolor="#FFFFFF">
    <div class="dropdown">
    
    <select name="select[]" class="dropdown-select">
      <option value="">Main Products</option>
      <option value="">By-Products</option>
    </select>
    </div>
    </td>
    <td bgcolor="#FFFFFF">
    
    <div class="dropdown">
    <select name="unit[]" class="dropdown-select" >
          <option value="">Select Unit</option>
          <option value="kg">KG</option>
          <option value="liter">Liter</option>
          <option value="number">Number</option>
          <option value="hour">Hour</option>
          <option value="day">Day</option>
          <option value="month">Month</option>
          <option value="year">Year</option>
          <option value="feet">Feet</option>
          <option value="square_feet">Square Feet</option>
          <option value="other">Others </option>
          <option value="lumpsum">Lumpsum </option>
        </select>
        </div>
        </td>
    <td bgcolor="#FFFFFF">
      <input type="text" name="quantity[]" id="quantity" style="width:40px;" />    
     </td>
    <td bgcolor="#FFFFFF"><input type="text" name="local_quantity[]" id="local_quantity" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="local_price[]" id="local_price" style="width:40px;" /> </td>
    <td bgcolor="#FFFFFF"><input type="text" name="local_revenue[]" id="local_revenue" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="traders_quantity[]" id="traders_quantity" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="traders_price[]" id="traders_price" style="width:40px;" /> </td>
    <td bgcolor="#FFFFFF"><input type="text" name="traders_revenue[]" id="traders_revenue" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="beyond_quantity[]" id="beyond_quantity" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="beyond_price[]" id="beyond_price" style="width:40px;" /> </td>
    <td bgcolor="#FFFFFF"><input type="text" name="beyond_revenue[]" id="beyond_revenue" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="others_quantity[]" id="others_quantity" style="width:40px;" /></td>
    <td bgcolor="#FFFFFF"><input type="text" name="others_price[]" id="others_price" style="width:40px;" /> </td>
    <td bgcolor="#FFFFFF"><input type="text" name="others_revenue[]" id="others_revenue" style="width:40px;" /></td>
  </tr>
</table>
<?php
if($_SERVER['HTTP_SERVER'] == 	'localhost')
{}
?>
<div class="clear"></div><br />
<input type="submit" class="submit fr ml" id="submit" value="Submit" />
<input type="button" class="add-labor fr mr" id="agri4" value="Add Row" onclick="addRow()"/>
<input type="button" onclick="checkCondition()" value="Check"  class="check fr mr" />
<div class="clear"></div>
</form>

<div class="clear"></div>

</div>

<!--content-wrapper-->
  <?php 

	///////////// first if ends here  
	}
	else
	{
		header("location:../index.php");
	}
	 ?> 

<?php include('../inc/footer.php'); ?>

