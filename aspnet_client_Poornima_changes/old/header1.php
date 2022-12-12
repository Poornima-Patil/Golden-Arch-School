<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php print $title; ?></title>
<meta name="description" content="Montessori and play school in BEML layout Brookefields near AECS layout and HSR layout">
<meta name="keywords" content="Montessori, play school, Brookefields, AECS layout, Kundanahalli BEML layout, HSR layout, Bangalore East, Golden arch">

<link href="layout/screen.css" rel="stylesheet" media="screen" type="text/css">
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/validation.js"></script>
 <!--script src="http://maps.google.com/maps?file=api&v=3&key=ABQIAAAAbUUT7Ml3JDV93GrHdAwlJRQFFaVGQo-pqL-TEIkE7zjdX7ez1hRKd7BVKKK5SiYm4jISXGFwQy07hg" type="text/javascript"></script-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

      function initialize() {
        var mapDiv = document.getElementById('map-canvas');
        var map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(12.9102859 , 77.6450215),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      }


      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>
<body>
<div class="wrapper">
<div class="container">
		<ul class="navigation" id="menu">
        	<li><a href="contact-us.php">Contact Us</a></li>
            <li class="sep"></li>
			<li><a href="notice-board.php">Notice Board</a></li>
            <li class="sep"></li>
			<li><a href="school-tie-ups.php">School Tie-Ups</a></li>
            <li class="sep"></li>
			<li><a href="photo-gallery.php">Photo Gallery</a></li>
            <li class="sep"></li>
			<li><a href="#" class="sub">Our Activities</a>
                <ul class="topline">
            		<li><a href="activity.php" class="sub">Activities</a></li>
                    <li><a href="montessori-activity.php">Montessori Activities</a></li>
                    <li><a href="after-school-activity.php">After School Activities</a></li>
                    <li><a href="news-letter.php">News Letter</a></li>
                </ul>
            </li>
            <li class="sep"></li>
			<li><a href="primary-school.php">Primary School </a></li>
			      <li class="sep"></li>
			<li><a href="#">Our School</a>
            	<ul class="topline">
                	<li><a href="about-us.php">About Us</a></li>
                    <li><a href="our-team.php">Our Team</a></li>
                    <li><a href="facility.php">Facility &amp; Services</a></li>
                    <li><a href="parents-speak.php">Parent's Speak</a></li>
                </ul>
            </li>
            <li class="sep"></li>
			<li><a href="index.php">Home</a></li>
        </ul>
		<script type="text/javascript">
			var menu=new menu.dd("menu");
			menu.init("menu","menuhover");
        </script>
    	<div class="banner">
        	<div class="banner-boy1">

			</div>
        </div>