<?php

class Webpage
//starts webpage class
{
	//private variables to be used in the constructor
   	private $stylesheet;
	private $title; 
	private $script;
	private $scriptTwo;
	private $scriptThree;
	
	function __construct($title, $stylesheet, $script, $scriptTwo, $scriptThree)
	//The constructor
	{
		$this->title = $title;
		$this->styles = $stylesheet;
		$this->script = $script;
		$this->scriptTwo = $scriptTwo;
		$this->scriptThree = $scriptThree;
	}//end of constructor
	
	function displayHeadFirst()
	{
		//starts the function to display the first part fo the head section
		//ending the PHP so that I don't have to echo all the HTML and use backslahses in front of quotes
		?><?php
session_start();
?>
 <!--

Peter Kempthorne

Version 1.0
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="keywords" content="st michael's church, bexhill-on-sea, bexhill church, bexhill st michael's,
	church in bexhill, church in hastings, church near hastings, bexhill weddings, bexhill baptism, hastings wedding
	hastings baptism, christmas tree festival">
	<meta name="description" content="St Michael's Church located in Bexhill-On-Sea is a great place of worship
	with weekly meetings and seasonal events. We also do Baptisms and weddings too.">
	<meta charset="UTF-8" />
	 <?php
	}//end of head1   
	
	function displayTitle()
	{
		//starts the function to display the page title
		echo "<title>$this->title</title>\n";
		
	}//end of title
	
	function displayStyle()
	{
		//starts the function to display the end of the stylesheet
		echo "<link href=\"$this->styles\" rel=\"stylesheet\" type=\"text/css\" />\n";
		
	}//end of style
	
	function displayStyleExtra()
	{
		//starts the function to display the end of the stylesheet
		echo "<link rel=\"Stylesheet\" type=\"text/css\" href=\"jHtmlArea.css\" />\n";
		
	}//end of style
	
	function displayScript()
	{
		//starts the function to link the javascript
		echo "<script src=\"$this->script\"></script>\n";
		
	}//end of style
            
	function displayScriptTwo()
	{
		//starts the function to link the javascript
		echo "<script src=\"$this->scriptTwo\"></script>\n";
		
	}//end of style
	
	function displayScriptThree()
	{
		//starts the function to link the javascript
		echo "<script>$this->scriptThree</script>\n";
		
	}//end of style
	    
	function displayJQ()
	{
		//starts the function to link the jquery library
		echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>\n"; 
		
	}//end of style
	
	    
	function displayHeadSecond()
	{
		//starts the function to display the end of the head section
		?>
            </head>
        <?php
	}//end of head 2
	 	
	function displayTop()
	{
		//starts the function to display the page header content
		
        
		?>
            <body id="index" class="home">
<header id="banner" class="body">
	<h1><img src="img/stmichaelslogo2.png" alt="Welcome to St Michael's and All Angels Church in Bexhill-On-Sea"></h1> 
	<?php
	}
	
	function displayNav()
	{
		//starts the function to display the page nav area
		
        
		?>
	
	<nav><ul>
		<li class="active"><a href="index.php">Home</a></li>
		<?php/*
			include 'database_conn.php';
			
			$sql = "SELECT * FROM Category ORDER BY CatID";
			
			$queryresult = mysql_query($sql) or die(mysql_error());
			$count=mysql_num_rows($queryresult);
			
			while ($row = mysql_fetch_assoc($queryresult))
			{
				$catID = $row['CatID'];
				$catName = $row['CategoryName'];				
				echo"<li><a href=\"#\">$catName</a>";
				echo"<ul>";
				$sql2 = "SELECT * FROM Pages WHERE CatID = $catID ORDER BY PagesID DESC";
			
				$queryresult2 = mysql_query($sql2) or die(mysql_error());
				$count2=mysql_num_rows($queryresult2);
			
				while ($row2 = mysql_fetch_assoc($queryresult2))
				{
					$pageName = $row2['PageName'];
					$pageUrl = $row2['PageURL'];
					echo"<li><a href=\"$pageUrl \">$pageName</a></li>";				
				}
				echo"</ul>";
				echo"</li>";
			}*/?>
		
		<li><a href="#">Our Church</a>
			<ul>
				<li><a href="people.php">People</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="history.php">History</a></li>
				<li><a href="DataProtection.pdf">GDPR</a></li>				
			</ul>
		</li> 
		<li><a href="#">Our Worship</a>
			<ul>
				<li><a href="services.php">Weekly Services</a></li>
				<li><a href="baptism.php">Baptism</a></li>
				<li><a href="weddings.php">Weddings</a></li>
				<li><a href="the-wider-church.php">The Wider Church</a></li>
			</ul>
		</li>
		<li><a href="#">Events</a>
			<ul>
				
				<li><a href="christmas-tree-festival.php">Christmas Tree Festival</a></li>				
				<li><a href="year-ahead.php">Events - Year Ahead</a></li>				
				<li><a href="fundraising.php">Fundraising</a></li>
			</ul>
		</li>
		<li><a href="hall-users.php">Community Halls</a>
		</li>
		<li><a href="#">Contact</a>
			<ul>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="location.php">Location</a></li>
			</ul>
		</li>
		/*?>*/
		
	</ul>
	<?php
	if(isset($_SESSION['sessionFirstname']) && isset($_SESSION['sessionLastname']))
	{
		echo "<p><a href=\"admin.php\">Admin</a></p>";
	}
	?>
	
	
	</nav>
 
</header><!-- /#banner -->

<?php 
	}
 
 function displayContent()
	{
		//starts the function to display the page content area
		
        
		 ?>
 
<aside id="featured" class="body"><article>

	<?php 
	} 
	

function displayEndContent()
	{
	?>
</article></aside><!-- /#featured -->
 <?php
	}
	
	 function displayNews()
	{
		//starts the function to display the page content area
	
        
		?>
<section id="content" class="body">
	<ol id="posts-list" class="hfeed">
	<?php 
	include 'database_conn.php';
		
		//$sql = "SELECT * FROM `posts` ORDER BY `posts`.`PostDate` DESC";
		$sql = "SELECT User.FirstName, User.LastName, Posts.PostID, Posts.Title, Posts.PostText, Posts.PostDate 
		FROM Posts
		INNER JOIN User
		ON Posts.UserID = User.UserID
		ORDER BY PostID DESC
		LIMIT 5";
							 
		$queryresult = mysql_query($sql) or die(mysql_error());
		$count=mysql_num_rows($queryresult);
		//if($count<5)
		//{
		while ($row = mysql_fetch_assoc($queryresult))
		{

			$postid = $row['PostID'];
			$title = $row['Title'];
			$fname = $row['FirstName'];
			$lname = $row['LastName'];
			$posttext= $row['PostText'];
			$postdate = $row['PostDate'];			
?>
			<li><article class="hentry">	
			<header>
				<h2 class="entry-title"><?php echo "$title" ?></h2>
 
			</header>
			<footer class="post-info">
				<abbr class="published" title="2015-20-10T14:07:00-07:00"><!-- YYYYMMDDThh:mm:ss+ZZZZ -->
					<?php 
						
						$newDate = date("jS F Y", strtotime($postdate));
						echo "$newDate";
					?>
				</abbr>
			<address class="vcard author">
 
					By <a class="url fn" href="#"><?php echo "$fname $lname" ?></a>
				</address>
			</footer><!-- /.post-info -->
			<?php echo"<p>$posttext</p>" ?>
			</div><!-- /.entry-content -->
		</article></li>
		<?php 
		//}
		}
		
		?>
		</ol><!-- /#posts-list -->
</section><!-- /#content --> 

<?php
	}//end header
	
	function displayBottom()
	{
		?>
	
<footer id="contentinfo" class="body">
	<address id="about" class="vcard body">
		<span class="img1">
			<img src ="img/tcoe.png" alt="Part of the Church of England"/>			
		</span>		
		<span class="details">
			<p>St Michael and All Angels<br />
			Bexhill Parish Team Ministry<br />
			Charity No 1131504</p>
			</p>
		</span>		
		<span class="img2">
			<img src ="img/acny.jpg" alt="A church near you"/>
		</span>
 
	</address><!-- /#about -->
</footer><!-- /#contentinfo -->
 
</body>
</html>
		
		<?php
	}
	
   	function getPageTop()
	{	
		//this starts the main function, display, which will display the whole page
		$this -> displayHeadFirst();//displays the first part of the head
		$this -> displayTitle();//displays the page title
		$this -> displayJQ();//displays the JQuery link
		$this -> displayStyle();//displays the stylesheet
		$this -> displayScript();//displays the Javascript
		$this -> displayScriptTwo();//displays the Javascript	
		$this -> displayScriptThree();//displays the Javascript	
		$this -> displayHeadSecond();//displays the second part of the head
		$this -> displayTop();//displays the top of the body

	}
	
	function getPageTopExtra()
	{	
		//this starts the main function, display, which will display the whole page
		$this -> displayHeadFirst();//displays the first part of the head
		$this -> displayTitle();//displays the page title
		$this -> displayJQ();//displays the JQuery link
		$this -> displayStyle();//displays the stylesheet
		$this -> displayStyleExtra();//Extra sheet for jHTML area
		$this -> displayScript();//displays the Javascript
		$this -> displayScriptTwo();//displays the Javascript	
		$this -> displayScriptThree();//displays the Javascript
		$this -> displayHeadSecond();//displays the second part of the head
		$this -> displayTop();//displays the top of the body

	}
	
	function getNav()
	{
		$this -> displayNav();//displays the news area
	}
	
	function getContent()
	{
		$this -> displayContent();//displays the news area
	}
	
	function getEndContent()
	{
		$this -> displayEndContent();//displays the news area
	}
	
	function getNews()
	{
		$this -> displayNews();//displays the news area
	}
	
	function getPageBottom()
	{	
		$this -> displayBottom();//displays the rest of the body

	}//end of display fucntion

}//end of class

?>