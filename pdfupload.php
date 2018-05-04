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
	
	<?php
	
	if(isset($_SESSION['sessionFirstname']) && isset($_SESSION['sessionLastname']))
	{
	
		$target_dir = "pdf/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		// Check if file already exists
		if (file_exists($target_file)) 
		{
			echo "Sorry, file already exists.<br />";
			$uploadOk = 0;
		}
		// Check file size
		/*if ($_FILES["fileToUpload"]["size"] > 50000000) 
		{
			echo "Sorry, your file is too large.<br />";
			$uploadOk = 0;
		}*/
		// Allow certain file formats
		if($imageFileType != "pdf" ) 
		{
			echo "Sorry, only PDF files are allowed.<br />";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			echo "Sorry, your file was not uploaded.<br />";
		// if everything is ok, try to upload file
		} 
		else 
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
			{
				echo "<p>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</p>";
				echo "<p>The file can be found <a href=\"pdf/" . basename( $_FILES["fileToUpload"]["name"]). "\">here</a>.</p>";
			} 
			else 
			{
				echo "Sorry, there was an error uploading your file.<br />";
			}
		}
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