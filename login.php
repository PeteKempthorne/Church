<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "", "" , "");
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<form action="" method="post">
			<div id="formLayout">
			<fieldset>
			<p><b>Admin sign in</b></p><br />
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" /><br /><br />
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" /><br /><br />
			<label for="Sign In"> </label><input type="submit" value="Sign In" class="submitlogin"><br /><br />
			</fieldset>
			</form>
			</div>
		
			
		
		<?php
		error_reporting(0);
		include 'database_conn.php';		

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//old way
		$username=mysql_real_escape_string($username);
		$password=mysql_real_escape_string($password);
		
		//$username = mysqli_real_escape_string($username);
		//$password = mysqli_real_escape_string($password);
		
		if($username == "")
		{
			$errors[] = "Please enter a username";
		}
		if($username != "" && strlen($username) < 4)
		{
			$errors[] = "Username has to be at least 4 characters long";
		}
		if($username != "" && !preg_match("/^[a-zA-Z0-9 \-]{0,255}$/i", $username))
		{
			$errors[] = "Please do not enter unacceptable characters into the username field";
		}
		if($password == "")
		{
			$errors[] = "Please enter a password";
		}
		if($password != "" && strlen($password) < 8)
		{
			$errors[] = "Username has to be at least 8 characters long";
		}
		if($password != "" && !preg_match("/^[a-zA-Z0-9 \-]{0,255}$/i", $password))
		{
			$errors[] = "Please do not enter unacceptable characters into the username field";
		}
		if($errors)
		{
			echo "<em>The following problem(s) occured:</em><br />\n";
			for ($a=0; $a < count($errors); $a++)
			{
				echo "$errors[$a] <br />\n";
			}
		}
		else
		{
			$sql = "select * from User where UserName = '$username' and Password = '$password'";
			
			$queryresult = mysql_query($sql) or die(mysql_error());		
			
			while ($row = mysql_fetch_assoc($queryresult))
			{
				$UserID = $row['UserID'];
				$firstname = $row['FirstName'];
				$lastname = $row['LastName']; 										
			}
			$count=mysql_num_rows($queryresult);		
			if($count==1)
			{			
				session_start();
				$_SESSION['sessionUserID']=$UserID;
				$_SESSION['sessionFirstname']=$firstname;
				$_SESSION['sessionLastname']=$lastname;
				echo "<p><b>You are successfully logged in. Click <a href=\"admin.php\">here</a> for admin page.</b></p>";							
			}
			else
			{
				if(isset($_POST['username']) && isset($_POST['password']))
				{
					echo "<b>Bad password or username</b>";
				}
			
			}
		}
		?>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>