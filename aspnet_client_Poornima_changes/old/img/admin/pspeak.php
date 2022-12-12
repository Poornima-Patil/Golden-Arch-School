<?php
include('include/header.php');
include('fckeditor/fckeditor.php') ;
?>
<?php
include("include/db.php");

		if (isset($_GET['del_id']))
		{
			$id=$_GET['del_id'];
			$de="delete from ga_parent_speak where Ps_id=$id";
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
      <td style="padding-left:50px;"><strong>parent's name: </strong></td>
      <td><label> 
        <input type="text" size="85" name="pname"  id="ntitle"/>
        </label></td>
    </tr>
	
    <tr>
      <td valign="top" style="padding-left:50px;"><br/><strong>parent's feedback: </strong></td>
      <td><label> <br/>
        <!--textarea class="pfeedback" name="pfeedback" cols="37" rows="5"></textarea-->

		<?php
		$ctrl_name = 'pfeedback';
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
      <td>&nbsp;</td>
      <td><label> 
        <input type="submit" name="save" id="save" value="Save" />
        <input type="button" name="cancel"class="cancel_button"  id="cancel" value="Cancel" onclick="javascript:window.location.replace('home.php');"/>
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
			$pn=$_POST['pname'];
			$pf=$_POST['pfeedback'];
				$ins="insert into ga_parent_speak(Ps_name,Ps_feedback) values('$pn','$pf')";
				mysql_query($ins);
		}	?>
		
		<table width="100%" border="0" align="left" style="border:1px solid;">
		<tr><td colspan="4" align="center" style="color:#FF0000; "><?php echo $msg; ?></td></tr>
		<tr><td><strong>Sr.No.</strong></td>
		<td><strong>Parent's Name</strong></td>
		<td><strong>Parent's Feedback</strong></td>
		<td><strong>Action</strong></td></tr>
		<?php
		$na="SELECT * from ga_parent_speak";
		$re=mysql_query($na);
		$i=1;
		$num=mysql_num_rows($re);
		if($num >0){
		while($row=mysql_fetch_array($re))
		{
		?>
		
		<tr >
		<td  style="padding-center:20px"><?php echo $i; ?></td>
		<td style="padding-center:200px" ><div style="float:left;margin-right:20px; font:18px bold;"><?php echo $row['Ps_name']; ?><div/></td>
		<td>  <div style="float:left;margin-right:10px;font:20px bold;"><?php echo $row['Ps_feedback']; ?></div> </td>
		<td> <a href="pspeak.php?del_id=<?php echo $row['Ps_id']; ?>" onClick="if(confirm('Are you sure you want to delete this record.')){ return true; }else { return false; }">Delete</a></td>
		</tr>
		<?php

			$i++; 
		}
		}else{?>
		<tr><td colspan="4" align="center" >No Record Available in your area.</td></tr>
		<?php } ?> </table>
		
		<?php
		 include('include/footer.php');
		 ?>
