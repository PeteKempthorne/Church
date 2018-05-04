<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "js/editnewsjs.js" );
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	
	<?php
	if(isset($_SESSION['sessionFirstname']) && isset($_SESSION['sessionLastname']))
	{
		echo"<p><b>Admin Page</b></p>";
		echo"<p><ul>";
		echo "<li><a href=\"newnews.php\">Post News</a></li>";
		echo "<li><a href=\"editnews.php\">Edit News</a></li>";
		echo "<li><a href=\"photo-upload.php\">Upload to gallery</a></li>";
		echo "<li><a href=\"pdf-upload.php\">Upload PDF</a></li>";
		echo "<li><a href=\"logout.php\">Logout</a></li>";
		echo"</ul></p><br />";
	}
	else
	{
		echo "<strong>You must be logged in to view this. Login <a href=\"login.php\">here</a></strong>";
	}
	?>
	<?php 
	
	$page->getEndContent();
	$page->getPageBottom();
?>