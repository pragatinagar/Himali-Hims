// JavaScript Document

		
	$('#sn').change(function(){
	  var value = $('#sn').val();
      $.get('calculate_invest.php',{id:value},function(data)
		{ $('#show_me').html(data); }); });	
        $('#sn').on('change',function(){
		$('#show_me').fadeIn('slow');
		$('#show_tableData').hide();
		});

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
		$.get('display_acc.php',{id:value},function(data)
		 {
	data = JSON.parse(data); 
	 $( '#projectDetail' ).html(data.project);
	 $( '#sn' ).html(data.sn);
     $( '#a' ).html(data.a);
	 $( '#b' ).html(data.b);
	 $( '#c' ).html(data.c);
	 $( '#d' ).html(data.quality);
     $( '#e' ).html(data.per_unit);
	 $( '#f' ).html(data.grant_contribution);
     $( '#g' ).html(data.Proponent_contribution);
	});
	   });	
	   $('#myHref').on('change',function(){			
			$('#projectDetail').fadeIn('slow');
				});
		  });
