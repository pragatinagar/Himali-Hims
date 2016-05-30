
<?php
session_start();

error_reporting(0);
 include('inc/header.php'); ?>
<?php include('inc/nav.php');
      include "db.php"; ?>


<?php
      if(isset($_GET['value']))  ////  if project code is inserted 2 times it will return value
      { echo "<script>";
        echo "alert('Project Code Already Exits')";
        echo "</script>";
      }
		if(isset($_SESSION['id'])){ ?>
<div class="content-wrapper">
<script>
var dropDown,code,Districtcode;
function check_districtCode()
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

<h2 style="color:#069;">Sub Project Details</h2>
<script>
	$(document).ready(function()
	 {
	 	$('#area').change(function(){
				var value = $('#area').val();
				$.get('get_ajax.php',{id:value},function(data)
				{ $('#sub-area').html(data);
			}); 

		});	
			});
</script>
<form action="insert_project_details.php" method="post">
<table width="100%" cellpadding="10" cellspacing="1" bgcolor="#333333">
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">1</td>
    <td height="0" bgcolor="#FFFFFF">Sub Project Code No:</td>
    <td height="0" bgcolor="#FFFFFF"><input name="project_code" type="text" class="textField" id="project_code"/></td>
    <td height="0" align="center" bgcolor="#FFFFFF">2</td>
    <td height="0" bgcolor="#FFFFFF">Name and Address of Proponent:</td>
    <td height="0" align="center" bgcolor="#FFFFFF"><textarea name="name_proponent" cols="25" rows="5" class="message" ></textarea></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">3</td>
    <td height="0" bgcolor="#FFFFFF">Name of Contact of Responsible Person:</td>
    <td height="0" bgcolor="#FFFFFF"><textarea name="responsible_person" cols="25" rows="5" class="message" ></textarea></td>
    <td height="0" align="center" bgcolor="#FFFFFF">4</td>
    <td height="0" bgcolor="#FFFFFF">Business Objectives:</td>
    <td height="0" align="center" bgcolor="#FFFFFF"><textarea name="objectives" cols="25" rows="5" class="message" ></textarea></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">5</td>
    <td height="0" bgcolor="#FFFFFF">District</td>
    <td height="0" bgcolor="#FFFFFF">
    <div class="dropdown">
    <select name="district" required id="district" onchange="check_districtCode()" class="dropdown-select">
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
  	    <select name="Enterprises" id="type" onchange="my_change()" class="dropdown-select">
     	<option value="">Please Select</option>
        <option value="Cooperative">Cooperative Owned</option>
        <option value="Entrepreneur">Firm/Single Owned</option>
        <option value="Group">Company/Company Owned</option>
      </select>
      
      </div>
      <script>
	  	function my_change()
		{			
			var type,show;
			type = document.getElementById('type').value;
			if(type == 'Cooperative' || type == 'Group'){		
show = '';		
show += '<table width="100%" cellpadding="10" cellspacing="1" bgcolor="#333333">';
show += '<tr><td bgcolor="#FFFFFF" colspan="2" ><strong>9.1- If answer of question 7 is a or c then</strong></td></tr> <br />';
show += '<tr><td bgcolor="#FFFFFF">Number of Brahmin and Chhetri Owner</td><td bgcolor="#FFFFFF"><input type="number" class="textField" name="bramin" /></td></tr><br />';
show += '<tr><td bgcolor="#FFFFFF">Number of Janajati Owner</td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="janajati" /></td></tr> <br />';
show += '<tr><td bgcolor="#FFFFFF">Number of Dalit Owner</td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="dalit" /></td></tr> <br />';
show += '<tr><td bgcolor="#FFFFFF">Number of Others </td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="other"/></td></tr> <br /></table>';
display = '';
display += '<table width="100%" cellpadding="10" cellspacing="1" bgcolor="#333333">';		
display += '<tr><td bgcolor="#FFFFFF" colspan="2" ><strong>10.1- If answer of question 7 is a or c then </strong></td></tr> <br />';
display += '<tr><td bgcolor="#FFFFFF">Number of Male Owner</td><td bgcolor="#FFFFFF"><input type="number" class="textField" name="male_hidden" /></td></tr> <br /><br />';
display += '<tr><td bgcolor="#FFFFFF">Number of Female Owner</td><td bgcolor="#FFFFFF"><input type="number" min="0" class="textField" name="female_hidden" /></td></tr> <br /> <br />';
display += '</table> <br />';
	
	document.getElementById("showSex").style.visibility = "hidden";
	document.getElementById("display").innerHTML = display;	
	document.getElementById("show_91").innerHTML = show;
	}
//	else{

//	}
		}
	  </script>

    
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
    <td height="0" bgcolor="#FFFFFF">
    <div class="dropdown">
      <select name="Caste"  class="dropdown-select">
      <option value="">Please Select</option>
        <option value="Brahmin and Chhetri">Brahmin and Chhetri</option>
        <option value="Janajati">Janajati</option>
        <option value="Dalit">Dalit</option>
        <option value="Newar">Newar</option>
        <option value="Others">Others</option>
        <option value="Mixed">Mixed</option>
      </select>
</div>
<div id="show_91"></div>

</td>
    <td height="0" align="center" bgcolor="#FFFFFF">10</td>
    <td height="0" bgcolor="#FFFFFF">Sex of Owner</td>
    <td height="0" bgcolor="#FFFFFF"><div id="showSex">
<div class=" fl mr"><input name="sex" type="radio" value="male" checked="checked" /> Male</div>
<div class=" fl mr ml"><input name="sex" type="radio" value="female" /> Female</div></div>
<div id="display"></div></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">11.1</td>
    <td height="0" bgcolor="#FFFFFF">Agreement Date (AD):</td>
    <td height="0" bgcolor="#FFFFFF"><input checked onclick="document.getElementById('agree_ad').disabled = false; document.getElementById('agree_bs').disabled = true;" type="radio" name="type1">

<input name="Agreement_ad" type="text" class="textField" placeholder="yyyy/mm/dd" id="agree_ad" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">11.2</td>
    <td height="0" bgcolor="#FFFFFF">Agreement Date (BS):</td>
    <td height="0" bgcolor="#FFFFFF"><input onclick="document.getElementById('agree_ad').disabled = true; document.getElementById('agree_bs').disabled = false;" type="radio" name="type1" value="customurl1">

<input disabled name="Agreement_bs" type="text" class="textField" placeholder="yyyy/mm/dd" id="agree_bs" /></td>
  </tr>
  
  <!--- next check box -->
  
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">12.1</td>
    <td height="0" bgcolor="#FFFFFF">Completion Date (AD):</td>
    <td height="0" bgcolor="#FFFFFF"><input checked onclick="document.getElementById('comp_ad').disabled = false; document.getElementById('comp_bs').disabled = true;" type="radio" name="type2"><input name="Completion_ad" type="text" class="textField" placeholder="yyyy/mm/dd" id="comp_ad" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">12.2</td>
    <td height="0" bgcolor="#FFFFFF">Completion Date (BS):</td>
    <td height="0" bgcolor="#FFFFFF"><input onclick="document.getElementById('comp_ad').disabled = true; document.getElementById('comp_bs').disabled = false;" type="radio" name="type2" value="customurl2"><input disabled name="Completion_bs" type="text" class="textField" placeholder="yyyy/mm/dd" id="comp_bs" /></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">13.1</td>
    <td height="0" bgcolor="#FFFFFF">Total Investment (in NRs):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Investment_Nrs" type="number" min='0' class="textField" id="in_nrs" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">13.2</td>
    <td height="0" bgcolor="#FFFFFF">Total Investment (in USD):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Investment_USD" type="number" min='0' id="in_usd" class="textField" /></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">14.1</td>
    <td height="0" bgcolor="#FFFFFF">Grant Contribution (in NRs):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Grant_Contribution_NRs" type="number" class="textField" id="grant_cont_nrs" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">14.2</td>
    <td height="0" bgcolor="#FFFFFF">Grant Contribution (in USD):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Grant_Contribution_USD" type="number" class="textField" id="grant_cont_usd" /></td>
  </tr>
  <tr>
    <td height="0" align="center" bgcolor="#FFFFFF">15.1</td>
    <td height="0" bgcolor="#FFFFFF">Proponent Contribution (in NRs):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Proponent_Contribution_NRs" type="number" class="textField" id="proponent_cont_nrs" /></td>
    <td height="0" align="center" bgcolor="#FFFFFF">15.2</td>
    <td height="0" bgcolor="#FFFFFF">Proponent Contribution (in USD):</td>
    <td height="0" bgcolor="#FFFFFF"><input name="Proponent_Contribution_USD" type="number" class="textField" id="proponent_cont_usd" /></td>
  </tr>
</table>
<br />
<input name="submit" type="submit" value="Insert" class="submit fr ml" id="submit" />
</form>
<br />
<br />

    
   <h2>Upload Excel File.</h2>

    
    <form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" class="browse" />
        <input type="submit" name="upload" value="Submit" class="submit" />
    </form>

<br/>


<div class="clear"></div>

</div>


<?php
		
if(isset($_POST["upload"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{ if($c>1)
{$project_code = $filesop[0];
$name_proponent = $filesop[1];$responsible_person = $filesop[2];
$objectives = $filesop[3];$district = $filesop[4];
$area = $filesop[5];$Enterprises = $filesop[6];
$Investment = $filesop[7];$Caste = $filesop[8];
$sex = $filesop[9];$Agreement_ad = $filesop[10];
$Agreement_bs = $filesop[11];$Completion_ad = $filesop[12];
$Completion_bs = $filesop[13];$Investment_Nrs = $filesop[14];
$Investment_USD = $filesop[15];$Grant_Contribution_NRs = $filesop[16];
$Grant_Contribution_USD = $filesop[17];$Proponent_Contribution_NRs = $filesop[18];
$Proponent_Contribution_USD = $filesop[19];$bramin = $filesop[20];
$janajati = $filesop[21];$dalit = $filesop[22];$cast_other = $filesop[23];

$sql_upload = "INSERT INTO projectdetail (`project_code`, `name_add_proponent`, `responsible_person`, `objectives`, `district`, `area`, `enterprises`, `scale`, `caste_owner`, `sex`, `agreement_date_ad`, `agreement_date_bs`, `completion_date_ad`, `completion_date_bs`, `total_investment_rs`, `total_investment_usd`, `grand_rs`, `grand_usd`, `proponent_rs`, `proponent_usd`, `bramin`,`janajati`,`dalit`,`other`) VALUES ";
$sql_upload1 = $sql_upload."(\"$project_code\", \"$name_proponent\", \"$responsible_person\", \"$objectives\", \"$district\", \"$area\", 
 \"$Enterprises\", \"$Investment\", \"$Caste\", \"$sex\", \"$Agreement_ad\", \"$Agreement_bs\", \"$Completion_ad\", \"$Completion_bs\", 
 \"$Investment_Nrs\", \"$Investment_USD\", \"$Grant_Contribution_NRs\", \"$Grant_Contribution_USD\", \"$Proponent_Contribution_NRs\", \"$Proponent_Contribution_USD\", \"$bramin\",\"$janajati\",\"$dalit\",\"$cast_other\")";
 $result_upload = mysql_query($sql_upload1);
 
		}
	 $c++;
			}
		echo mysql_num_rows($result_upload);
		if($result_upload){
		$c = $c-1;
		echo "You database has imported successfully. You have inserted ". $c ." records";
	}else{
		
		echo "Sorry! No data are inserted";
	//echo "Sorry! There is some problem Like file is not in .cvs(Comma Delimited), file is empty or all data are already inserted ";
	}

		}

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



