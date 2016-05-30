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
            };
row.style.backgroundColor="#FFFFFF";
row.style.height="50px";
row.style.textAlign="center";

  }   
 
 function cheakMulti1() {
		
  r = document.getElementsByTagName('tr');
  for (i = 2; i < r.length; i++) 
  {
	   //if(r[i].children[2].children[0].value > 0)
	r[i].children[14].children[0].value=r[i].children[4].children[0].value*r[i].children[9].children[0].value;  
	
	  // if(r[i].children[3].children[0].value > 0)	
	r[i].children[15].children[0].value=r[i].children[5].children[0].value*r[i].children[10].children[0].value;	
	
	  //if(r[i].children[4].children[0].value > 0)	
	r[i].children[16].children[0].value=r[i].children[6].children[0].value*r[i].children[11].children[0].value;
	
	  //if(r[i].children[5].children[0].value > 0)	
	r[i].children[17].children[0].value=r[i].children[7].children[0].value*r[i].children[12].children[0].value;
	
	  //if(r[i].children[6].children[0].value > 0)	
	r[i].children[18].children[0].value=r[i].children[8].children[0].value*r[i].children[13].children[0].value;	
	
		  	 if(r[i].children[18].children[0].value == 0)
		   r[i].children[18].children[0].value='';
		    if(r[i].children[17].children[0].value == 0)
		   r[i].children[17].children[0].value='';
		    if(r[i].children[14].children[0].value == 0)
		   r[i].children[14].children[0].value='';
		    if(r[i].children[15].children[0].value == 0)
		   r[i].children[15].children[0].value='';
		    if(r[i].children[16].children[0].value == 0)
		   r[i].children[16].children[0].value='';
	}
		}
  

$(document).ready(function() {

	$('#myHref').change(function(){
				var value = $('#myHref').val();
				$.get('get_projectName.php',{id:value},function(data)
				{ $('#projectDetail').html(data);
			}); 

		});	
        $('#myHref').on('change',function(){
		$('#projectDetail').fadeIn();
		});
    });
