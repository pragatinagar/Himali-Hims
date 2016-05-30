
<?php
//error_reporting(0);
session_start();

include('../inc/header.php');
include('../inc/nav.php');
include('../db.php');
include('../models/show_proposed.php'); ?>
<script src="../js/edit_purposed_labor.js"></script>
<div class="content-wrapper">
<?php

$id = $_GET['pid'];
if(isset($_SESSION['id']))
{ 
?>
<form action="update_proposed_labor.php" method="post" id="regForm"  >

<h2 style="color:#069;">Edit Revenue</h2>   

<div id="projectDetail"> </div>

<div class="clear"></div>

<br />

<table id="dataTable" width="100%" align="center" cellpadding="5" cellspacing="1" bgcolor="#333333" >
<tr>
<td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
<td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:125px;"><strong>Types of Employee</strong></div></td>
<td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:105px;"><strong>Labor</strong></div></td>
<td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Sex of Employee</strong></td>
<td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:140px;"><strong>Caste and Ethnicity</strong></div></td>
<td rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:92px;"><strong>Unit</strong></div></td>
<td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:120px;"><strong>Local Employee</strong></div></td>   

<td colspan="5" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Cost per Unit (In NRs)</strong></td>
<td colspan="5" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>

<td colspan="5" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Total Expences (In NRs)</strong></td>
</tr>
<tr>
</tr>
<input type="hidden" id="hiddenId" name="hiddenId" value="<?php echo $_GET['pid']; ?>" />
<?php 

$result = select_table_oneWhere('labor','id',$_GET['pid']);
while($data = mysql_fetch_array($result))
{

?>
<tr>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser" id="sn_byUser" value="<?php echo $data['sn_byUser']; ?>"  style="width: 30px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="type" class="dropdown-select">

<option value="">Select Employee</option>
<option value="labor">Labor and Argo Worker</option>
<option value="engineer">Engineer</option>
<option value="technician">Technician</option>
<option value="managerial_staff">Managerial Staff</option>
<option value="office_support">Office Support Staff</option>
<option value="accountant">Accountant</option>
<option value="other">Other</option>
</select></div></td>
<td height="50" align="center" bgcolor="#FFFFFF"> <div class="dropdown"><select name="detail" id="labor"  class="dropdown-select">
<option value="">Select Labor</option>
<option value="Full_time">Full Time</option>
<option value="Seasonal">Seasonal</option>        
</select></div></td>

<td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="sex" class="dropdown-select">
<option value="">Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>      
</select></div></td>

<td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="caste" class="dropdown-select">
<option value="">Caste and Ethnicity</option>
<option value="bahun">Bahun or Chhetri</option>
<option value="janajati">Janajati</option>
<option value="dalit">Dalits</option>
<option value="other">Others</option>
</select></div></td>

<td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="unit" class="dropdown-select">
<option value="">Select Unit</option>     
<option value="hour">Hour</option>  
<option value="day">Day</option>
<option value="month">Month</option> 
<option value="year">Year</option>
<option value="lumpsum">Lumpsum</option>     
<option value="other">Others</option>
</select></div></td>

<td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="local" class="dropdown-select">
<option value="">Local Employee</option>	
<option value="yes">Yes</option>
<option value="no">No</option>
</select></div></td>

<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y1" id="y1" value="<?php echo $data['y1']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y2" id="y2" value="<?php echo $data['y2']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y3" id="y3" value="<?php echo $data['y3']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y4" id="y4" value="<?php echo $data['y4']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y5" id="y5" value="<?php echo $data['y5']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y6" id="y6" value="<?php echo $data['y6']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y7" id="y7" value="<?php echo $data['y7']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y8" id="y8" value="<?php echo $data['y8']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y9" id="y9" value="<?php echo $data['y9']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="y10" id="y10" value="<?php echo $data['y10']; ?>" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>

<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total1" id="t1" value="<?php echo $data['total1']; ?>" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total2" id="t2" value="<?php echo $data['total2']; ?>" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total3" id="t3" value="<?php echo $data['total3']; ?>" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total4" id="t4" value="<?php echo $data['total4']; ?>" style="width: 30px; font-size:11px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="total5" id="t5" value="<?php echo $data['total5']; ?>" style="width: 30px; font-size:11px;" /></td>

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
