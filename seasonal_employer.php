<?php
session_start();
error_reporting(0);
 include('inc/header.php'); ?>
<?php include('inc/nav.php'); ?>


<?php

		if(isset($_SESSION['id'])){
		include("get_projectList.php");
		include 'get_projectCode.php'; 
		unset($_SESSION['forRegular']);
			
			  ?>
        
<div class="content-wrapper">
<script src="js/seasonal_js.js" ></script>

   
<br />
<form action="insert_seasonal.php" method="post" id="regForm">

<br />

 <div class="clear"></div> 
 
 <h2 style="color:#069;">Operating Expences of Business Plan</h2>   
  
  <span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;"><?php
		  $query1 = mysql_query("select project_code,name_add_proponent from projectdetail");	
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
      <?php   
				$code = $_SESSION['project_code'];
				 $sql_getRegular = "select * from expenses where project_code = '$code' and detail = 'Labor_seasonal'";
				$query_getRegular = mysql_query($sql_getRegular);
echo '<div id="hidess">';
  if(mysql_num_rows($query_getRegular) > 0){ ?>
  <tr>
  <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Sn.</strong></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Types of Employee</strong></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Sex of Employee</strong></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong>Caste and Ethnicity<br />
    </strong></td>
    <td height="50" rowspan="2" align="center" bgcolor="#E8F8FF"><strong> Local Employee<br />
    </strong></td>
  </tr>
   <tr> <!-- Dnt remove this row --> 
   </tr>
  
  <?php if(mysql_num_rows($query_getRegular) == 1){ ?>
  <tr>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser[]" id="sn_byUser"  style="width: 30px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="type[]">
    
    <option value="">Select Employee</option>
      <option value="labor">Labor and Argo Worker</option>
      <option value="engineer">Engineer</option>
      <option value="technician">Technician</option>
      <option value="managerial_staff">Managerial Staff</option>
      <option value="office_support">Office Support Staff</option>
      <option value="accountant">Accountant</option>
      <option value="other">Other</option>
    </select></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="sex[]">
      <option value="">Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      
    </select></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="caste[]">
      <option value="">Caste and Ethnicity</option>
      <option value="bahun">Bahun or Chhetri</option>
      <option value="janajati">Janajati</option>
      <option value="dalit">Dalits</option>
      <option value="other">Others</option>
    </select></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="local[]">
      <option value="">Local Employee</option>	
      <option value="yes">Yes</option>
      <option value="no">No</option>
     
    </select></td>
  
  </tr>
  
  <?php
  }  
   elseif(mysql_num_rows($query_getRegular) > 1){
   for($i = 0;$i < mysql_num_rows($query_getRegular);$i++)
	
	{ ?>
  
  <tr>
  <td height="50" align="center" bgcolor="#FFFFFF"><input type="text" name="sn_byUser[]" id="sn_byUser"  style="width: 30px;" /></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="type[]">
    
    <option value="">Select Employee</option>
      <option value="labor">Labor and Argo Worker</option>
      <option value="engineer">Engineer</option>
      <option value="technician">Technician</option>
      <option value="managerial_staff">Managerial Staff</option>
      <option value="office_support">Office Support Staff</option>
      <option value="accountant">Accountant</option>
      <option value="other">Other</option>
    </select></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="sex[]">
      <option value="">Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      
    </select></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="caste[]">
      <option value="">Caste and Ethnicity</option>
      <option value="bahun">Bahun or Chhetri</option>
      <option value="janajati">Janajati</option>
      <option value="dalit">Dalits</option>
      <option value="other">Others</option>
    </select></td>
    <td height="50" align="center" bgcolor="#FFFFFF"><select name="local[]">
      <option value="">Local Employee</option>	
      <option value="yes">Yes</option>
      <option value="no">No</option>
     
    </select></td>
  
  </tr>
  
  <?php } } } else echo "<h3>SORRY! NO DATA FOUND</h3>"."</div>";  ?>
  </table>

<br />

<input type="submit" class="submit fr ml" value="Insert" />
<!--<input type="button" class="add-labor fr mr" id="add_labor" value="Add Labor"  onClick="addRow(dataTable)" />-->


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
		header("location:index.php");
	}
	 ?> 

<?php include('inc/footer.php'); ?>
