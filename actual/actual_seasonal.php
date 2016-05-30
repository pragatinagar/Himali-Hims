
<?php
 session_start();
 include('../db.php');
 include('../inc/header.php');
 include('../inc/nav.php'); 
	if(isset($_SESSION['id'])){ 		
	include("../get_projectCode.php");
	$project_code = $_SESSION['project_code'];	
 ?>
<script src="../js/seasonal_actual.js"></script>
<script src="../js/common_actual.js"></script> 
<script src="../js/dChecking_seasonal.js"></script> 

<div class="content-wrapper">
        
<form action="insert_seasonal.php" method="post" id="regForm">
 	<h3 style="color:#069;">Seasonal Employment</h3>
 	<?php include('actualHeader/actual_header.php'); ?>
    
<table id="dataTable" width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333">
  <tr>
    <td rowspan="3" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><div style="width:100px;"><strong>Types of Employee</strong></div></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><div style="width:100px;"><strong>Sex of Employee</strong></div></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><div style="width:100px;"><strong>Caste and Ethnicity</strong></div></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Family Member</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Local Employee</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>No. of Days Worked</strong></td>
    <td height="50" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Salary per Month</strong></td>
    <td height="50" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Total Salary of Reporting Month (NRs.)</strong></td>
    </tr>
  <tr>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>In Cash (NRs.)</strong></td>
    <td height="50" colspan="4" align="center" bgcolor="#E8F8FF"><strong>In Kind</strong></td>
    </tr>
  <tr>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Detail of Products</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><div style="width:60px;"><strong>Unit</strong></div></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
    <td height="50" align="center" bgcolor="#E8F8FF"><strong>Price per Unit (NRs.)</strong></td>
  </tr>
  
  <tr>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="sn" id="sn" style="width: 40px;"/></td>
    <td align="center" bgcolor="#FFFFFF">
    
    <div class="dropdown"><select name="type_actual[]" class="dropdown-select">
      <option value="">Select Type</option>
      <option value="labor" >Labor and Argo</option>
      <option value="Engineer">Engineer</option>
      <option value="Technician">Technician</option>
      <option value="ManagerialStaff">Managerial Staff</option>
      <option value="OfficeSupport">Office Support Staff</option>
      <option value="Accountant">Accountant</option>
      <option value="Other">Other</option>
    </select></div>
    
    </td>
    <td align="center" bgcolor="#FFFFFF">
<div class="dropdown"><select name="sex_actual[]" class="dropdown-select">
<option value="">Select Sex</option>
<option value="male">Male</option>
<option value="female">Female</option></select></div>
     </td>
    <td align="center" bgcolor="#FFFFFF">
    
    <div class="dropdown"><select name="caste_actual[]" class="dropdown-select">
      <option value="">Select Caste</option>
      <option value="Bahun">Bahun or Chhetri</option>
      <option value="Janajati" >Janajati</option>
      <option value="Dalit">Dalits</option>
      <option value="Other">Others</option>
      </select></div>
      
      </td>
        <td align="center" bgcolor="#FFFFFF">
      <div class="dropdown"><select name="family_actual[]" id="family_actual" class="dropdown-select">
        <option value="">Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        </select></div>
      </td> 
        <td align="center" bgcolor="#FFFFFF">
      <div class="dropdown"><select name="employee_actual[]" id="employee_actual" class="dropdown-select">
       <option value="">Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
        </select></div>
     </td>    
     
    <td align="center" bgcolor="#FFFFFF"><input type="text" id="worked_month" name="worked_month[]" onblur="compareReporting()"  style="width: 40px;"/></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="cash_actual[]" style="width: 50px;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="detail_product[]" style="width: 60px;margin:5px 0;" />
    <input type="text" name="detail_product[]" style="width: 60px;margin:5px 0;" />
    <input type="text" name="detail_product[]" style="width: 60px;margin:5px 0;" /></td>
    <td align="center" bgcolor="#FFFFFF">
        <div class="dropdown"><select class="dropdown-select" name="unit[]">
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
        </select></div>
        
        <div class="dropdown"><select class="dropdown-select" name="unit[]">
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
        </select></div>
        
        <div class="dropdown"><select class="dropdown-select" name="unit[]">
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
        </select></div>        
    </td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="quantity[]"  style="width: 30px;margin:5px 0;" /><br />

      <input type="text" name="quantity[]"  style="width: 30px;margin:5px 0;" /><br />
      <input type="text" name="quantity[]"  style="width: 30px;margin:5px 0;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="price[]"  style="width: 40px;margin:5px 0;" /><input type="text" name="price[]"  style="width: 40px;margin:5px 0;" /><input type="text" name="price[]"  style="width: 40px;margin:5px 0;" /></td>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="salary_actual[]"  style="width: 60px;" /></td>
  </tr>
  
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

	}
	else
	{
 header("location:../index.php");
	}
	 ?> 

<?php include('../inc/footer.php'); ?>

