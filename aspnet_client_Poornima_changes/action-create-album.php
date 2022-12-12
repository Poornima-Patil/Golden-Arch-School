<?php
include('database-helper.php');

$data = [];
$data['title'] = $_POST['title'];
$data['date'] = date('Y-m-d');
$album = insert('albums', $data);
header('Location: admin-upload-photos.php?album=' . $album);
