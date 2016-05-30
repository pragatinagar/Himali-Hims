<?php 

 //error_reporting(0);
 $project_code = $_GET['id'];

 include 'db.php';
 $val = "select name_add_proponent,responsible_person,agreement_date_ad,enterprises from projectdetail where project_code = '$project_code'";
 $qry = mysql_query($val);
 $thisForpagination = 'yes';
while($data5 = mysql_fetch_array($qry))
  { 
	$abc = '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;">'.$data5[0].'</span>';
	$abc .= '<span style="padding:10px 20px; background:#FFE6CC; float:left; margin-right:20px;">'.$data5[1].'</span>'; 	
  }

	$sql = "select * from investment where project_code = '$project_code'";
	$result = mysql_query($sql);
	 $cnt=0;
	while($x1 = mysql_fetch_array($result))
	{
		$detail[$cnt] = $x1['detail'];
		$sector[$cnt] = $x1['sector'];
		$unit[$cnt] = $x1['unit']; 		
		$quality[$cnt] = $x1['quality'];
		$per_unit[$cnt] = $x1['per_unit'];
		$grant_contribution[$cnt] = $x1['grant_contribution']; 		
		$Proponent_contribution[$cnt] = $x1['Proponent_contribution'];  
		$cnt++;
	 }

	
	echo json_encode(array(
		'a' => $detail,
		'b' => $sector,
		'c' => $unit,		
		'quality' => $quality,
		'per_unit' => $per_unit,
		'grant_contribution' => $grant_contribution,
		'Proponent_contribution' => $Proponent_contribution,		
		'project' => $abc
		));
			
?>


<script>
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
		  
		  
		  
		  // or
		  data = JSON.parse(data);
		  	var details = data.detail;
$.each(details, function(index, value) {
    $( '#a' ).append('<div>'+value+'</div>'); //append data to div id="a"
});

var sectors = data.sector;
$.each(sectors, function(index, value) {
    $( '#b' ).append('<div>'+value+'</div>'); //append data to div id="b"
});
	

</script>