<?php 

	// require the class definition file
	require_once( "webpage.class.php" );
	
	// create a new instance of the webpage class passing the title and an array of stylesheets to the constructor
	$page = new Webpage( "St Michael's Church Bexhill", "test.css", "", "", "");
	
	// echo the page contents back to the browser
	$page->getPageTop();
	$page->getNav();
	$page->getContent();
	//content here
	?>
	<hgroup> 
		<h2>Fundraising for St Michael's Church</h2>
	</hgroup>
	<p>These days, most people are aware that churches do not receive any central funding and have to be self-supporting financially;
	our Charity Registration number is 1131504.</p>
	<p>Currently, we have to raise about 20% of our costs via additional fundraising.  With the current 'credit crunch' having an adverse 
	effect on fundraising for many charities, 'Easyfundraising' is an easy way of raising extra funds, at no cost to ourselves.</p>
	<p>Coffee and Tea are normally served in our Large Hall after the main 10.30 service</p>
	<p>The <a href="http://www.easyfundraising.org.uk/causes/stmichaelallangelsbexhill/?t=Easyfundraising-lo">Easyfundraising</a> site itself, once you are registered, enables your chosen cause (St Michael's) to benefit by receiving anything 
	from 0.5% to 15% of any online purchase you may make through its site</p>
	<p>Likewise, <a href="http://stmichaelallangelsbexhill.easysearch.org.uk/">Easysearch</a> will donate 50% of advertising fees received from its sponsors to your chosen cause (St Michael's) for every 
	online search you make.</p>
	<p>Click on the above links to help raise funds for our church!</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>