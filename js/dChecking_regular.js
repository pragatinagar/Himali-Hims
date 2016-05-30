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
		var diff = reportSplit[1] - aggSplit[1];	
		if(diff < worked_month && worked_month != "" && diff >= 0 )
		{
		  alert("Worked Month Should be Less or Equal to " + diff); 		
		}	  			
	}
	if(reportSplit[0] <= "2015")
	{
		if(worked_month > 12 && worked_month != "")
		{
		  alert("Worked Month Should be Less or Equal to 12");		
		}		
	}	
	
	if(reportSplit[0] > "2015")
	{
		if(worked_month > 1 && worked_month != "")
		{
		  alert("Worked Month Should be Less or Equal to 1");  		
		}		
	}
	
	if(visitDate != '' || reportDate != '')
	{ 
		if(reportSplit[2] == null)
		reportDate += "/30";
		if(reportSplit[2] == "")
		reportDate += "30";	
   if (Date.parse(visitDate) < Date.parse(reportDate))
   alert("Report Date can't be Greater then Visit Date");	
	
   if (Date.parse(visitDate) < Date.parse(agg))
   alert("Agreement Date can't be Greater then Visit Date");
   
    if (Date.parse(reportDate) < Date.parse(agg))
   alert("Agreement Date can't be Greater then Report Date ");	
	}
	    }
  
  