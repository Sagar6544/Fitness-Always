<?php

//variables to get the contents of the form from addmember.php
$ID = $_POST['ID'];
$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$state = $_POST['state'];
$profile = $_POST['profile'];;

//phpinfo() external file;
include '../db_connect.php';

$sql = "INSERT INTO `admin` VALUES ('$ID', '$name', '$address', '$mobile', '$email', '$dob', '$gender', '$city', '$state', '$profile')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: adminfeatures.php");
?>
