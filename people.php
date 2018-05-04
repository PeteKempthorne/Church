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
	<hgroup> 
		<h2>Church Contacts</h2>
	</hgroup>
	<div id="contactwrapper">
		<div id="contactleft">
			<p>Fr Robert Featherstone, Vicar</p>
			<p><img src="img/FrRobert.jpg"></img></p>
			<p>Judith Hattam, Parish Warden, Church Warden</p>
			<p><img src="img/JudithHattam.jpg"></img></p>
			<p>Ruth Gregory, Church Warden</p>
			<p><img src="img/RuthG.jpg"></img></p>
		</div>
		<div id="contactright">
			<p>Alison Marchant, Reader</p>
			<p><img src="img/AlisonMarchant1.jpg"></img></p>
			<p>Paul Abnett, Organist Emeritus</p>
			<p><img src="img/PaulAbnett.jpg"></img></p>
			<p>John Hudson, Hon. Treasurer</p>
			<p><img src="img/JohnHudson.jpg"></img></p>					
		</div>
		
	</div>
	<br /><p>All Age Worship: Robin Jackman, Jenny, Terry, Alison, Jill and Rosemary</p>
	<p><img src="img/allage.jpg"></img></p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>