<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "js/newnewsjs.js", "", "");
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	
	?>
	
	
	
	<?php
	if(isset($_SESSION['sessionFirstname']) && isset($_SESSION['sessionLastname']))
	{
		
		echo "<fieldset class=\"account-info\">";
		echo "<div id=\"h2title\">";
		echo	"<h2>Upload PDF</h2>";
		echo "</div>";
		echo "<div id=\"formLayout\">";
		echo "<FORM action=\"pdfupload.php\" method=\"post\" id=\"form\" name=\"form\" enctype=\"multipart/form-data\">";
		echo	"<label for=\"fileToUpload\" id=\"uploadlab\">Select pdf to upload:</label>";
		echo	"<input type=\"file\" id=\"fileToUpload\" name=\"fileToUpload\" />";
		echo	"<input type=\"submit\" value=\"Upload PDF\" name=\"submit\"><br />";
				
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