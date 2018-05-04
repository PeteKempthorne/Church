$(document).ready(function() {

	$('#submitnew').on('click', function() 
	{
		var title = jQuery('#title').val();
		var content = jQuery('#posttext').val();
			
			$.post('newnewsprocess.php', {title: title, content: content}, 
				function(data) 
			{
				alert(data);
				//$("#title").val(dataAgain);
			});			
			
	});
});