<?php
//error_reporting(0);
session_start();

include('../inc/header.php');
include('../inc/nav.php');
include('../db.php');
include('../models/show_proposed.php'); ?>

<div class="content-wrapper">
<?php

$id = $_GET['pid'];
if(isset($_SESSION['id']))
{ 
?>
<form action="update_proposed_investment.php" method="post" id="regForm"  >

<h2 style="color:#069;">Edit Revenue</h2>   

<div id="projectDetail"> </div>

<div class="clear"></div>

<br />

<table id="dataTable" width="100%" align="center" cellpadding="5" cellspacing="1" bgcolor="#333333" >
<tr>
<td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
<td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>

<td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Sector of Investment</strong></td>
<br>

<td height="25" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Details of Contract Approved in Concern Investment Head</strong></td>
</tr>
<tr>
<td width="9%" rowspan="2" align="center" bgcolor="#E8F8FF">Unit</td>   
<td width="9%" rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
<td width="9%" rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
<td height="25" colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>  
</tr>
<tr>
<td width="9%" height="44" align="center" bgcolor="#E8F8FF">Grant Contribution</td>
<td width="9%" height="44" align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
</tr>

<input type="hidden" id="hiddenId" name="hiddenId" value="<?php echo $_GET['pid']; ?>" />
<?php 

$result = select_table_oneWhere('investment','id',$_GET['pid']);
while($data = mysql_fetch_array($result))
{

?>
<tr>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser" id="sn_byUser" value="<?php  echo $data['sn_byUser'];?>"  style="width: 30px;" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="detail" value="<?php  echo $data['detail'];?>" /></td> 
<td height="50" align="center" bgcolor="#FFFFFF">
<div class="dropdown">
<select name="select_sector" class="dropdown-select">
<option value="">Sector of Investment</option>
<option value="Civil">Civil Works</option>
<option value="Machinery">Machinery and Equipment</option>
<option value="Other">Other Investments</option>
</select>
</div>
</td> 

<td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="unit" class="dropdown-select">
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
<option value="lumpsum">Lumpsum </option>
<option value="other">Others </option>
</select></div></td>

<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="per_unit" value="<?php  echo $data['per_unit'];?>" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="quality" value="<?php  echo $data['quality'];?>" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="grant" value="<?php  echo $data['grant_contribution'];?>" /></td>
<td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="proponent" value="<?php  echo $data['Proponent_contribution'];?>" /></td> 
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
