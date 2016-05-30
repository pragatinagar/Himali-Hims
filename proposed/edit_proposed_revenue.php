
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
if(isset($_SESSION['id']))
  { 
?>
<form action="update_proposed_revenue.php" method="post" id="regForm"  >


 <h2 style="color:#069;">Edit Revenue</h2>   
  
  
    <div id="projectDetail"> </div>
  
 <div class="clear"></div>
 
   <br />

<table id="dataTable" width="100%" align="center" cellpadding="5" cellspacing="1" bgcolor="#333333" >
 <tr>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
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
 <input type="hidden" id="hiddenId" name="hiddenId" value="<?php echo $_GET['pid']; ?>" />
<?php 

	$result = select_table_oneWhere('revenue','id',$_GET['pid']);
	while($data = mysql_fetch_array($result))
	{
		
 ?>
		<tr>
    <td align="center" bgcolor="#FFFFFF"><input type="text" name="sn" value="<?php echo $data['sn_byUser'];?>" style="width: 30px;" /></td>
    
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="detail" value="<?php echo $data['detail'];?>" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="product_type" class="dropdown-select">
      <option value="">Select Products</option>
      <option value="main">Main Products</option>
      <option value="by">By-Products</option>
      <option value="salvage">Salvage</option>
    </select></div></td>
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
      <option value="other">Others </option>
      <option value="lumpsum">Lumpsum </option>
    </select></div></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q1" onkeyup="cheakMulti1()" value="<?php echo $data[7];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q2" onkeyup="cheakMulti1()"  value="<?php echo $data[8];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q3" onkeyup="cheakMulti1()"  value="<?php echo $data[9];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q4" onkeyup="cheakMulti1()"  value="<?php echo $data[10];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="q5" onkeyup="cheakMulti1()"  value="<?php echo $data[11];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p1" onkeyup="cheakMulti1()"  value="<?php echo $data[12];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p2" onkeyup="cheakMulti1()"  value="<?php echo $data[13];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p3" onkeyup="cheakMulti1()"  value="<?php echo $data[14];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p4" onkeyup="cheakMulti1()" value="<?php echo $data[15];?>"  style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="p5" onkeyup="cheakMulti1()" value="<?php echo $data[16];?>"  style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r1" onkeyup="cheakMulti1()"  value="<?php echo $data[17];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r2" onkeyup="cheakMulti1()"  value="<?php echo $data[18];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r3" onkeyup="cheakMulti1()"  value="<?php echo $data[19];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r4" onkeyup="cheakMulti1()"  value="<?php echo $data[20];?>" style="width: 30px; font-size:11px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="r5" onkeyup="cheakMulti1()"  value="<?php echo $data[21];?>" style="width: 30px; font-size:11px;" /></td>
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
