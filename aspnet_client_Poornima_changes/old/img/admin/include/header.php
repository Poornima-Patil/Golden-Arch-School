<?php 
error_reporting(0);
session_start();

if(isset($_SESSION['email'])!='admin@goldenarch.com'){

?>
<script type="text/javascript">
   window.location.replace("index.php?msg=Please Login First.");
</script>
<?php
}
 ?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--script src="http://maps.google.com/maps?file=api&v=1&key=ADD_YOUR_KEY_HERE" type="text/javascript"></script-->
<title>Golden Arch Montessory Admin Control Panel</title>
<style type="text/css">
<!--
.genral{
	padding-left:40px;

}
.style3 {	color: #3366FF;
	font-weight: bold;
	font-size: 18px;
}
.genral1 {	padding-left:35px;
}
.style6 {color: #3366FF;
	font-weight: bold;
	padding-left:10px;
}
.textpopup{
display:none;
width:560px;
 border:1px solid #000; 
 position:relative;
  z-index:1;
  background-color:#fff;
  color:#000;
  padding:5px 10px;
  text-align:justify;
  text-indent:50px;
  margin:0px 0 0 5px;
  }
  
-->
</style>
</head>

<body>
<div align="center"><img src="../images/banner_new.JPG" width="1000px" height="250px;" /></div>
<table width="1000px" border="0" align="center" style="border:1px solid;">
  <tr>
    
    <td colspan="3"><div align="center"><span class="style3">Welcome To Golden Arch Montessory Admin Control Panel</span></div><hr/></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td rowspan="9" valign="top" colspan="2">&nbsp;
	
      <span style="font-weight: bold; font-size: 24px">Welcome</span> Miss Anupama
	  
	  
      <!-- <a href="pspeak.php" style="padding-left:400px;text-decoration:none">Parent's speak</a>||<a href="nletter.php" style="text-decoration:none">News Letter</a> || <a href="nboard.php" style="text-decoration:none">Notice Board</a> || <a href="team.php" style="text-decoration:none">Our Team</a> || <a href="logout.php" style="text-decoration:none">Logout</a> -->