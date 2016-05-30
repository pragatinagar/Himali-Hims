
<?php
session_start();
//error_reporting(0);

 include('../inc/header.php'); 
 include('../inc/nav.php');
 include "db.php"; 
	  
      if(isset($_GET['value']))  ////  if project code is inserted 2 times it will return value
      { echo "<script>";
        echo "alert('Project Code Already Exits')";
        echo "</script>";
      }
		 ?>
<div class="content-wrapper">
<script>
var dropDown,code,Districtcode;
function check_districtCode1()
{
	Districtcode = document.getElementById("project_code").value;
	code = Districtcode.substr(0, 2);
	dropDown = document.getElementById("district").value;
	if(code == '') alert("Project Code is empty");
	else if(code == 03 && dropDown == 'Dolakha'){}
	else if(code == 01 && dropDown == 'Sankhuwasabha'){}
	else if(code == 02 && dropDown == 'Solukhumbu'){}
	else if(code == 04 && dropDown == 'Rasuwa'){}
	else if(code == 05 && dropDown == 'Manang'){}
	else if(code == 06 && dropDown == 'Mustang'){}
	else if(code == 07 && dropDown == 'Dolpa'){}
	else if(code == 08 && dropDown == 'Jumla'){}
	else if(code == 10 && dropDown == 'Humla'){}
	else if(code == 09 && dropDown == 'Mugu'){}
    else if(code == 'MW' && dropDown == 'Mid Western'){}
    else if(code == 'AC' && dropDown == 'Agriculture Enterprises Center'){}
	else
	alert("District is not correct");

	}

</script>
<script>
	$(document).ready(function()
	 {
	 	$('#area').change(function(){
				var value = $('#area').val();
				$.get('../get_ajax.php',{id:value},function(data)
				{ $('#sub-area').html(data);
			}); 

		});	
			});
</script>

<?php
include('../db.php');
$id = $_GET['pid'];
$sql = "select * from projectdetail where project_code = "."'$id'";
$result = mysql_query($sql);
while($data = mysql_fetch_array($result)){
	
	$_SESSION['district'] = $data['district'];
	$code = $data['project_code'];
	$_SESSION['area'] = $data['area'];
	$_SESSION['enterprises'] = $data['enterprises'];
	$_SESSION['scale'] = $data['scale'];
	$_SESSION['sex'] = $data['sex'];
	$_SESSION['project_id'] = $data['project_code'];$_SESSION['name'] = $data['name_add_proponent'];$_SESSION['responsible'] = $data['responsible_person'];
	$_SESSION['objectives'] = $data['objectives'];$_SESSION['Agreement_ad'] = $data['agreement_date_ad'];$_SESSION['Agreement_bs'] = $data['agreement_date_bs'];
	$_SESSION['Completion_ad'] = $data['completion_date_ad'];$_SESSION['Completion_bs'] = $data['completion_date_bs'];$_SESSION['Investment_Nrs'] = $data['total_investment_rs'];
	$_SESSION['Investment_USD'] = $data['total_investment_usd'];$_SESSION['Grant_Contribution_NRs'] = $data['grand_rs'];$_SESSION['Grant_Contribution_USD'] = $data['grand_usd'];
	$_SESSION['Proponent_Contribution_NRs'] = $data['proponent_rs'];$_SESSION['Proponent_Contribution_USD'] = $data['proponent_usd'];$_SESSION['bramin'] = $data['bramin'];
	$_SESSION['janajati'] = $data['janajati'];$_SESSION['dalit'] = $data['dalit'];$_SESSION['other'] = $data['other'];
	$_SESSION['hidden_male'] = $data['hidden_male'];$_SESSION['hidden_female'] = $data['hidden_female'];
	
	}
?>
<form action="update_project_details.php" method="post">
<table width="100%" cellpadding="10" cellspacing="1" bgcolor="#333333">
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">1</td>
    <td height="0" bgcolor="#FFFFFF">Sub Project Code No:</td>
    <td height="0" align="left" bgcolor="#FFFFFF"><input name="project_code" type="text" value="<?php if(isset($code)) echo $code;?>" id="project_code" hidden /><span style="background:#096; text-align:center; padding:10px 30px; color:#FFF; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;"><?php echo $code;?></span></td>
    <td height="0" align="center" bgcolor="#FFFFFF">2</td>
    <td height="0" bgcolor="#FFFFFF">Name and Address of Proponent:</td>
    <td height="0" align="center" bgcolor="#FFFFFF">
    <textarea name="name_proponent" cols="25" rows="5" class="message"  ><?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?></textarea></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">3</td>
    <td height="0" bgcolor="#FFFFFF">Name of Contact of Responsible Person:</td>
    <td height="0" bgcolor="#FFFFFF">
    <textarea name="responsible_person" cols="25" rows="5" class="message" ><?php if(isset($_SESSION['responsible'])) echo $_SESSION['responsible'];?></textarea></td>
    <td height="0" align="center" bgcolor="#FFFFFF">4</td>
    <td height="0" bgcolor="#FFFFFF">Business Objectives:</td>
    <td height="0" align="center" bgcolor="#FFFFFF">
    <textarea name="objectives" cols="25" rows="5" class="message" ><?php if(isset($_SESSION['objectives'])) echo $_SESSION['objectives'];?></textarea></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">5</td>
    <td height="0" bgcolor="#FFFFFF">District</td>
    <td height="0" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="district" id="district" class="dropdown-select" >
      <option value="">Please Select</option>
        <option value="Sankhuwasabha">Sankhuwasabha</option>
        <option value="Solukhumbu">Solukhumbu</option>
        <option value="Dolakha">Dolakha</option>
        <option value="Rasuwa">Rasuwa</option>
        <option value="Manang">Manang</option>
        <option value="Mustang">Mustang</option>
        <option value="Dolpa">Dolpa</option>
        <option value="Jumla">Jumla</option>
        <option value="Mugu">Mugu</option>
        <option value="Humla">Humla</option>
        <option value="Regional">Regional (Mid Western)</option>
      </select>
      </div>
      </td>
    <td height="0" align="center" bgcolor="#FFFFFF">6</td>
    <td height="0" bgcolor="#FFFFFF">Areas / Sectors</td>
    <td height="0" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="area_sector" id="area" class="dropdown-select">
    <option value="">Select Area/Sector</option>
    <option value="Livestrock">Livestrock and Poultry</option>
     
    <option value="Fishery">Fishery</option>
    
    <option value="Vegitable">Vegitable and Spices</option>
          
    <option value="Fruits">Fruits</option>
         
    <option value="MAPs">MAPs and NTFPs</option>
         
    <option label="Miscellaneous">Miscellaneous</option>
   
  </select>
  </div>
  
  <br />
  <div id="sub-area" style="margin-top:10px"></div>
  </td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">7</td>
    <td height="0" bgcolor="#FFFFFF">Type of Enterprises</td>
    <td height="0" bgcolor="#FFFFFF">
    
<div class="dropdown">
  	    <select name="Enterprises" id="type" class="dropdown-select">
     	<option value="">Please Select</option>
        <option value="Cooperative">Cooperative Owned</option>
        <option value="Entrepreneur">Firm/Single Owned</option>
        <option value="Group">Company/Company Owned</option>
      </select>
      
</div>
    
    </td>
    <td height="0" align="center" bgcolor="#FFFFFF">8</td>
    <td height="0" bgcolor="#FFFFFF">Scale of Investment</td>
    <td height="0" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="Investment" id='scale' class="dropdown-select">
      <option value="">Please Select</option>
        <option value="Small">Small Agriculture Business</option>
        <option value="Medium">Medium Agriculture Business</option>
        <option value="Large">Large Agriculture Business</option>
      </select>
      </div>
      </td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF" >9</td>
    <td height="0" bgcolor="#FFFFFF">Caste Classification of Owner</td>
    <td height="0" valign="top" bgcolor="#FFFFFF">
    <div class="dropdown">
      <select name="Caste" class="dropdown-select" style=" position: relative" >
      <option value="">Please Select</option>
        <option value="Brahmin and Chhetri">Brahmin and Chhetri</option>
        <option value="Janajati">Janajati</option>
        <option value="Dalit">Dalit</option>
        <option value="Newar">Newar</option>
        <option value="Others">Others</option>
        <option value="Mixed">Mixed</option>
      </select>
</div>
<table width="100%" cellpadding="10" cellspacing="1" bgcolor="#333333">
<tr><td bgcolor="#FFFFFF" colspan="2" ><strong>9.1- If answer of question 7 is a or c then</strong></td></tr> <br />
<tr><td bgcolor="#FFFFFF">Number of Brahmin and Chhetri Owner</td><td bgcolor="#FFFFFF"><input type="number" class="textField" name="bramin" value="<?php if(isset($_SESSION['bramin'])) echo $_SESSION['bramin'];?>" /></td></tr><br />
<tr><td bgcolor="#FFFFFF">Number of Janajati Owner</td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="janajati" value="<?php if(isset($_SESSION['janajati'])) echo $_SESSION['janajati'];?>"/></td></tr> <br />
<tr><td bgcolor="#FFFFFF">Number of Dalit Owner</td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="dalit" value="<?php if(isset($_SESSION['dalit'])) echo $_SESSION['dalit'];?>"/></td></tr> <br />
<tr><td bgcolor="#FFFFFF">Number of Others </td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="other" value="<?php if(isset($_SESSION['other'])) echo $_SESSION['other'];?>"/></td></tr> <br /></table>

</td>
    <td height="0" align="center" bgcolor="#FFFFFF">10</td>
    <td height="0" bgcolor="#FFFFFF">Sex of Owner</td>
    <td height="0" valign="top" bgcolor="#FFFFFF">
    <div class="dropdown">
<select name="sex" class="dropdown-select" >
      <option value="">Please Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
</div>
<table width="100%" cellpadding="10" cellspacing="1" bgcolor="#333333">		
	<tr><td bgcolor="#FFFFFF" colspan="2" ><strong>10.1- If answer of question 7 is a or c then </strong></td></tr> <br />
	<tr><td bgcolor="#FFFFFF">Number of Male Owner</td><td bgcolor="#FFFFFF"><input type="number" class="textField" name="male_hidden" value="<?php if(isset($_SESSION['hidden_male'])) echo $_SESSION['hidden_male'];?>"/></td></tr> <br /><br />
	<tr><td bgcolor="#FFFFFF">Number of Female Owner</td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="female_hidden" value="<?php if(isset($_SESSION['hidden_female'])) echo $_SESSION['hidden_female'];?>" /></td></tr> <br /> <br />
    
</table> 

</td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">11.1</td>
    <td height="0" bgcolor="#FFFFFF">Agreement Date (AD):</td>
    <td height="0" bgcolor="#FFFFFF"><input checked onclick="document.getElementById('agree_ad').readOnly = false; document.getElementById('agree_bs').readOnly = true;" type="radio" name="type1">

<input name="Agreement_ad" type="text" class="textField" placeholder="yyyy/mm/dd" id="agree_ad" value="<?php if(isset($_SESSION['Agreement_ad'])) echo $_SESSION['Agreement_ad'];?>" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">11.2</td>
    <td height="0" bgcolor="#FFFFFF">Agreement Date (BS):</td>
    <td height="0" bgcolor="#FFFFFF"><input onclick="document.getElementById('agree_ad').readOnly = true; document.getElementById('agree_bs').readOnly = false;" type="radio" name="type1" value="customurl1">

<input readOnly name="Agreement_bs" type="text" class="textField" placeholder="yyyy/mm/dd" id="agree_bs" value="<?php if(isset($_SESSION['Agreement_bs'])) echo $_SESSION['Agreement_bs'];?>" /></td>
  </tr>
  
  <!--- next check box -->
  
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">12.1</td>
    <td height="0" bgcolor="#FFFFFF">Completion Date (AD):</td>
    <td height="0" bgcolor="#FFFFFF"><input checked onclick="document.getElementById('comp_ad').readOnly = false; document.getElementById('comp_bs').readOnly = true;" type="radio" name="type2"><input name="Completion_ad" type="text" class="textField" placeholder="yyyy/mm/dd" id="comp_ad" value="<?php if(isset($_SESSION['Completion_ad'])) echo $_SESSION['Completion_ad'];?>" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">12.2</td>
    <td height="0" bgcolor="#FFFFFF">Completion Date (BS):</td>
    <td height="0" bgcolor="#FFFFFF"><input onclick="document.getElementById('comp_ad').readOnly = true; document.getElementById('comp_bs').readOnly = false;" type="radio" name="type2" value="customurl2"><input readonly name="Completion_bs" type="text" class="textField" placeholder="yyyy/mm/dd" id="comp_bs" value="<?php if(isset($_SESSION['Completion_bs'])) echo $_SESSION['Completion_bs'];?>" /></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">13.1</td>
    <td height="0" bgcolor="#FFFFFF">Total Investment (in NRs):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Investment_Nrs" type="number" min='0' class="textField" id="in_nrs" value="<?php if(isset($_SESSION['Investment_Nrs'])) echo $_SESSION['Investment_Nrs'];?>" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">13.2</td>
    <td height="0" bgcolor="#FFFFFF">Total Investment (in USD):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Investment_USD" type="number" min='0' id="in_usd" class="textField" value="<?php if(isset($_SESSION['Investment_USD'])) echo $_SESSION['Investment_USD'];?>" /></td>
  </tr>
  <tr>        
    <td height="0" align="center" bgcolor="#FFFFFF">14.1</td>
    <td height="0" bgcolor="#FFFFFF">Grant Contribution (in NRs):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Grant_Contribution_NRs" type="number" class="textField" id="grant_cont_nrs" value="<?php if(isset($_SESSION['Grant_Contribution_NRs'])) echo $_SESSION['Grant_Contribution_NRs'];?>" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">14.2</td>
    <td height="0" bgcolor="#FFFFFF">Grant Contribution (in USD):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Grant_Contribution_USD" type="number" class="textField" id="grant_cont_usd" value="<?php if(isset($_SESSION['Grant_Contribution_USD'])) echo $_SESSION['Grant_Contribution_USD'];?>" /></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">15.1</td>
    <td height="0" bgcolor="#FFFFFF">Proponent Contribution (in NRs):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Proponent_Contribution_NRs" type="number" class="textField" id="proponent_cont_nrs" value="<?php if(isset($_SESSION['Proponent_Contribution_NRs'])) echo $_SESSION['Proponent_Contribution_NRs'];?>" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">15.2</td>
    <td height="0" bgcolor="#FFFFFF">Proponent Contribution (in USD):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Proponent_Contribution_USD" type="number" class="textField" id="proponent_cont_usd" value="<?php if(isset($_SESSION['Proponent_Contribution_USD'])) echo $_SESSION['Proponent_Contribution_USD'];?>" /></td>
  </tr>
</table>
<br />
<div class="clear"></div>

<input name="submit" type="submit" value="Update" class="submit fr ml" id="submit" />
</form>

<div class="clear"></div>

</div>

<?php

 include('../inc/footer.php'); ?>