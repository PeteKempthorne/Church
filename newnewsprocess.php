<?php


$title = $_POST['title'];
mysql_real_escape_string($title);
$posttext = $_POST['content'];
$postdate = date("Y-m-d");
$UserID = $_SESSION['sessionUserID'];
	
	include 'database_conn.php';
	//$mysqli = new mysqli('db567891655.db.1and1.com', 'dbo567891655', 'sk512mh8pd9', 'db567891655');
	//$result = $mysqli->query("INSERT INTO Posts (UserID, Title, PostText, PostDate) VALUES (2, '$title', '$posttext', '$postdate')");
	
	$sql = "INSERT INTO Posts (UserID, Title, PostText, PostDate) VALUES (2, '" .  mysql_real_escape_string($title) . "', '" .  mysql_real_escape_string($posttext) . "', '$postdate')";
	$result = mysql_query($sql);
	$result or die (mysql_error());
	
	if($result)
	{
		print 'Success! News posted.'; 
	}
	else
	{
		print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
	}


?>