// JavaScript Document

  function addRow() {
 var table = document.getElementById('dataTable');
 			
            var rowCount = table.rows.length;
            var row = table.insertRow(3);
 	        var colCount = table.rows[4].cells.length;
 	/// this will add row at third place
	
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[4].cells[i].innerHTML;
				row.style.textAlign="center";
				
            };
row.style.backgroundColor="#FFFFFF";
row.style.height="50px";

  }
  
  function hideEmployee()
  {	
  	var hide1 = document.getElementById("groupid").value;
	//alert(hide);
	if(hide1 != "Entrepreneur")
	{
		document.getElementById("family_actual").disabled = true;			
	}
	
  } 
  