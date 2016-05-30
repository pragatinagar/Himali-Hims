<?php
session_start();
error_reporting(0);
   include('inc/header.php');

		include('inc/nav.php');

	if(isset($_SESSION['id'])){
		include("get_projectList.php");
	
			  ?>
              
   <script src="js/investment_js.js" ></script> 
              
<div class="content-wrapper">   

    <?php 
	//include 'get_projectCode.php'; 
	?>
	
<form action="insert_investment.php" method="post" id="regForm">
 
  <h2 style="color:#069;">Investment of Business Plan</h2>   
  
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
 

<table width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333" id="dataTable">
  <tr>
  <td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
  <td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Details</strong></td>
     
    <td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Sector of Investment</strong></td>
    <td width="15%" rowspan="3" align="center" bgcolor="#E8F8FF"><strong>Types of Expances</strong></td>
<br>
  
    <td height="25" colspan="5" align="center" bgcolor="#E8F8FF"><strong>Details of Contract Approved in Concern Investment Head</strong></td>
  </tr>
  <tr>
    <td width="9%" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:95px;">Unit</div></td>   
    <td width="9%" rowspan="2" align="center" bgcolor="#E8F8FF">Price per Unit</td>
     <td width="9%" rowspan="2" align="center" bgcolor="#E8F8FF">Quantity</td>
    <td height="25" colspan="2" align="center" bgcolor="#E8F8FF">Total Cost</td>  
  </tr>
  <tr>
    <td width="9%" height="44" align="center" bgcolor="#E8F8FF">Grant Contribution</td>
    <td width="9%" height="44" align="center" bgcolor="#E8F8FF">Proponent's Contribution</td>
  </tr>
  <tr>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser[]" id="sn_byUser"  style="width: 30px;" /></td>
     <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="detail[]" /></td> 
    <td height="50" align="center" bgcolor="#FFFFFF">
    
    <div class="dropdown">
      <select name="select_sector[]" class="dropdown-select">
      <option value="">Sector of Investment</option>
        <option value="Civil">Civil Works</option>
        <option value="Machinery">Machinery and Equipment</option>
        <option value="Other">Other Investments</option>
      </select>
      </div>
    </td>
    <td align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="select_account[]" class="dropdown-select">
      <option value="">Sector Expenses</option>
        <option value="Civil">Recurrent</option>
        <option value="Machinery">Capital</option>
      </select></div></td> 
   
    <td height="50" align="center" bgcolor="#FFFFFF"><div class="dropdown"><select name="unit[]" class="dropdown-select">
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
    
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="price_perUnit[]" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="quality[]" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="grant[]" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" style="width: 90px;" name="proponent[]" /></td> 
  </tr> 
 </table>
   <div class="clear"></div><br />
 <input type="submit" class="submit fr ml" value="Insert" />
  <input type="button" class="add-labor fr" id="add_labor" value="Add Investment"  onClick="addRow()" />
  <input type="button" onclick="cheakMulti()" value="Check"  class="check fr mr" />
 
</form>    

<div class="clear"></div>

</div>

<!--content-wrapper-->
  <?php 

	///////////// first if ends here  
	}
	else
	{
		if( $_SERVER['HTTP_HOST'] == 'localhost') 
                header('Location: index.php');
		else{
	echo "<script>";
	echo "window.location.assign(\"http://himali.gov.np/hims/index.php\")";
	echo "</script>"; }	
	
	}
	 ?> 

<?php include('inc/footer.php'); ?>
