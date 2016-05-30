	$(document).ready(function() {
		$('#myHref').change(function(){
			var value = $('#myHref').val();
			$.get('get_projectName.php',{id:value},function(data)
			{ $('#projectDetail').html(data);
		}); });	
        $('#myHref').on('change',function(){
		$('#projectDetail').fadeIn('slow');
		});
    });