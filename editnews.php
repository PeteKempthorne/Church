<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "js/editnewsjs.js", "", "");
	
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
		
	echo "	<label>";
	echo "	Select news to edit";
	echo "	<select name=\"news\" id=\"newsage\">";
	echo "		<option value=\"Default\" selected>---Select news to edit---</option>";
			
			include 'database_conn.php';
			
			$sql = "SELECT * FROM Posts ORDER BY PostDate DESC";
			
			$queryresult = mysql_query($sql) or die(mysql_error());
			$count=mysql_num_rows($queryresult);
			
			while ($row = mysql_fetch_assoc($queryresult))
			{
				$postid = $row['PostID'];
				$title = $row['Title'];
				$posttext= $row['PostText'];
				$postdate = $row['PostDate'];					
				echo"<option value=\"$postid\">$title</option>";				
			}			
						
		echo "</select>";
		echo "<input type=\"button\" value=\"Select\" id=\"submit\"><br>";
		echo "<div id=\"formLayout\">";
		echo "<FORM id=\"form\" name=\"form\">";
		echo "	<label for=\"title\">Title:</label>";
		echo "	<input type=\"text\" id=\"title\" name=\"title\" /><br><br>";
		echo "	<label for=\"posttext\">Content:</label>";
		echo "	<textarea id=\"posttext\" name=\"posttext\"></textarea><br><br>";
		echo "	<label for=\"submitedit\">Submit Edit:</label>";
		echo "	<input type=\"button\" value=\"Submit\" id=\"submitedit\"><br>";					
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