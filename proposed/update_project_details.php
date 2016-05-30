<?php
session_start();
include("../db.php");

 $project_code = $_POST['project_code'];
  $sql = "select * from projectdetail where project_code ="."'$project_code'";
 $result2 = mysql_query($sql);
 while($data = mysql_fetch_array($result2)){ 
  $district1 = $data['district']; 
  $area_sector = $data['area'];
  $caste_owner = $data['caste_owner'];
  $sex = $data['sex'];
  $Enterprises = $data['enterprises'];
  $Investment = $data['scale'];
	 }
 
 if(isset($_POST['bramin'])) $bramin = $_POST['bramin'];
 else $bramin = $_SESSION['bramin'];
 
  if(isset($_POST['janajati'])) $janajati = $_POST['janajati'];
 else $janajati = $_SESSION['janajati'];
 
 if(isset($_POST['dalit'])) $dalit = $_POST['dalit'];
  else $dalit = $_SESSION['dalit'];
  
 if(isset($_POST['other'])) $other = $_POST['other'];
 else $other = $_SESSION['other'];
 
 if(isset($_POST['male_hidden'])) $male_hidden = $_POST['male_hidden'];
 else $male_hidden = $_SESSION['male_hidden'];
 
 if(isset($_POST['female_hidden'])) $female_hidden = $_POST['female_hidden'];
 else $female_hidden = $_SESSION['female_hidden'];

 
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if(isset($_POST['name_proponent'])) $name_proponent = $_POST['name_proponent'];
 else $name_proponent = $_SESSION['name_proponent'];
 if(isset($_POST['responsible_person'])) $responsible_person = $_POST['responsible_person'];
 else $responsible_person = $_SESSION['responsible_person'];
 if(isset($_POST['objectives'])) $objectives = $_POST['objectives']; 
 else $objectives = $_SESSION['objectives'];
 
 
     ///// / / // // / // / // 
 

 if($_POST['district'] == "")
 {$district1 = $district1;}
 else 
 {$district1 = $_POST['district'];};
 

 if($_POST['show_menu'] == "") $area_sector = $area_sector;
 else $area_sector = $_POST['show_menu'];
 
 if($_POST['Enterprises'] == "") $Enterprises = $Enterprises;
 else $Enterprises = $_POST['Enterprises'];
 
 if($_POST['Investment'] == "") $Investment = $Investment;
 else $Investment = $_POST['Investment'];
 
 if($_POST['Caste'] == "") $caste_owner = $caste_owner;
 else $caste_owner = $_POST['Caste'];
 
 if($_POST['sex'] == "") $sex = $sex;
 else $sex = $_POST['sex'];
 
  
 if(isset($_POST['Agreement_ad'])) $Agreement_ad = $_POST['Agreement_ad'];
 else $Agreement_ad = $_SESSION['Agreement_ad'];
 if(isset($_POST['Agreement_bs'])) $Agreement_bs = $_POST['Agreement_bs'];
 else $Agreement_bs = $_SESSION['Agreement_bs'];
 if(isset($_POST['Completion_ad'])) $Completion_ad = $_POST['Completion_ad'];
 else $Completion_ad = $_SESSION['Completion_ad'];
 if(isset($_POST['Completion_bs'])) $completion_date_bs = $_POST['Completion_bs'];
 else $completion_date_bs = $_SESSION['Completion_bs'];
 if(isset($_POST['Investment_Nrs'])) $Investment_Nrs = $_POST['Investment_Nrs'];
 else $Investment_Nrs = $_SESSION['Investment_Nrs'];
 if(isset($_POST['Investment_USD'])) $Investment_USD = $_POST['Investment_USD'];
 else $Investment_USD = $_SESSION['Investment_USD'];
 if(isset($_POST['Grant_Contribution_NRs'])) $Grant_Contribution_NRs = $_POST['Grant_Contribution_NRs'];
 else $Grant_Contribution_NRs = $_SESSION['Grant_Contribution_NRs'];
 if(isset($_POST['Grant_Contribution_USD'])) $Grant_Contribution_USD = $_POST['Grant_Contribution_USD'];
 else $Grant_Contribution_USD = $_SESSION['Grant_Contribution_USD'];
 if(isset($_POST['Proponent_Contribution_NRs'])) $Proponent_Contribution_NRs = $_POST['Proponent_Contribution_NRs'];
 else $Proponent_Contribution_NRs = $_SESSION['Proponent_Contribution_NRs'];
 if(isset($_POST['Proponent_Contribution_USD'])) $Proponent_Contribution_USD = $_POST['Proponent_Contribution_USD'];
 else $Proponent_Contribution_USD = $_SESSION['Proponent_Contribution_USD'];
 
 //echo $district1;die;
  echo $update = "UPDATE `projectdetail` SET `name_add_proponent`='$name_proponent',`responsible_person` = '$responsible_person',`objectives`='$objectives',`district` = '$district1',`area`='$area_sector',`enterprises` = '$Enterprises',`scale`='$Investment',`sex` = '$sex',`caste_owner`='$caste_owner',`agreement_date_ad`='$Agreement_ad',`agreement_date_bs` = '$Agreement_bs',`completion_date_ad`='$Completion_ad',`completion_date_bs` = '$completion_date_bs',`total_investment_rs`='$Investment_Nrs',`total_investment_usd` = '$Investment_USD',`grand_rs`='$Grant_Contribution_NRs',`grand_usd` = '$Grant_Contribution_USD',`proponent_rs`='$Proponent_Contribution_NRs',`proponent_usd` = '$Proponent_Contribution_USD',`bramin`='$bramin',`janajati` = '$janajati',`dalit`='$dalit',`other` = '$other',`hidden_male`='$male_hidden',`hidden_female` = '$female_hidden' where project_code = '{$project_code}'";
 //$update = "update table projectdetail where projectcode = "."'$project_code'";

 mysql_query($update);

 header("Location:show_proposed_project.php");
 	echo "<script>"; 
	echo "window.location.assign(show_proposed_project.php)";
	echo "</script>";
exit();

?>