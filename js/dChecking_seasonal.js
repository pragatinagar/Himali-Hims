
	function compareReporting()
  {  
  	var visitDate = document.getElementById("visitDate").value;
	var reportDate = document.getElementById("reportDate").value;
	var agg = document.getElementById("agreementDate").value;
	var worked_month = document.getElementById("worked_month").value;
	
    var reportSplit = reportDate.split('/'); 
	var aggSplit = agg.split('/');
	 
 		if(reportSplit[2] == null)
		reportDate += "/30";
		if(reportSplit[2] == "")
		reportDate += "30";	
var diff_milisec = Date.parse(reportDate) - Date.parse(agg);
var minutes_diff = 1000 * 60;
var hours_diff = minutes_diff * 60;
var days_diff = hours_diff * 24;


var days_diff = Math.round(diff_milisec / days_diff); 
/*	var vAgg = new Date(agg);
var aggtDate = vAgg.getDate();
var aggMonth = vAgg.getMonth()+1;
var aggYear = vAgg.getFullYear();*/
	//alert(aggMonth)
	if(reportSplit[0] == aggSplit[0])
	{	
/*		var vRate = new Date(reportDate);	
var reportDate = vRate.getDate();
var reportMonth = vRate.getMonth()+1;
var reportYear = vRate.getFullYear();
Note this will work if date format is complete i.e for this condition above only
	
		var diff = reportSplit[1] - aggSplit[1];	
		diff *= 30;*/
			
		if(days_diff <= worked_month && worked_month != "")
		{	
		  alert("Worked Month Should be " + days_diff); 		
		}	  			
	}
	else if(reportSplit[0] <= "2015")
	{
		if(worked_month >= 366 && worked_month != "")
		{
		  alert("Worked Month Should be Less or Equal to 365");		
		}		
	}
	else if(reportSplit[0] > "2015")
	{
		if(reportSplit[1] == 1 || reportSplit[1] == 3 || reportSplit[1] == 5 || reportSplit[1] == 7 || reportSplit[1] == 8 || reportSplit[1] == 10 || reportSplit[1] == 12 )
		var days = 31;
		if(reportSplit[1] == 4 || reportSplit[1] == 6 || reportSplit[1] == 9 || reportSplit[1] == 11 )
		var days = 30;
		if(reportSplit[0] == "2016" && reportSplit[1] == 2)
		var days = 29;
		if(reportSplit[0] == "2017" && reportSplit[1] == 2)
		var days = 28;
		
		if(worked_month >= days && worked_month != "")
		{		
		  alert("Worked Month Should be Less or Equal to "+ days);  		
		}		
	}		
	
	if(visitDate != '' || reportDate != '')
	{ 
   if (Date.parse(visitDate) < Date.parse(reportDate))
   alert("Report Date can't be Greater then Visit Date");	
	
   if (Date.parse(visitDate) < Date.parse(agg))
   alert("Agreement Date can't be Greater then Visit Date");
   
    if (Date.parse(reportDate) < Date.parse(agg))
   alert("Agreement Date can't be Greater then Report Date ");	
	}
	    }

