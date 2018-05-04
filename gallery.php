<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "gallery/resources/colorbox/jquery.colorbox.js", "", "" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	ini_set('memory_limit', '1024M');
	?>
	<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>	
	<?php 
	include_once('gallery/resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('gallery/gallery-images'); ?>
	
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>