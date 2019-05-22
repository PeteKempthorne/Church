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
			<p>Vicar - Position, Curently Vacant</p>
			<p><img src="img/Sil.jpg"></img></p>
			<p>Ruth Gregory, Parish Warden</p>
			<p><img src="img/RuthG.jpg"></img></p>
			<p>Lorraine McGuire, Church Warden</p>
			<p><img src="img/LorraineMcGuire.jpg"></img></p>
			<p>Jill Andrews, Deputy Church Warden</p>
			<p><img src="img/JillAndrews.jpg"></img></p>
		</div>
		<div id="contactright">
			<p>Judy Harrison, Deputy Church Warden</p>
			<p><img src="img/JudyHarrison.jpg"></img></p>
			<p>Alison Marchant, Reader</p>
			<p><img src="img/AlisonMarchant1.jpg"></img></p>
			<p>Paul Abnett, Organist</p>
			<p><img src="img/PaulAbnett.jpg"></img></p>
			<p>John Hudson, Honorary Treasurer</p>
			<p><img src="img/JohnHudson.jpg"></img></p>					
		</div>
		
	</div>
	<br /><p>All Age Worship: Robin Jackman, Jenny Nightingale, Terry Andrews, Alison Marchant, Jill Andrews and Rosemary Roberts</p>
	<p><img src="img/allage.jpg"></img></p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>