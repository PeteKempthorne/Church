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
		<h2>Brief History of the Church</h2>
	</hgroup>
	<p>In 1924 a decision was taken to build a church in the East side of Bexhill anticipating the expansion of the town in this direction
	and with the intention of easing the overcrowding in term time of the churches of St Peter and St Barnabas.  
	At the time there were many private schools in the area.  </p>
	<p>Having chosen the site, on the then empty Glyne Hill, the church rose quickly and was dedicated on the eve of Ascension Day,
	May 28th 1930.  The final Consecration took place in 1933.  The war years were spent quietly with most of the private schools being 
	evacuated away from the South Coast, but once a curate's house had been purchased in Glassenbury Drive the church was able to develop
	its own ministry to the expanding East Bexhill.</p>
	<p>The Church is built in a Gothic revival style from locally made bricks and dressed stone.  The interior has a Sussex barn roof. 
	The tower was hung with tiles in the 1960's to try to ameliorate the damage done by the sea air to the pointing. 
	The very large altar had originally fitted into the alcove below the East window and had later been brought to the centre of the raised 
	area in the sanctuary.  With the re-ordering of the church in 1997, the altar was remade into the pedestal seen now and moved centrally 
	in the sanctuary, which was extended into the present apron. The wall hangings were commissioned and created to fill the alcove.</p>
	<p>The addition of a hall in 1961 allowed the introduction of the community activities that have been a feature of our outreach ever 
	since.  This hall had to be replaced in 2003.  The large hall was built in 1972, or rather rebuilt, as it had served for many years as the
	gymnasium of St Francis School by Bexhill Down.</p>
	<p>These halls are in daily use with a variety of activities for all age groups.</p>
	<p><img id="ewindow" src="img/eastwindow1.png" align="left">The East window was designed and supervised by Marion Cantrell.  
	The creative processes and installation were carried out by Shades of Light in Shadwell, London. It was dedicated on St Michael's Day 
	2003. The shapes extend and echo those in the panels below. The central dove of the Holy Spirit is surrounded with etched flames
	representing the sacraments. The haloes, each engraved with a different design, lift the angels, from the panels below, heavenwards.  
	The curved shapes in the four outer panels can be seen as wings, as in the panels below, as praying figures, or as enfolding hands 
	supporting and uplifting us.  The play of light across the "reaming" of the hand blown glass adds another dimension to the etching.  
	The appearance and emphasis of the window is ever changing with the variations of the light streaming in. </p><br>
	<p><img id="hangings" src="img/embroideredhangings.png" align="left">The Embroidered hangings were designed and 
	worked by Marion Cantrell in 1997 and reflect the shape of the window lights.  The whole depicts the Church as one body, with
	symbols to portray St Michael and All Angels and, essentially, holiness.  The central panel depicts light reaching out and the eternal 
	serpent slain by the cross or sword of Christ's sacrifice. The outer panels have angelic symbols and silhouette human shapes and are 
	reversible.</p><br />
	<p>The West end of the church was re-ordered in 2007. The north door was widened to allow wheelchair access and the walls were
	rendered to match to those of the Sanctuary. In 2014 a whole new roof was done with stonework cleaned up on the South facing side.</p>
	<?php 
	$page->getEndContent();
	$page->getPageBottom();
?>