<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Christmas Tree Festival", "test.css", "gallery/resources/colorbox/jquery.colorbox.js", "", "" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>	
	<hgroup> 
		<h2>Christmas Tree Festival</h2>
	</hgroup>
	
	<p>Our first Christmas Tree Festival took place in 2006.  Over subsequent years it has grown to become a firm favourite will many local visitors. For the first four years it took place from Wednesday to Monday during the first week of December.  </p>
	<p>In 2010 the snow came down mid festival causing us to have to close for 3 days.  A decision was made to extend the opening times to the following Friday, word soon got around and we were blessed with a good attendance.</p>
	<p>After our first Tree Festival it was decided that on the Friday evening we should open and serve Mulled Wine and Mince Pies.  This together with live entertainment was well received. Friday evenings with Mulled Wine and Mince Pies have since featured in every subsequent Tree Festival.</p>
	<p>In 2011 and 2012 it was decided to change the opening days to Saturday to Friday, culminating with the evening session of Mulled Wine and Mince Pies and live entertainment.</p>
	<p>For the past few years we have held, on the Sunday afternoon, a service to welcome St Nicholas to Bexhill.  This service incorporates a toy service were toys are donated and given to local children in need through the Fellowship of St Nicholas.</p>
	<p>The Tree Festival has become a major event in our church year - in 2018 we had over 20 trees on display and over 700 visitors with the theme being Christmas carols. Not surprisingly, plans are already well in hand for the opening of the 2019 Festival (14th) on the 30th of November; the theme for 2019 is <strong>cartoon characters and animated films</strong>.</p>
	<?php 
	include_once('gallery/resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('gallery/treefestival'); 
	?>	
	
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>