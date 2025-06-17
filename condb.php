<?php
$con = mysqli_connect("db", "root", "root", "pro") or die("Connection failed: " . mysqli_connect_error());
mysqli_query($con, "SET NAMES 'utf8'");
date_default_timezone_set('Asia/Bangkok');
?>
