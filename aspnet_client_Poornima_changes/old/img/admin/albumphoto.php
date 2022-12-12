<?php
include('include/header.php');
include('fckeditor/fckeditor.php') ;
?>
<?php
include("include/db.php");
if (isset($_GET['del_id']))
		{
			$id=$_GET['del_id'];
			$de="delete from ga_albumphoto WHERE Photo_id=".$_GET['del_id'];
			mysql_query($de);
			$msg="Your record is succefully deleted.";
		}
?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0" align="center" style="border:1px solid;">
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top" style="padding-left:50px;"><strong>Photo Name: </strong></td>
      <td><label> 
        <input type="text" size="85" name="pname" />
        </label></td>
    </tr>
	 <tr>
      <td valign="top" style="padding-left:50px;"><br/><strong>Photo Description: </strong></td>
      <td><label> <br/>
        <!--textarea class="pdiscription" name="pdiscription" cols="37" rows="5"></textarea-->

		<?php
		$ctrl_name = 'pdiscription';
		$sBasePath = 'fckeditor/';
		$oFCKeditor = new FCKeditor($ctrl_name) ;
		$oFCKeditor->Height = "300px";
		$oFCKeditor->Width = "530px";
		$oFCKeditor->BasePath = $sBasePath ;
		$oFCKeditor->Value = "" ;
		$oFCKeditor->Create() ;
		
		?>
        </label></td>
    </tr>
	<tr>
      <td style="padding-left:50px;"><strong>Photo Image:</strong></td>
      <td><label> 
        <input type="file" size="72" name="pg_image" id="pg_image"/>
        </label></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><label> 
        <input type="submit" name="save" id="save" value="Save" />
        <input type="button" name="cancel"  id="cancel" value="Cancel" onclick="javascript:window.location.replace('home.php')"/>
        </label></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<?php

if (isset($_POST['save'])) 
		{
			$album=$_REQUEST['alb_id'];
			
			$pn=$_POST['pname'];
			$pdes=$_POST['pdiscription'];
			$photo=$_FILES["pg_image"]["name"];
			$x=time();
			$photo_name = $x.'_'.$_FILES["pg_image"]["name"];
			move_uploaded_file($_FILES["pg_image"]["tmp_name"], "upload/" . $x."_".$_FILES["pg_image"]["name"]);
            //echo "Stored in: " . "upload/" . $_FILES["pg_image"]["name"];
			$ins="insert into ga_albumphoto(Photo_album,Photo_name,Photo_description,Photo_image) values('$album','$pn','$pdes','$photo_name')";
			//echo $ins;
			mysql_query($ins);
		}	
		
?>
		
		<table width="100%" height="100px" border="0" align="left" style="border:1px solid;">
		<tr><td colspan="6" align="center" style="color:#FF0000; "><?php echo $msg; ?></td></tr>
		<tr>
		<td><strong>Photo Image</strong></td>		
		<td><strong>Photo Name</strong></td>
		<td><strong>Photo description</strong></td>
		<td><strong>Action</strong></td>
		</tr>
		<?php
		$na="SELECT * from ga_albumphoto WHERE Photo_album=".$_GET['alb_id'];
		//echo $na;
		$re=mysql_query($na);
		$num=mysql_num_rows($re);
		if($num >0){
		while($row=mysql_fetch_array($re))	{
		?>		
		<tr>
		<td  style="padding-center:20px"><img src="upload/<?php echo $row['Photo_image']; ?>" alt="photo gallery" width="50px;" height="50px;"> </td>		
		<td style="padding-center:200px" ><div style="float:left;margin-right:20px; font:18px bold;"><?php echo $row['Photo_name']; ?><div/></td>
		<td>  <div style="float:left;margin-right:10px;font:20px bold;"><?php echo $row['Photo_description']; ?></div> </td>
		<td> <a href="albumphoto.php?alb_id=<?php echo $_GET['alb_id']; ?>&del_id=<?php echo $row['Photo_id']; ?>" onClick="if(confirm('Are you sure you want to delete this record.')){ return true; }else { return false; }">Delete</a></td>
		</tr>
		<?php 
		}
		}else{?>
		<tr><td colspan="4" align="center" >No Record Available in this album.</td></tr>
		<?php } ?> </table>
<?php
include('include/footer.php');
?>

