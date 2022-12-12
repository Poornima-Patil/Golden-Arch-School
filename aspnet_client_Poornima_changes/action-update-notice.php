<?php include('database-helper.php');
$data = $_POST;
update('notices', $data, "1=1");
header("Location: admin-dashboard.php");
