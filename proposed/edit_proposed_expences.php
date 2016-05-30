
<?php
//error_reporting(0);
session_start();

include('../inc/header.php');
include('../inc/nav.php');
include('../db.php');
include('../models/show_proposed.php');
 ?>
<script>function cheakMulti1() {
		
  var r = document.getElementsByTagName('tr');
  
  for (i = 2; i < r.length; i++) 
  {	
	
	
	r[i].children[14].children[0].value=r[i].children[4].children[0].value*r[i].children[9].children[0].value;
	
	r[i].children[15].children[0].value=r[i].children[5].children[0].value*r[i].children[10].children[0].value;
	
	r[i].children[16].children[0].value=r[i].children[6].children[0].value*r[i].children[11].children[0].value;	
	
	r[i].children[17].children[0].value=r[i].children[7].children[0].value*r[i].children[12].children[0].value;
	
	r[i].children[18].children[0].value=r[i].children[8].children[0].value*r[i].children[13].children[0].value;	

		    if(r[i].children[14].children[0].value == 0)
		   r[i].children[14].children[0].value='';
		    if(r[i].children[15].children[0].value == 0)
		   r[i].children[15].children[0].value='';
		    if(r[i].children[16].children[0].value == 0)
		   r[i].children[16].children[0].value='';
		    if(r[i].children[17].children[0].value == 0)
		   r[i].children[17].children[0].value='';
		    if(r[i].children[18].children[0].value == 0)
		   r[i].children[18].children[0].value='';
	}
		}</script>
<div class="content-wrapper">
<?php

$id = $_GET['pid'];
$sql = "select * from expenses where id = "."'$id'";
$result = mysql_query($sql);
while($data = mysql_fetch_array($result)){
	
	
	$_SESSION['project_code'] = $data['project_code'];
	$_SESSION['detail'] = $data['detail'];
	$_SESSION['unit'] = $data['unit'];
	$_SESSION['nameOfOther'] = $data['nameOfOther'];
	$_SESSION['y1'] = $data['y1'];$_SESSION['y2'] = $data['y2'];$_SESSION['y3'] = $data['y3'];$_SESSION['y4'] = $data['y4'];$_SESSION['y5'] = $data['y5'];
	$_SESSION['y6'] = $data['y6'];$_SESSION['y7'] = $data['y7'];$_SESSION['y8'] = $data['y8'];$_SESSION['y9'] = $data['y9'];$_SESSION['y10'] = $data['y10'];
	$_SESSION['total1'] = $data['total1'];$_SESSION['total2'] = $data['total2'];$_SESSION['total3'] = $data['total3'];$_SESSION['total4'] = $data['total4'];
	$_SESSION['total5'] = $data['total5'];
	
	}

  if(isset($_SESSION['id']))
  { 
?>
<form action="update_proposed_expences.php" method="post" id="regForm"  >


 <h2 style="color:#069;">Operating Expences of Business Plan</h2>   
  
  
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
</tr> <input type="hidden" name="hiddenId" value="<?php echo $_GET['pid']; ?>" />
<?php 

	$result = select_table_oneWhere('expenses','id',$_GET['pid']);
	while($data = mysql_fetch_array($result))
	{
		
 ?>
<tr>
  <td align="center" bgcolor="#FFFFFF">
  
  <div class="dropdown">
  <select name="agri_input" id="agri_input" onchange="cheakMulti1()"  class="dropdown-select">   <!--add onclick event that will call check_lumpsum-->
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
   <select name="agri_unit" id="agri_unit" class="dropdown-select">
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
  </td><input type="hidden" name="hiddenId" value="<?php echo $data['id']; ?>" />
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="nameOfOther" style="width: 120px;" value="<?php echo $data['nameOfOther']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y1" id="y1"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y1']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y2" id="y2"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y2']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y3" id="y3"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y3']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y4" id="y4"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y4']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y5" id="y5"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y5']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y6" id="y6"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y6']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y7" id="y7"  onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y7']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y8" id="y8" onkeyup="cheakMulti1()"  style="width: 30px; font-size:11px;" value="<?php echo $data['y8']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y9" id="y9" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['y9']; ?>" /></td>
 <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y10" id="y10" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;;" value="<?php echo $data['y10']; ?>" /></td>
     
   <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total1" id="t1" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['total1']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total2" id="t2" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['total2']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total3" id="t3" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['total3']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total4" id="t4" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['total4']; ?>" /></td>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total5" id="t5" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" value="<?php echo $data['total5']; ?>" /></td>
</tr>

	<?php } ?>

    <div class="clear"></div>
    
    </table>
    <br/>
       
  <div class="clear"></div>    
    
    <input type="submit" class="submit fr ml" name="submit" value="Update" id="submit" />
    </form>
    <div class="clear"></div>
    
    </div><?php } else 
  { if( $_SERVER['HTTP_HOST'] == 'localhost') header('Location: index.php');
    else{
  echo "<script>";
  echo "window.location.assign(\"http://himali.gov.np/hims/index.php\")";
  echo "</script>"; } 
  }?>

<?php include('../inc/footer.php'); ?>
