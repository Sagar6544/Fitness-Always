<?php

//variables to get the contents of the form from addmember.php
$ID = $_POST['ID'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$address = $_POST['address'];

//phpinfo() external file;
include '../db_connect.php';

$sql = "INSERT INTO `branch` VALUES ('$ID', '$state', '$city', '$pincode', '$address')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: branch.php");
?>
