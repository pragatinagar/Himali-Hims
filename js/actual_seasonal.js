// JavaScript Document

  function addRow(dataTable) {
 var table = document.getElementById('dataTable');
 			
            var rowCount = table.rows.length;
            var row = table.insertRow(3);
 	        var colCount = table.rows[4].cells.length;
 	/// this will add row at third place
	
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[4].cells[i].innerHTML;
            };
row.style.backgroundColor="#FFFFFF";
row.style.height="50px";
row.style.textAlign="center";

  }   