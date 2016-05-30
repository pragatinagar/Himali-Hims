// JavaScript Document
  	
	function cheakMulti() {
 		var r = document.getElementsByTagName('tr');
  for (i = 3; i < r.length; i++) 
  {
	  child8=parseInt(r[i].children[8].children[0].value);
	  child5=parseInt(r[i].children[5].children[0].value);
	  child6=parseInt(r[i].children[6].children[0].value);
	  child7=parseInt(r[i].children[7].children[0].value);	  
	
  	if((child8+child7) == (child6*child5))
   	{
	r[i].children[8].children[0].style.backgroundColor="green";
	r[i].children[5].children[0].style.backgroundColor="green";
	r[i].children[6].children[0].style.backgroundColor="green";
	r[i].children[7].children[0].style.backgroundColor="green";
	}
	else
	{
	r[i].children[8].children[0].style.backgroundColor="red";
	r[i].children[5].children[0].style.backgroundColor="red";
	r[i].children[6].children[0].style.backgroundColor="red";
	r[i].children[7].children[0].style.backgroundColor="red";
	}

  }
}
        function addRow() {  
 var table = document.getElementById('dataTable');
 
            var rowCount = table.rows.length;
            var row = table.insertRow(3);
 	
            var colCount = table.rows[4].cells.length;
 	/// this will add row at third place
	
            for(var i=0; i<colCount; i++) {
 
            var newcell = row.insertCell(i);

            newcell.innerHTML = table.rows[4].cells[i].innerHTML;
            }
row.style.backgroundColor="#FFFFFF";
row.style.height="50px";
row.style.textAlign="center";

        } 
	
$(document).ready(function() {
	$('#myHref').change(function(){
				var value = $('#myHref').val();
				$.get('get_projectName.php',{id:value},function(data)
				{ $('#projectDetail').html(data);
			}); 
		});	
        $('#myHref').on('change',function(){
		$('#projectDetail').fadeIn('slow');
		});
    });
