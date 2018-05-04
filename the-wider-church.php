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
		<h2>The Wider Church</h2>
	</hgroup>
	
	<p>St Michael's Church is a member of the Bexhill Parish Team Ministry (with St Peter's Church - 
	<a href="http://www.stpetersbexhill.org.uk">www.stpetersbexhill.org.uk</a>) within the Bexhill and Battle Deanery, a group of churches linked together 
	geographically.</p>
	<p>For details of what's happening in the local church, please click here to see the deanery E-bulletin.</p>
	<p>The Diocese of Chichester is one diocese of the forty-four within the Church of England.
	For more information please visit their website <a href="https://www.churchofengland.org">The Church of England</a>.</p>
	<p>The Church of England is the mother church of the worldwide Anglican Communion
For more information please visit their website <a href="http://www.anglicancommunion.org">The Anglican Communion</a>.</p>
	<p>The Bexhill and Battle Deanery is one of eight deaneries within the Lewes and Hastings Archdeaconry, which in turn is one of the three 
	archdeaconries that make up Diocese of Chichester. Chichester is our Cathedral city and the seat of the Bishop.</p>
	
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>