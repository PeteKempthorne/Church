<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's and All Angels Church Bexhill", "test.css", "", "", "" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<hgroup> 
		<h1>Welcome to St Michael and All Angels Church</h1>
	</hgroup>
	
	<p>St Michael's is a friendly welcoming church with a range of services for all the family.</p>
	<p>We are situated at the East End of Bexhill in Glassenbury Drive, just off the main A259 Bexhill to Hastings Road and above the Ravenside complex.</p>
	<p>Please feel free to explore our site to get a feel for who we are, and what we do.  </p>
	<p>We look forward to seeing you in church in the near future.</p>
	<?php 
	$page->getEndContent();
	$page->getNews();
	$page->getPageBottom();
?>