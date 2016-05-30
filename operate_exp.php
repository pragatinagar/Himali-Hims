<?php
error_reporting(0);
session_start();

include('inc/header.php');
include('inc/nav.php'); ?>

<div class="content-wrapper">

<?php
	if(isset($_SESSION['id']))
	{	
	include 'get_projectCode.php'; 
?>
	<script src="js/operate.js" ></script>
<script>
$(function () {
  $('#regForm').on('keyup keypress', "input", function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
    //  alert("Na na na! You can't press Enter!");
      e.preventDefault();
      return false;
    }
  });
});
 </script>
<form action="insert_expences.php" method="post" id="regForm"  >


 <h2 style="color:#069;">Operating Expences of Business Plan</h2>   
  
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
		  $query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc");	
		  echo 'Select Project: '.'<select required name="projectid" id="myHref" >';
		  echo "<option value=''>Select</option>";	
		  while($data1 = mysql_fetch_array($query1))
		  echo "<option value=\"$data1[0]\">$data1[0]</option>";		  		  
		  echo '</select>';	  
	  ?></span>
     <div id="projectDetail"> </div>
  
 <div class="clear"></div>
 
   <br />

<table id="dataTable" width="100%" align="center" cellpadding="5" cellspacing="1" bgcolor="#333333" >

<tr>
  <td width="21%" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
  <td width="15%" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Select Unit</strong></td>
   <td width="15%" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Others</strong></td>
  
  <td colspan="5" align="center" bgcolor="#E8F8FF"><strong>Cost per Unit (In NRs)</strong></td>
  <td colspan="5" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
  
  <td colspan="5" align="center" bgcolor="#E8F8FF"><strong>Total Expences (In NRs)</strong></td>
 
</tr>
<tr>
  <td width="7%" align="center" bgcolor="#E8F8FF">3.1<br />
    Y1</td>
  <td width="7%" align="center" bgcolor="#E8F8FF">3.2<br />
    Y2</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">3.3<br />
    Y3</td>
  <td width="7%" align="center" bgcolor="#E8F8FF">3.4<br />
    Y4</td>
  <td width="7%" align="center" bgcolor="#E8F8FF">3.5<br />
    Y5</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">4.1<br />
    Y1</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">4.2<br />
    Y2</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">4.3<br />
    Y3</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">4.4<br />
    Y4</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">4.5<br />
    Y5</td>
     <td width="7%" align="center" bgcolor="#E8F8FF">5.1<br />
    Y1</td>
  <td width="7%" align="center" bgcolor="#E8F8FF">5.2<br />
    Y2</td>
  <td width="6%" align="center" bgcolor="#E8F8FF">5.3<br />
    Y3</td>
  <td width="7%" align="center" bgcolor="#E8F8FF">5.4<br />
    Y4</td>
  <td width="7%" align="center" bgcolor="#E8F8FF">5.5<br />
    Y5</td>
</tr>
<tr>
  <td align="center" bgcolor="#FFFFFF">
  
    <div class="dropdown">
  <select name="agri_input[]" id="agri_input" onchange="cheakMulti1()" class="dropdown-select" >   <!--add onclick event that will call check_lumpsum-->
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
   <select name="agri_unit[]" id="agri_unit" class="dropdown-select" >
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
  </select>
  </div>
  </td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="nameOfOther[]" style="width: 120px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y1[]" id="y1" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y2[]" id="y2" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y3[]" id="y3" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y4[]" id="y4" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y5[]" id="y5" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y6[]" id="y6" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y7[]" id="y7" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y8[]" id="y8" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y9[]" id="y9" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="agri_y10[]" id="y10" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;;" /></td>
  	 
   <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="rent_y6[]" id="t1" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="rent_y7[]" id="t2" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="rent_y8[]" id="t3" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="rent_y9[]" id="t4" style="width: 30px; font-size:11px;" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="rent_y10[]" id="t5" style="width: 30px; font-size:11px;" /></td>
</tr>

    <div class="clear"></div>
    
    </table>
    <br/>
       
	<div class="clear"></div>    
    
    <input type="submit" class="submit fr ml" name="submit" value="Insert" id="submit" />
    <input type="button" class="add-labor fr mr" id="agri" value="Add Row"  onclick="addRow()" />
    </form>
    <div class="clear"></div>
    
    </div><?php } else 
	{	if( $_SERVER['HTTP_HOST'] == 'localhost') header('Location: index.php');
		else{
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/index.php\")";
	echo "</script>"; }	
	}?>

<?php include('inc/footer.php'); ?>
</html>