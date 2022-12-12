<?php
include('database-helper.php');

$albumId = $_POST['album'];
deleteData("albums", "id = $albumId");
deleteData("gallery", "album = $albumId");
header('Location: admin-gallery.php');
