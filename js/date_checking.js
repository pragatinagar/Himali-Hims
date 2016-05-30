
	function compareReporting()
  {  
  	var visitDate = document.getElementById("visitDate").value;
	var reportDate = document.getElementById("reportDate").value;
	var agg = document.getElementById("agreementDate").value;
	var worked_month = document.getElementById("worked_month").value;
	
    var reportSplit = reportDate.split('/'); 
	var aggSplit = agg.split('/'); 
     
	var vAgg = new Date(agg);
var aggtDate = vAgg.getDate();
var aggMonth = vAgg.getMonth()+1;
var aggYear = vAgg.getFullYear();
	//alert(aggMonth)
	if(reportSplit[0] == aggSplit[0])
	{	
/*		var vRate = new Date(reportDate);	
var reportDate = vRate.getDate();
var reportMonth = vRate.getMonth()+1;
var reportYear = vRate.getFullYear();
Note this will work if date format is complete i.e for this condition above only
*/	
		var diff = reportSplit[1] - aggSplit[1];	
			
		if(diff != worked_month && worked_month != "")
		{
		  alert("Worked Month Should be"+ diff); 		
		}	  			
	}
	else if(reportSplit[0] <= "2015")
	{
		if(worked_month != "12" && worked_month != "")
		{
		  alert("Worked Month Should be 12");		
		}		
	}
	else if(reportSplit[0] > "2015")
	{
		if(worked_month != "1" && worked_month != "")
		{
		  alert("Worked Month Should be 1");  		
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

