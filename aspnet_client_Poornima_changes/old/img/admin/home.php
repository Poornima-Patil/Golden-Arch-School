<style type="text/css">
<!--
.style3 {	color: #3366FF;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
<?php
include('include/header.php');
include('fckeditor/fckeditor.php') ;
?>


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0" align="center" style="border:1px solid;">
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="padding-left:50px;"><strong>News Title: </strong></td>
      <td><label> 
        <input type="text" size="85" name="newstitle"  id="newstitle"/>
        </label></td>
    </tr>
    <tr>
      <td style="padding-left:50px;"><strong>News Photo: </strong></td>
      <td><label> 
        <input type="file" size="72" name="file" id="file"/>
        </label></td>
    </tr>
    <tr>
      <td valign="top" style="padding-left:50px;"><br/><strong>News Description: </strong></td>
      <td><label> <br/>
        <!--textarea name="newsdiscription" id="newsdiscription" cols="37" rows="5"></textarea-->

		<?php
		$ctrl_name = 'newsdiscription';
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
        <input type="button" name="cancel"  id="cancel" value="Cancel" onclick="javascript:window.location.replace('news.php')"/>
        </label></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
	<?php

 include('include/footer.php'); ?>