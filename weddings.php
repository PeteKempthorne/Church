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
		<h2>Weddings</h2>
	</hgroup>
	<p>St Michael's is a beautiful setting for your wedding - it has a lovely cosy, family feel about it and we would be delighted 
	if you chose to have your special day here. There are a few important things to consider. Firstly, the law states that you may get
	married in the church in the parish in which one of you is resident. Parish boundaries are sometimes quite difficult to discover, 
	but a really useful website is <a href="http://www.achurchnearyou.com">www.achurchnearyou.com</a>. When you arrive at the site, type in your postcode and it will tell you 
	which parish you are in. If that parish has a link on that site you will be able to click on it to find out more information about a 
	particular church. St Michael's is one church in the parish of St Peter's Bexhill. If you live within this parish, then you may get 
	married at St Michael's, and the next step would be for you to contact <a href="mailto:frrobertf@live.co.uk">frrobertf@live.co.uk</a>. You may also qualify to marry at St Michael's
	if you, your parents or grandparents have worshipped here regularly in the past.</p>
	<p align="center"><img src="img/churchtrees.png"></img></p>
	<p>We would be delighted to hear from you and will talk you through some further details or answer any questions you may have. 
	One common question is "how much will it cost?".  The answer to which is dependent on what you would like within the service.</p>
	<p><strong>The basic fees for the wedding service are approximately &#163;490 </strong>(although they do vary slightly from year to year). 
	On top of this there are fees for an organist, flowers, lighting and various other sundry fees.  We will be pleased to go into further details 
	when you contact us.</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>