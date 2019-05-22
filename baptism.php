<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "Baptisms at St Michael's Church Bexhill", "test.css", "", "", "" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<hgroup> 
		<h2>Baptisms</h2>
	</hgroup>
	
	<p>If you would like your child baptised at St Michael's, we would be delighted to welcome you into the church family 
	and to discuss arrangements and preparations for this wonderful celebration. Baptisms usually take place during our 10.30
	am Family Service, although not exclusively. Baptisms should normally be conducted in the church in the parish in which 
	you are resident. If you are not sure which is your parish church, please check the website <a href="http://www.achurchnearyou.com">www.achurchnearyou.com</a>. When 
	you arrive at the site, type in your postcode and it will tell you which parish you are in.</p>

	<p>There are no set fees for a service of Baptism although as part of the service there will be a money collection taken.</p>

	<p>In preparation for the Baptism, you will be asked to choose at least three Godparents, two should be the same gender as the
	child to be baptised and one should be of the other gender. Godparents must all be Baptised themselves and should also be 
	confirmed. They should also be aged at least 16.</p>

	<p>If you wish to discuss details further, please email one of the Church Wardens at <a href="mailto:vicarage@stmichaelsbexhill.org">vicarage@stmichaelsbexhill.org</a> and if they 
	are unable to answer your query they will pass your message and/or request to the Team Rector.</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>