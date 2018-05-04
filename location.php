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
		<h2>How To Find Us</h2>
	</hgroup>
	<p>If you are using a Satnav our post code is TN40 2NY.</p>
	<p><em>From Hastings</em></p>
	<p>Head west along A259, after passing Esso garage on your right take the second exit off the roundabout, take the next road on the right, this is Glassenbury Drive, go up the hill and you will find St Michael's on the right hand side.</p>
	<p><em>From Ninfield</em></p>
	<p>Continue south and go through Sidley, turn left opposite the BP Garage and continue along Wrestwood Road, at the traffic lights bear left, take the next road on your right, Glyne Ascent and then take the next road on your left, this is Glassenbury Drive, you will find St Michaels 150 yards on your left.</p>
	<p><em>From Eastbourne</em></p>
	<p>Head east along A259.  At Little Common Roundabout go straight ahead, 3rd Exit, at traffic light go straight ahead on the dual carriageway.  Go straight head at the next set of double traffic lights, passed the pedestrian traffic lights and straight on at the next set of lights, take the next road on the left, this is Glassenbury Drive, go up the hill and you will find St Michael's on the right hand side.</p>
	<p><iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1259.5957253793822!2d0.49762451599729157!3d50.846138910313336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1423754302232" width="600" height="450" frameborder="0" style="border:0"></iframe></p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>