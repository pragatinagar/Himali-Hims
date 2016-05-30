	$(document).ready(function() {
		$('#myHref').change(function(){
			var value = $('#myHref').val();
			$.get('get_projectName_ForInvestment.php',{id:value},function(data)
			{ $('#projectDetail').html(data);
		}); });	
        $('#myHref').on('change',function(){
		$('#projectDetail').fadeIn('slow');
		});
				
		
	$('#projectDetail').change(function(){
	  var values = $('#sn_id').val();
      $.get('calculate_invest.php',{ids:values},function(data)
		{ $('#show_me').html(data); });
		$('#show_tableData').hide();
		 });	
		
        
		
    });