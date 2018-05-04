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
		<h2>Community Halls</h2>
	</hgroup>
	
	<p>Large and small community halls available for hire.   
	One large one with seating for 80 people and a fully equipped industrial kitchen and a small tea/coffee making kitchen.
	One small hall with seating for 40 people and a large garden area attached with a small tea/coffee making kitchen.
	Both halls are ideal for children's parties, informal meetings, social clubs, dance groups, exercise groups.
	Both have disabled access and facilities.</p>
	<p>The following Community Groups use our halls on a regular basis, if you would like to join one of them then please
	use the contact details provided or <a href="mailto:judithhattam@btinternet.com">judithhattam@btinternet.com</a></p>
	<p>
		<ul>
			<li>East Bexhill Ladies Club</li>
			<li>Keep Fit Wednesdays</li>
			<li>St Michael's Lunch Club</li>			
			<li>St Michael's Toddlers Group</li>
			<li>3rd Bexhill Scouts</li>
			<li>Beavers</li>
			<li>Cubs</li>
			<li>Explorers</li>
			<li>Line Dancing Monday, Wednesday and Thursday </li>
			<li>Mother's Union</li>
			<li>St Michael's Craft & Chatter</li>
		</ul>
	</p>

	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>