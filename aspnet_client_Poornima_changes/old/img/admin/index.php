<?php session_start(); 
 if(isset($_POST['login'])) {
	 $email=$_POST['adm_name'];
	 $pwd=$_POST['adm_pwd']; 
	 if($email=='admin@goldenarch.org.in' && $pwd=='Golden'){
		 $_SESSION['email']= $email;
?>
<script type="text/javascript">
   window.location.replace("home.php");
</script>
<?php	 
	 }
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Golden Arch Montessory Admin Login </title>
<script type="text/javascript">
function validate(form){
 var userName = document.login_form.adm_name.value;
 var password = document.login_form.adm_pwd.value;

 if (userName.length == 0) {
  alert("You must enter email.");
  return false;
 }

 if (password.length == 0) {
  alert("You must enter password.");
  return false;
 }

 return true;
}
</script>
<style type="text/css">
<!--
.style1 {
	color: #3399FF;
	font-weight: bold;
}
.style2 {
	color: #FF0000;
	font-size: 9px;
}
-->
</style>
</head>

<body > 
<div align="center" style="background-color:#fdf5a0;width:1000px;margin-left:75px;">
<form name="login_form" method="POST" action=""  onsubmit="return validate(this);">
<p>&nbsp;</p>
<table width="68%" border="0" style="border-width:1px solid black;">
  <tr>
    <td height="32" colspan="3"><div align="center"><span class="style1">Welcome To Golden Arch Montessory Admin Login Panel </span></div><hr/></td>
    </tr>
  <tr>
    <td style="padding-left:150px;">&nbsp;</td>
    <td style="color:#FF0000;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; } ?></td>
    <td><span class="style2">*</span> - mandatory </td>
  </tr>
  <tr>
    <td width="36%" style="padding-left:150px;"><strong>Email-Id :<span class="style2">*</span> &nbsp;</strong></td>
    <td width="50%"><input type="text" name="adm_name" size="50" /></td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding-left:150px;"><strong>Password  :<span class="style2">*</span></strong></td>
    <td><input type="password" name="adm_pwd" id="adm_pwd" size="50" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Login" name="login" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<br/>
<p>&nbsp;</p>
</form>
</div>
</body>
</html>