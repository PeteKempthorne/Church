<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "Year Ahead at St Michael's Church Bexhill", "test.css", "", "", "" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<hgroup> 
		<h2>What's on during 2018</h2>
	</hgroup>
	
	<p>
		<ul>
			<li>Valentine Dinner - February</li>
			<li>Mothering Sunday - March</li>
			<li>Good Friday Family Craft Activities - March</li>
			<li>Easter Day Breakfast - April</li>
			<li>Whitsun - The Big Red Party @ Family Service - June</li>
			<li>Summer Fair - June</li>
			<li>Ice Cream Sunday @ Family Service - July</li>
			<li>Pebsham School Leaver's Service - July </li>
			<li>Sea Sunday - July </li>
			<li>RAFA Battle of Britain Service - September</li>
			<li>Pet Blessing Service - September</li>
			<li>Patronal Festival/Back to Church Sunday - bring and share party - September</li>
			<li>Woolly Hat - October</li>
			<li>Harvest Festival Lunch after Family Service - October</li>
			<li>A Service of Thanksgiving for Those We Have Loved - October</li>
			<li>Remembrance Sunday in aid of Royal British Legion - November</li>
			<li>Christmas Tree Festival - December</li>
			<li>Children's Christmas Crafts - December</li>
			<li>A Service to Welcome St Nicholas - December</li>
			<li>Christmas Tree Festival Party Evening - December</li>
			<li>Christmas Tea Party following Festival of Nine Lessons and Carols -December</li>
			<li>Church and School Carol Services - December</li>
			<li>Christmas Nativity Play - December</li>
			<li>Carols by Candlelight - December</li>
			<li>Crib Service & Christingle Service - December</li>
			<li>First Eucharist of Christmas - December</li>
		</ul>
	</p>
	<p><strong>Dates for jumble sales, quiz nights, beetle drives etc. will be announced and displayed at later dates.</strong>
	</p>

	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>