<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "", "", "" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	
	<?php
	session_destroy();
	?>
	<p><b>You are successfully logged out. Click <a href="login.php">here</a> to login.</b></p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>