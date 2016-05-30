// JavaScript Document

  function addRow() {
 var table = document.getElementById('dataTable');
 			
            var rowCount = table.rows.length;
            var row = table.insertRow(1);
 	        var colCount = table.rows[2].cells.length;
 	/// this will add row at third place
	
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[2].cells[i].innerHTML;
				row.style.textAlign="center";
				
            };
row.style.backgroundColor="#FFFFFF";
row.style.height="50px";


  }   
  
  function compareReporting()
  {  
  	var visitDate = document.getElementById("visitDate").value;
	var reportDate = document.getElementById("reportDate").value;
	var agg = document.getElementById("agreementDate").value;
	//alert(visitDate);alert(reportDate);alert(agg);
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