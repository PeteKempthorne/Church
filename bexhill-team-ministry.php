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
		<h3>Bexhill Team Ministry</h3>
		<h1>A PIRATES SUMMER CLUB<br/>'<em>AHOY THERE</em>'</h1>
	</hgroup>
	
	<p>Please come to our Pirates Summer Club '<em>Ahoy there</em>' at St. Michael &amp; All Angels Church, Glassenbury Drive, Bexhill-on-Sea, TN40 2NY.</p>
	<p>The Summer Club will meet on Thursday 20th &amp; Friday 21st August from 10 00am - 2 30pm on both days. '<em>Ahoy there</em>' will include fun &amp; 
	games, craft activities and competitions and close with a short time of worship.</p>
	<p>'<em>Ahoy there</em>' is for all children up to age 11. Parents/carers are welcome to join us. Mid morning refreshments and a packed lunch will be provided
	free on both days. A voluntary contribution of &pound;1.00 for each day is requested and this collection will be sent to The Mission to Seafarers.	</p>
	<p>For further details please go to <a href="http://www.stpetersbexhill.org.uk">www.stpetersbexhill.org.uk</a> or contact Father Stephen Huggins (T): 01424-219937; (E): <a href="mailto:frshuggins@googlemail.com">frshuggins@googlemail.com</a></p>

	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>