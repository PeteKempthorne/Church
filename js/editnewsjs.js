jQuery(document).ready(function() {

	jQuery('#submit').on('click', function() 
	{
		
		var news = jQuery('#newsage').val();
		//var news2 = jQuery('#newsage').val();
			
			jQuery.post('editnewsprocess.php', {news: news}, 
				function(data) 
			{
				//alert(data);
				$("#title").val(data);
			});
			
			jQuery.post('editnewsprocess2.php', {news: news}, 
				function(dataa) 
			{
				//alert(data);
				$("#posttext").val(dataa);
			});
			
	});
	
	jQuery('#submitedit').on('click', function() 
	{
		var news = jQuery('#newsage').val();
		var title = jQuery('#title').val();
		var content = jQuery('#posttext').val();
			
			jQuery.post('editnewsprocess3.php', {news: news, title: title, content: content}, 
				function(dataAgain) 
			{
				alert(dataAgain);
				//$("#title").val(dataAgain);
			});
			
			
	});
});