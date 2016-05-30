// JavaScript Document



        function addRow(dataTable) {
 var table = document.getElementById('dataTable');
 
            var rowCount = table.rows.length;
            var row = table.insertRow(2);
 	
            var colCount = table.rows[3].cells.length;
 	/// this will add row at third place
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);

                newcell.innerHTML = table.rows[3].cells[i].innerHTML;
                

            }
row.style.backgroundColor="#FFFFFF";
row.style.height="50px";
row.style.textAlign="center";

        }   

$(document).ready(function() {

	$('#myHref').change(function(){
		
				var value = $('#myHref').val();
				$.get('get_projectSeasonal.php',{id:value},function(data)
			{ 
				$('#projectDetail').html(data);
				$('#projectDetail').fadeIn('slow');
				$('#dataTable').hide();
				$('#hidess').hide();
			}); });  
    });
