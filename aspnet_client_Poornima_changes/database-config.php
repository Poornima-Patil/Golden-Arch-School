<?php
$hostname = "localhost:3306";
$db_user = "goldenar_hsr";
$db_password = "Aayush@007";
$database = "goldenar_hsr";
date_default_timezone_set('Asia/Calcutta');
static $db;
if (!isset($db)) {
    $db = mysqli_connect($hostname, $db_user, $db_password, $database);
    mysqli_set_charset($db, 'utf8');
}
if ($db === false) {
    var_dump(mysqli_connect_error());
}
