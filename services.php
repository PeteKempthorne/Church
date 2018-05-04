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
		<h2>Services at St Michael's Church</h2>
	</hgroup>
	<p>The worship at St Michael's is centered around the Eucharist and normally follows the following pattern:</p>
	<p><em>Sundays:</em><br />
	08.00am Said Eucharist cancelled until further notice.<br />
	09.30am All Age God's Half Hour (AAGHH) (2nd, 4th & 5th Sundays)<br />
	10.30am Sung Eucharist (except 1st and 3rd Sunday) <br />
	10.30am Family Communion (1st Sunday) <br />
	10.30am Family Service (3rd Sunday) </p>
	<p>Coffee and Tea are normally served in our Large Hall after the AAGHH 10.30 service</p>
	<p><em>Weekday Services</em><br />
	Wednesday 11.00am Said Eucharist </p>
	<p>(Services may change in special seasons of the Church's year, i.e. Easter and Christmas, with extra services at these 
	festivals; to mark certain other occasions i.e. Ascension, All Saints, and to commemorate particular saints, i.e. St Michael. 
	There are occasional afternoon services - these are usually seasonal and are announced in church.)
	</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>