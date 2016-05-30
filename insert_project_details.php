<?php
session_start();
//echo "<pre>";var_dump($_POST);die;
 $project_code = $_POST['project_code'];
 $bramin = $_POST['bramin'];
 $janajati = $_POST['janajati'];
 $dalit = $_POST['dalit'];
 $cast_other = $_POST['other'];
 $male_hidden = $_POST['male_hidden'];
 $female_hidden = $_POST['female_hidden'];

 $name_proponent = $_POST['name_proponent'];
 $responsible_person = $_POST['responsible_person'];
 $objectives = $_POST['objectives'];
 $district = $_POST['district'];
 $area = $_POST['show_menu'];
 $Enterprises = $_POST['Enterprises'];
 $Investment = $_POST['Investment'];
 $Caste = $_POST['Caste'];
 $sex = $_POST['sex'];
 $Agreement_ad = $_POST['Agreement_ad'];
 $Agreement_bs = $_POST['Agreement_bs'];
 $Completion_ad = $_POST['Completion_ad'];
 $Completion_bs = $_POST['Completion_bs'];
 $Investment_Nrs = $_POST['Investment_Nrs'];
 $Investment_USD = $_POST['Investment_USD'];
 $Grant_Contribution_NRs = $_POST['Grant_Contribution_NRs'];
 $Grant_Contribution_USD = $_POST['Grant_Contribution_USD'];
 $Proponent_Contribution_NRs = $_POST['Proponent_Contribution_NRs'];
 $Proponent_Contribution_USD = $_POST['Proponent_Contribution_USD'];
 //echo "<pre>";var_dump($_POST);die;
		///////  date converter started from here  ///////  
	include "db.php";
	
	$double = mysql_query("select id from projectdetail where project_code = $project_code");
	

	if(!isset($_SESSION['id']))
	header("Location:index.php");
		date_default_timezone_set('Asia/Katmandu');
		require_once('includes/nepali_calendar.php');
		require_once('includes/functions.php');
		$cal = new Nepali_Calendar();

//////////////////////////////////////// Date convertion for Agreement  ////////////////////////////////////////////////////////////////

        if($Agreement_bs != "" && $Agreement_ad == "")
       {
       		
        $nep_stuff = explode('/', "$Agreement_bs");
        
        $nepdate = $cal->nep_to_eng($nep_stuff[0], $nep_stuff[1], $nep_stuff[2]);
        $year = $nepdate['year'];
        $month = $nepdate['month'];
        $month_name = $nepdate['emonth'];
        $day = $nepdate['date'];
        $day_name = $nepdate['day'];
        //
        $year_n = $nep_stuff[0];
        $month_n = $nep_stuff[1];
        $day_n = $nep_stuff[2];
        $day_name_n = $nepdate['day'];
        $month_name_n = getMonthName($month_n);
        $Agreement_ad = $year."/".$month."/".$day;

    }

    	if($Agreement_ad != "" && $Agreement_bs == "")
  	{			
    	$eng_stuff = explode('/', "$Agreement_ad");
    	$nepdate = $cal->eng_to_nep($eng_stuff[0], $eng_stuff[1], $eng_stuff[2]);

        $year_n = $nepdate['year'];
        $month_n = $nepdate['month'];
        $month_name_n = $nepdate['nmonth'];
        $day_n = $nepdate['date'];
        $day_name_n = $nepdate['day'];
        //
        $year = $eng_stuff[0];
        $month = $eng_stuff[1];
        $day = $eng_stuff[2];
        $month_name = date('F', strtotime("$year-$month-$day"));
        $day_name = date('l', strtotime("$year-$month-$day"));
        $Agreement_bs = $year_n."/".$month_n."/".$day_n;
  	}
       
////////////////////////////// Date conversion for Completion  ////////////////////////////////////


       if($Completion_bs != "" && $Completion_ad == "")
       {
       		
        $nep_stuff1 = explode('/', "$Completion_bs");
        
        $nepdate1 = $cal->nep_to_eng($nep_stuff1[0], $nep_stuff1[1], $nep_stuff1[2]);
        $year1 = $nepdate1['year'];
        $month1 = $nepdate1['month'];
        $month_name1 = $nepdate1['emonth'];
        $day1 = $nepdate1['date'];
        $day_name1 = $nepdate['day'];
        //
        $year_n1 = $nep_stuff1[0];
        $month_n1 = $nep_stuff1[1];
        $day_n1 = $nep_stuff1[2];
        $day_name_n1 = $nepdate1['day'];
        $month_name_n1 = getMonthName($month_n1);
        $Completion_ad = $year1."/".$month1."/".$day1;

    }

    	if($Completion_ad != "" && $Completion_bs == "")
  	{			
    	$eng_stuff1 = explode('/', "$Completion_ad");
    	$nepdate1 = $cal->eng_to_nep($eng_stuff1[0], $eng_stuff1[1], $eng_stuff1[2]);

        $year_n1 = $nepdate1['year'];
        $month_n1 = $nepdate1['month'];
        $month_name_n1 = $nepdate1['nmonth'];
        $day_n1 = $nepdate1['date'];
        $day_name_n1 = $nepdate1['day'];
        //
        $year1 = $eng_stuff1[0];
        $month1 = $eng_stuff1[1];
        $day1 = $eng_stuff1[2];
        
        $Completion_bs = $year_n1."/".$month_n1."/".$day_n1;
  	}


$insert = "INSERT INTO `projectdetail` (`project_code`, `name_add_proponent`, `responsible_person`, `objectives`, `district`, `area`, `enterprises`, `scale`, `caste_owner`, `sex`, `agreement_date_ad`, `agreement_date_bs`, `completion_date_ad`, `completion_date_bs`, `total_investment_rs`, `total_investment_usd`, `grand_rs`, `grand_usd`, `proponent_rs`, `proponent_usd`, `bramin`,`janajati`,`dalit`,`other`,`hidden_male`,`hidden_female`)
 VALUES (\"$project_code\", \"$name_proponent\", \"$responsible_person\", \"$objectives\", \"$district\", \"$area\", 
 \"$Enterprises\", \"$Investment\", \"$Caste\", \"$sex\", \"$Agreement_ad\", \"$Agreement_bs\", \"$Completion_ad\", \"$Completion_bs\", 
 \"$Investment_Nrs\", \"$Investment_USD\", \"$Grant_Contribution_NRs\", \"$Grant_Contribution_USD\", \"$Proponent_Contribution_NRs\", \"$Proponent_Contribution_USD\", \"$bramin\",\"$janajati\",\"$dalit\",\"$cast_other\",\"$male_hidden\",\"$female_hidden\");";
 
	if(mysql_num_rows($double) > 0)
	{header("Location:main_page.php?value=1");}
	else{
	$result = mysql_query($insert);
	header("location:operate_exp.php");
	}




?>