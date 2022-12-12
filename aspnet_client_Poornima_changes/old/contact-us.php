<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Contact Us - Golden Arch Montessori School</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Montessori and play school in BEML layout Brookefields near AECS layout and HSR layout">
	<meta name="keywords" content="Montessori, play school, Brookefields, AECS layout, Kundanahalli BEML layout, HSR layout, Bangalore East, Golden arch">
	
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="skins/blue.css" rel="stylesheet" />
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
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-90418320-2', 'auto');
	ga('send', 'pageview');
</script>
<?php
if(isset($_POST['send'])){
      $name = $_POST['u_name'];
      $from = $_POST['u_email'];
      $to   = "goldenarch2004@gmail.com";
      if(trim($_POST['u_contact']) != ''){
                $contact = $_POST['u_contact'];
      }else  $contact = "Not Available";
      $message =  "Dear Sir/Madam  \n\n You have one new enquiry message from ".$name." \n Message is given below \n".$_POST['u_mesg'];
      $subject =  "Message from ".$name."(".$contact.")";

     if(trim($_POST['u_name']) != ''){
           if(trim($_POST['u_email']) != ''){
			   if(trim($_POST['u_contact']) != ''){
					if(trim($_POST['u_mesg']) != ''){
						 mail($to,$subject,$message,"From: $from");
						 $msg = "Thanks for Contacting Us, We will Get Back to you.";
					 } else $msg ="Please Enter some message";
			   } else $msg = "Please Enter your Phone No.";
           } else $msg ="Please Enter your Email-Id";
    } else $msg ="Please Enter your Name";          
}
?>
</head>
<body>
	<div id="wrapper">
	
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li class="sep"></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Our School <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu topline">
									<li><a href="about-us.php">About Us</a></li>
									<li><a href="our-team.php">Our Team</a></li>
									<li><a href="facility.php">Facility &amp; Services</a></li>
									<li><a href="parents-speak.php">Parent's Speak</a></li>
								</ul>
							</li>
							<li class="sep"></li>
							<li><a href="primary-school.php">Elementary School Grade 1-5 </a></li>
							<li class="sep"></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Our Activities <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu topline">
									<li><a href="activity.php" class="sub">Activities</a></li>
									<li><a href="montessori-activity.php">Montessori Activities</a></li>
									<li><a href="after-school-activity.php">After School Activities</a></li>
									<li><a href="news-letter.php">News Letter</a></li>
								</ul>
							</li>
							<li class="sep"></li>
							<li><a href="photo-gallery.php">Photo Gallery</a></li>
							<li class="sep"></li>
							<li><a href="school-tie-ups.php">School Tie-Ups</a></li>
							<li class="sep"></li>
							<li><a href="notice-board.php">Notice Board</a></li>
							<li class="sep"></li>
							<li><a href="contact-us.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="top">
				<div class="container">
					<div class="row">
						
						<!-- -->
						<div class="col-md-8">
							<div class="headerLogo"> 
								<a class="navbar-brand" href="index.php"><img src="img/golden-arch-header.jpg" alt="Golden Arch Montessori School" class="img-responsive" /></a>
							</div>
						</div>
						<div class="col-md-4">
							<!--<div class="banner"> -->
								<div class="banner-boy"> </div>
							<!--</div>-->
						</div>
						
					</div>
				</div>
			</div>
			
		</header>
		<!-- end header -->
		
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 slide">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						
						<strong>Address:</strong>
						<p>
						# 363, 23rd Cross,<br>
						13th Main, Sector 7,<br>
						HSR Layout,<br>Bangalore<br>
						500m from HSR BDA Complex<br>
						300m from Bommanihalli Circle<br>
						1Km from Teachers Colony
						</p>
						<p>
						Office : (080) 2572 2077<br>
						Mobile : 7022502244<br>
						E-Mail : <a href="mailto:goldenarch2004@gmail.com">goldenarch2004@gmail.com</a></p>
						<?php print "<div align=\"center\" style=\"color:#FF0000;\">"; ?>
						<?php print $msg; ?>
						<?php print "</div>"; ?>
						<form action="" method="post" name="contact_form" class="contact-form" >
						<table width="100%" border="0" cellspacing="10" cellpadding="0">
							<tr>
							  <td width="20%" align="right" valign="top">Name:</td>
							  <td width="80%"  align="left"><input type="text"  name="u_name" id="u_name" value="<?php echo $_POST['u_name']; ?>" class="input-text"  /></td>
							</tr>
							<tr>
							  <td align="right" valign="top">Email:</td>
							  <td  align="left"><input type="text" name="u_email" id="u_email" value="<?php echo $_POST['u_email']; ?>" class="input-text" /></td>
							</tr>
							<tr>
							  <td align="right" valign="top">Phone Number:</td>
							  <td  align="left"><input type="text" name="u_contact" id="u_contact" value="<?php echo $_POST['u_contact']; ?>" class="input-text" /></td>
							</tr>
							<tr>
							  <td align="right" valign="top">Message:</td>
							  <td align="left"><textarea name="u_mesg" id="u_mesg" class="text-area"><?php echo $_POST['u_mesg']; ?></textarea></td>
							</tr>
							<tr>
							  <td>&nbsp;</td>
							  <td align="left"><input type="submit" name="send" id="send" value="Send Message"  /></td>
							</tr>
						  </table>
						</form>
						
					</div>

					<div class="col-lg-4">
						<aside class="right-sidebar">
							<div class="widget">
								<div class="img">
									<div id="map-canvas" style="width: 400px; height: 300px"></div>
									<!--div id="map" style="width: 400px; height: 300px"></div>
									<script type="text/javascript">
										var map = new GMap(document.getElementById("map"));
										var point = new GPoint(76.2739795,9.9211342);
										map.centerAndZoom(point, 3);
										var marker = new GMarker(point);
										map.addOverlay(marker);
									</script-->

									 <!--maps:Map xmlns:maps="com.google.maps.*" id="map" mapevent_mapready="onMapReady(event)" width="396px" height="300px"
										key="ABQIAAAAbUUT7Ml3JDV93GrHdAwlJRQFFaVGQo-pqL-TEIkE7zjdX7ez1hRKd7BVKKK5SiYm4jISXGFwQy07hg"/><img src="upload/map.jpg" width="396" height="300"-->
								</div>
							</div>
						</aside>
					</div>

				</div>


			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-lg-3">
						<div class="widget">
							<h4>Quick Links</h4>
							<ul class="link-list">
								<li><a href="index.php">Home</a></li>
								<li><a href="about-us.php">About Us</a></li>
								<li><a href="notice-board.php">Notice Board</a></li>
								<li><a href="contact-us.php">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="widget">
							<h4>Quick Links</h4>
							<ul class="link-list">
								<li><a href="activity.php">Activity</a></li>
								<li><a href="photo-gallery.php">Photo Gallery</a></li>
								<li><a href="school-tie-ups.php">School Tie-Ups</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="widget">
							<h4>Get in touch with us</h4>
							<address>
								<strong>Golden Arch Montessori School</strong><br />
								#363, 23rd Cross, 13th Main, Sector 7,<br />
								HSR Layout, Bangalore<br />
								500m from HSR BDA Complex, 300m from Bommanihalli Circle, 1Km from Teachers Colony
							</address>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="widget">
							<h4>&nbsp;</h4>
							<p>
								<i class="icon-phone"></i> (080) 2572 2077 <br />
								<i class="icon-mobile"></i> 7022502244 <br />
								<i class="icon-envelope-alt"></i> <a href="mailto: goldenarch2004@gmail.com">goldenarch2004@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="copyright">
								<p>Copyright &copy; 2019 Golden Arch Montessori - All Right Reserved</p>
							</div>
						</div>
						<div class="col-lg-4">
							&nbsp;
						</div>
						<div class="col-lg-4" align="right">
							<div class="credits">
								Designed and Maintained by <a href="http://www.nitamicrotek.com/" target="_blank">Nita Microtek</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>