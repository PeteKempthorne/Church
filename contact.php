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
	<p>For all Church matters please email one of the Church Wardens at <a href="mailto:vicarage@stmichaelsbexhill.org">vicarage@stmichaelsbexhill.org</a> and if they are unable to answer your query they will pass your message and/or request to the Team Rector.</p>
	
	<p>For Hall users please see the Hall users page of our website, <a href="mailto:judithhattam@btinternet.com">judithhattam@btinternet.com</a> or contact 01424 730082 evening up until 8pm.</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>