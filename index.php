<?php include('includes/doc.php'); ?>
<body id="home">
<?php include('includes/header.php'); ?>


<!-- SPLASH -->

<div id="splash">
<div id="calltoaction"></div>
<script type="text/javascript">

featuredcontentglider.init({
	gliderid: "splashpics", //ID of main glider container
	contentclass: "glidecontent", //Shared CSS class name of each glider content
	togglerid: "p-select", //ID of toggler container
	remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
	selected: 0, //Default selected content index (0=1st)
	persiststate: false, //Remember last content shown within browser session (true/false)?
	speed: 500, //Glide animation duration (in milliseconds)
	direction: "downup", //set direction of glide: "updown", "downup", "leftright", or "rightleft"
	autorotate: true, //Auto rotate contents (true/false)?
	autorotateconfig: [8000, 2000] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
})

</script>



<div id="splashpics" class="glidecontentwrapper">

<div class="glidecontent">
<a href="work.php"><img src="img/splash.png" alt="rock your socks off" style="float: left; padding: 0px" /></a>
</div>

<div class="glidecontent">
<a href="work.php"><img src="img/splash2.png" alt="rock your socks off" style="float: left; padding: 0px" /></a>
</div>

<div class="glidecontent">
<a href="work.php"><img src="img/splash3.png" alt="rock your socks off" style="float: left; padding: 0px" /></a>
</div>

<div class="glidecontent">
<a href="work.php"><img src="img/splash4.png" alt="rock your socks off" style="float: left; padding: 0px" /></a>
</div>

<div class="glidecontent">
<a href="work.php"><img src="img/splash5.png" alt="rock your socks off" style="float: left; padding: 0px" /></a>
</div>

</div>

<div id="p-select" class="glidecontenttoggler" style="z-index:200">
<a href="#" class="prev">Prev</a> 
<a href="#" class="toc">1</a> <a href="#" class="toc">2</a> <a href="#" class="toc">3</a><a href="#" class="toc">4</a><a href="#" class="toc">5</a>
<a href="#" class="next">Next</a>
</div>



</div><!-- End OF SPLASH -->


<!-- CONTENT_AREA -->
<div id="content_area">

<a href=""><img src="img/tab1.png" alt="services" /></a>

<a href="about.php"><img src="img/tab2.png" alt="about us" /></a>

<a href="work.php"><img src="img/tab3.png" alt="portfolio" /></a>


<!-- HOME PAGE TEXT AREA -->

<div id="home_content_left">

<h3>Smart, beautiful, hand-crafted websites</h3>

<span class="intro_text">I work with small businesses and individuals who need an effective online presence to create professional, attractive websites built according to web standards. You can view some of my <a href="work.php">work</a> or <a href="contact.php">contact me</a>.</span>

</div><!-- END OF HOME PAGE TEXT AREA -->



<!-- HOME PAGE FORM AREA -->

<div id="home_content_right">

<form action="mailer.php" method="post" class="contactform">

<label>Name:</label> 

<input name="from" type="text" value="" class="input-textarea"/>
  
<br />
<br />

<label>Email:</label> 

<input name="subject" type="text" value="" class="input-textarea"/>

<br />
<br />

<label>Message:</label> 

<textarea name="message" cols="8" rows="5"></textarea>

<br />

<input name="Submit" type="submit" value="" class="input-submit" /></form>

</div><!-- END OF HOME PAGE FORM AREA -->




</div><!-- End OF CONTENT_AREA -->







<?php include('includes/footer.php'); ?>