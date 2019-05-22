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
	<hgroup> 
		<h2> SAFEGUARDING OF CHILDREN AND VUNERABLE ADULTS</h2>
	</hgroup>
	
	<p>Safeguarding: our policy is reviewed each year and details are found on our main noticeboard.</p>
	<p>If you have any issues or concerns, please feel free to contact our Safeguarding officer Jill Andrews on telephone 01424 848603 who will be able to advise you.</p>
	<p></p>
	
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>