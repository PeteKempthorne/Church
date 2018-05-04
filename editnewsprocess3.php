<?php

$title = $_POST['title'];
$posttext = $_POST['content'];
$theid = $_POST['news'];
	include 'database_conn.php';	
	/*$mysqli = new mysqli('db567891655.db.1and1.com', 'dbo567891655', 'sk512mh8pd9', 'db567891655');
	$result = $mysqli->query("UPDATE Posts
						SET Title='" .  mysql_real_escape_string($title) . "', PostText='" .  mysql_real_escape_string($posttext) . "'
						WHERE PostID='$theid'");
						

	if($result)
	{
		print 'Success! News updated'; 
	}
	else
	{
		print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
	}*/
	
	$sql = "UPDATE Posts	 SET Title='" .  mysql_real_escape_string($title) . "', PostText='" .  mysql_real_escape_string($posttext) . "' WHERE PostID='$theid'";
	$result = mysql_query($sql);
	$result or die (mysql_error());	
	if(mysql_affected_rows() < 0)
	{	
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		die($message);
	}
	else if(mysql_affected_rows() == 0)
	{
		print 'News item not changed';
	}
	else
	{
		print 'Successfully updated ' . mysql_affected_rows() . ' news item';
	}
	
?>