<?php $title ="Golden Arch Montessori Parents Speak"; ?>
<?php require_once("gallery-header.php");
include("db.php");
 ?>
<div class="slide">
<?php
		$na		=	"SELECT * FROM ga_photogallery WHERE Pgallery_id=".$_GET['alb_id'];            
		$re		=	mysql_query($na);
		$row	=	mysql_fetch_array($re);
?>
<h1> Album - <?php echo $row['Pgallery_name']; ?> </h1>
</div>
<?php
		$photo_qry		=	"SELECT * FROM ga_albumphoto WHERE Photo_album=".$_GET['alb_id'];      
//echo $photo_qry;      
		$res_photo		=	mysql_query($photo_qry);
		$num=mysql_num_rows($res_photo);
		if($num>0){	
		?>        
        <ul class="gallery">
        <?php		
		while($row=mysql_fetch_array($res_photo)){			
		?>
        <li><img src="admin/upload/<?php echo $row['Photo_image']; ?>" title="<?php echo $row['Photo_name']; ?>">
		<br/><?php echo $row['Photo_name']; ?></li>
            <?php 
		} 
		}else{ ?>
            <li>Coming Soon...</li>
            <?php 
			} 
		?>
        </ul>
<div class="clear"></div>
<p align="right"><a href="photo-gallery.php"/>Back To Album List</a></p>
<?php require_once("footer.php"); ?>