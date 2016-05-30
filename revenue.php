<?php
session_start();
error_reporting(0);
include('inc/header.php');
include('inc/nav.php');

if(isset($_SESSION['id'])){

include("get_projectList.php");
?>
<div class="content-wrapper">

<?php 
include 'get_projectCode.php'; 
?>
<script src="js/proposed_common.js" ></script>
<script src="js/revenue_js.js" ></script>
<form action="insert_revenue.php" method="post" id="regForm" >
<h2 style="color:#069;">Revenue of Business Plan</h2>   

<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
$query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc");	
echo 'Select Project: '.'<select name="projectid" id="myHref" required>';
echo "<option value=''>Select</option>";
while($data1 = mysql_fetch_array($query1))
echo "<option value=\"$data1[0]\">$data1[0]</option>";		  
echo '</select>';	  
?></span>
<div id="projectDetail"> 
</div>

 <div class="clear"></div>
 
   <br />
	<table width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333" id="dataTable">
  <tr>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    
    <!--<td rowspan="2" align="center" bgcolor="#E8F8FF">S. No</td>-->
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Type of Products</strong></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Unit</strong></td>
    <td height="25" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Price (in NRs)</strong></td>
    <td height="25" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
    <td height="25" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Revenue (in NRs)</strong></td>
  </tr>
  <tr>
    <td height="44" align="center" bgcolor="#E8F8FF">4.1<br />
    Y1</td>
    <td height="44" align="center" bgcolor="#E8F8FF">4.2<br />
    Y2</td>
    <td height="44" align="center" bgcolor="#E8F8FF">4.3<br />
    Y3</td>
    <td height="44" align="center" bgcolor="#E8F8FF">4.4<br />
    Y4</td>
    <td height="44" align="center" bgcolor="#E8F8FF">4.5<br />
      Y5</td>
    <td height="44" align="center" bgcolor="#E8F8FF">5.1<br />
    Y1</td>
    <td height="44" align="center" bgcolor="#E8F8FF">5.2<br />
    Y2</td>
    <td height="44" align="center" bgcolor="#E8F8FF">5.3<br />
    Y3</td>
    <td height="44" align="center" bgcolor="#E8F8FF">5.4<br />
    Y4</td>
    <td height="44" align="center" bgcolor="#E8F8FF">5.5<br />
      Y5</td>
    <td height="44" align="center" bgcolor="#E8F8FF">6.1<br />
    Y1</td>
    <td height="44" align="center" bgcolor="#E8F8FF">6.2<br />
    Y2</td>
    <td height="44" align="center" bgcolor="#E8F8FF">6.3<br />
    Y3</td>
    <td height="44" align="center" bgcolor="#E8F8FF">6.4<br />
    Y4</td>
    <td height="44" align="center" bgcolor="#E8F8FF">6.5<br />
    Y5</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="sn[]" style="width: 30px;" /></td>
    
    <!--<td align="center" bgcolor="#FFFFFF"><input type="text" style="width:20px; text-align:center;" name="sn[]" /></td>-->
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="detail[]" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF">
    
    <div class="dropdown">
    <select name="product_type[]" class="dropdown-select">
      <option value="">Select Products</option>
      <option value="main">Main Products</option>
      <option value="by">By-Products</option>
      <option value="salvage">Salvage</option>
    </select>
    </div>
    </td>
    <td height="50" align="center" bgcolor="#FFFFFF">
    
    <div class="dropdown">
    <select name="unit[]" class="dropdown-select">
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
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q1[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q2[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q3[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q4[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q5[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p1[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p2[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p3[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p4[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p5[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r1[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r2[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r3[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r4[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r5[]" onkeyup="cheakMulti1()" style="width: 30px; font-size:11px;" /></td>
  </tr>
  
</table>


<div class="clear"></div><br />


<input type="submit" name="sub" value="Insert" class="submit fr ml" />
<input type="button" class="add-labor fr mr" id="add_revenue " value="Add Revenue"  onClick="addRow(dataTable)" />

<br />
<br />
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
		if( $_SERVER['HTTP_HOST'] == 'localhost') header('Location: index.php');
		else{
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/index.php\")";
	echo "</script>"; }	
	
	}
	  include('inc/footer.php'); ?>
