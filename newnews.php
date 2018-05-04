<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	//$page = new Webpage( "St Michael's Church Bexhill", "test.css", "js/newnewsjs.js", "js/jHtmlArea-0.8.js", "");
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "js/newnewsjs.js", "", "");
	
	// echo the page contents back to the browser
	$page->getPageTopExtra();
	$page->getNav();
	$page->getContent();
	//content here
	
	?>
	
	
	
	<?php
	if(isset($_SESSION['sessionFirstname']) && isset($_SESSION['sessionLastname']))
	{
		
		echo "<fieldset class=\"account-info\">";
		echo "<div id=\"h2title\">";
		echo	"<h2>Post new news to front page</h2>";
		echo "</div>";
		echo "<div id=\"formLayout\">";
		echo "<FORM id=\"form\" name=\"form\">";
		echo	"<label for=\"title\">Title:</label>";
		echo	"<input type=\"text\" id=\"title\" name=\"title\" /><br><br>";
		echo	"<label for=\"posttext\">Content:</label>";
		echo	"<textarea id=\"posttext\" name=\"posttext\"></textarea><br><br>";
		echo	"<label for=\"submitedit\">Submit Edit:</label>";
		echo	"<input type=\"button\" value=\"Submit\" id=\"submitnew\"><br>";
				
		echo "</form>";
		echo "</div>";
		echo "<div id=\"error\">";
		echo "</div>";
		echo "</fieldset>";
	
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