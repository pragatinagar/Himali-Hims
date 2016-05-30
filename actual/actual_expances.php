
<?php
 session_start();
 include('../db.php');
 include('../inc/header.php');
 include('../inc/nav.php'); 
	if(isset($_SESSION['id'])){ 		
	include("../get_projectCode.php");
	$project_code = $_SESSION['project_code'];
	
 ?>
<script src="../js/actual_expances_all.js"></script>
<script src="../js/common_actual.js"></script> 
<!-- <script src="../js/output_revenue.js"></script> -->
<div class="content-wrapper">
        
<form action="insert_expances.php" method="post" id="regForm">
 	<h3 style="color:#069;">Operating Expances</h3> 
 	<?php include('actualHeader/actual_header.php'); ?>
        <input type="hidden" name="userId" id="userId" />  
    
<table id="dataTable" width="100%" align="center" cellpadding="5" cellspacing="1" bgcolor="#333333" >

<tr>
  <td width="21%" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
  <td width="21%" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
  <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Cost per Unit(In NRs)</strong></td>
   <td width="15%" align="center" bgcolor="#E8F8FF"><strong>Total Cost(In NRs)</strong></td>
   
  
  </tr>
<tr>
  <td align="center" bgcolor="#FFFFFF"><input type="text" name="sn" style="width: 60px;" /></td>
  <td align="center" bgcolor="#FFFFFF">
      <input type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>" />
      <div class="dropdown">
    <select name="detail[]" id="detail" class="dropdown-select" >   <!--add onclick event that will call check_lumpsum-->
      <optgroup label="Agriculture Input">
        <option value="" hidden>Agriculture Input</option>
        <option value="Feeder">Feeder</option>
        <option value="Fertilizer">Fertilizer</option>
        <option value="Seeds">Seeds</option>
        <option value="Medicine">Medicine</option>
        <option value="Pesticide">Pesticide</option>
        <option value="Insecticide">Insecticide</option>
        <option value="agri_other">Other</option>
        
        </optgroup>
      
      <optgroup label="Marketing and Distribution">
        <option value="" hidden>Marketing and Distribution</option>
        <option value="Transport">Transport</option>
        <option value="Promotion and Advertisement">Promotion and Advertisement</option>
        <option value="Packing">Packing</option>
        <option value="Distribution">Distribution</option>
        <option value="Storage">Storage</option>
        <option value="Insurance">Insurance</option>
        <option value="marketing_other">Other</option>
        
        </optgroup>
      
      
      <optgroup label="Lease, Power, Fuel and Utilities">
        <option value="" hidden>Lease, Power, Fuel and Utilities</option>
        <option value="Firewood">Firewood</option>
        <option value="Kerosene">Kerosene</option>
        <option value="Petrol">Petrol</option>
        <option value="Diesel">Diesel</option>
        <option value="Electricity">Electricity</option>
        <option value="Water">Water</option>
        <option value="lease_other">Other</option>
        </optgroup>
      
      <optgroup label="Repairs and Mantenance">
        <option value="" hidden>Repairs and Mantenance</option>
        <option value="Repairs_Civil_work">Civil works</option>
        <option value="Repairs_Machinery_Equipments">Machinery and Equipments</option>
        </optgroup>
      
      <optgroup label="Others">
        <option value="" hidden>Others</option>
        <option value="Others_other">Other</option>
        <option value="Others_land_rent">Land Rent</option>
        </optgroup>  </select>
        </div>
        </td>
  <td height="50" align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="unit[]" id="unit"  class="dropdown-select">
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
      <option value="lumpsum">Lumpsum</option>
      <option value="other">Other</option>
      </select></div></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="quantity[]" style="width: 120px;" /></td>
   <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="cost[]" style="width: 120px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total[]" style="width: 120px;" /></td>
    
</tr>

    <div class="clear"></div>
    
    </table>


<div class="clear"></div><br />
<input type="submit" class="submit fr ml" id="submit" value="Submit" />
<input type="button" class="add-labor fr mr" id="agri4" value="Add Row" onclick="addRow()"/>

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

