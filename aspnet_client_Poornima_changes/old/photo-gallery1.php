<?php $title ="Golden Arch Montessori Parents Speak"; ?>
<?php require_once("gallery-header.php");
include("db.php");
 ?>
<div class="slide">
<h1> Photo Gallery - Album </h1>
</div>
<?php
		$na="SELECT * FROM ga_photogallery";            
		$re=mysql_query($na);
		$num=mysql_num_rows($re);
		if($num>0){	
		?>
        
        <ul class="gallery">
        <?php		
		while($row=mysql_fetch_array($re)){			
		?>
        <li><a href="albumPhoto.php?alb_id=<?php echo $row['Pgallery_id']; ?>"><img src="admin/upload/<?php echo $row['Pgallery_photo']; ?>" title="<?php echo $row['Pgallery_name']; ?>"></a>
		<!--br/--><?php //echo $row['Pgallery_name']; ?></li>
            <?php 
		} }else{?>
            <li>Coming Soon...</li>
            <?php 
			} 
		?>
        </ul>
<div class="clear"></div>
<p align="right"><a href="https://picasaweb.google.com/golden.arch2011" target="_blank"><b>Check out More...</b></a></p>
<?php require_once("footer.php"); ?>