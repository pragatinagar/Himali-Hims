<?php
session_start();
error_reporting(0);
 include('inc/header.php'); ?>
<?php include('inc/nav.php'); 
	
		if(isset($_SESSION['id'])){			 
		
		include 'get_projectCode.php'; 
		 ?>
<div class="content-wrapper">
  <script src="js/labor_js.js"></script>   
  	
<form action="insert_labor.php" method="post" id="regForm">

   <h2 style="color:#069;">Labor of Business Plan</h2>
 
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
 
		  $query1 = mysql_query("select project_code,name_add_proponent from projectdetail order by project_code asc");	
		 echo 'Select Project: '.'<select name="projectid" id="myHref" required>';
		 echo "<option value=''>Select</option>";
		 while($data1 = mysql_fetch_array($query1))
		 echo "<option>$data1[0]</option>";		  
		 echo '</select>';	
	  ?></span>
     <div id="projectDetail"> 
     
     </div>
  
 <div class="clear"></div>
 
   <br />
  <table width="100%" cellpadding="3" cellspacing="1" bgcolor="#333333" id="dataTable">
     
  <tr>
  <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>S.N.</strong></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:125px;"><strong>Types of Employee</strong></div></td>
     <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:105px;"><strong>Labor</strong></div></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Sex of Employee</strong></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:140px;"><strong>Caste and Ethnicity</strong></div></td>
    <td rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:95px;"><strong>Unit</strong></div></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><div style="width:120px;"><strong> Local Employee</strong></div></td>   
     
  <td colspan="5" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Cost per Unit (In NRs)</strong></td>
  <td colspan="5" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Quantity</strong></td>
  
  <td colspan="5" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Total Expences (In NRs)</strong></td>
  </tr>
   <tr>
   </tr>
  

  <tr>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser[]" id="sn_byUser"  style="width: 30px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF">
        <div class="dropdown">

    <select name="type[]" class="dropdown-select">
    
    <option value="">Select Employee</option>
      <option value="labor">Labor and Argo Worker</option>
      <option value="engineer">Engineer</option>
      <option value="technician">Technician</option>
      <option value="managerial_staff">Managerial Staff</option>
      <option value="office_support">Office Support Staff</option>
      <option value="accountant">Accountant</option>
      <option value="other">Other</option>
    </select>
    </div>
    </td>
   <td height="50" align="center" bgcolor="#FFFFFF">
   <div class="dropdown">
   <select name="detail[]" id="labor" class="dropdown-select" >
        <option value="">Select Labor</option>
		<option value="Full_time">Full Time</option>
        <option value="Seasonal">Seasonal</option>        
        </select>
        </div>
        </td>
    
    <td height="50" align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="sex[]" class="dropdown-select">
      <option value="">Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>      
    </select>
    </div>
    
    </td>
    
    <td height="50" align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="caste[]" class="dropdown-select">
      <option value="">Caste and Ethnicity</option>
      <option value="bahun">Bahun or Chhetri</option>
      <option value="janajati">Janajati</option>
      <option value="dalit">Dalits</option>
      <option value="other">Others</option>
    </select>
    </div>
    </td>
    
    <td height="50" align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="unit[]" class="dropdown-select">
      <option value="">Select Unit</option>     
      <option value="hour">Hour</option>  
      <option value="day">Day</option>
      <option value="month">Month</option> 
      <option value="year">Year</option>
      <option value="lumpsum">Lumpsum</option>     
      <option value="other">Others</option>
      </select>
      </div>
      </td>
      
    <td height="50" align="center" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="local[]" class="dropdown-select">
      <option value="">Local Employee</option>	
      <option value="yes">Yes</option>
      <option value="no">No</option>
     
    </select>
    </div>
    </td>
  					
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
  
  
  </table>

<br />

<input type="submit" class="submit fr ml" value="Insert" />
<input type="button" class="add-labor fr mr" id="add_labor" value="Add Labor"  onClick="addRow(dataTable)" />
       
           
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
	 ?> 

<?php include('inc/footer.php'); ?>
