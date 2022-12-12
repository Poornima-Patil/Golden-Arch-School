<?php
session_start();
if ($_REQUEST['username'] == "goldenarch" && $_REQUEST['password'] == "golden_arch") {
    $_SESSION['login'] = "admin";
    header("Location: admin-dashboard.php");
} else {
    $Message = urlencode("Wrong username or password. Please try again");
    header("Location:admin-login.php?Message=" . $Message);
}
