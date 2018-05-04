<?php

$term = $_POST['news'];

include 'database_conn.php';
			
	if($term == "Default")
	{	
		echo "Please do not select the default option.";
	}
	else
	{	
		$sql = "SELECT * FROM `Posts` WHERE PostID = $term";
			
		$queryresult = mysql_query($sql) or die(mysql_error());
		$count=mysql_num_rows($queryresult);
			
		while ($row = mysql_fetch_assoc($queryresult))
		{
			$postid = $row['PostID'];
			$title = $row['Title'];
			$posttext= $row['PostText'];
			$postdate = $row['PostDate'];	
				
		}
		
		echo "$title";
	}


?>