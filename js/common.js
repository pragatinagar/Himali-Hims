$(document).ready(function() {

		$('#myHref').change(function(){
				var value = $('#myHref').val();
				var table = $('#table').val();
				$.get('get_projectName',{
					id:value,
					tbl:table},function(data)
				{ $('#projectDetail').html(data);
			}); });	
        $('#myHref').on('change',function(){
		$('#projectDetail').fadeIn('slow');
		$('#show_tableData').hide();
		});
  });
	