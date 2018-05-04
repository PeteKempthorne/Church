<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "", "", "");
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<hgroup> 
		<h2>Contact Us</h2>
	</hgroup>
	<p>For all Church matters please contact Fr. Robert Featherstone at <a href="mailto:frrobertf@live.co.uk">frrobertf@live.co.uk</a> or call Tel 01424 576826.</p>
	
	<p>For Hall users please see the Hall users page of our website or contact 01424 730082 evenings up till 8 PM.</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>