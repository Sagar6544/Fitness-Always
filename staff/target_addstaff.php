<?php

//variables to get the contents of the form from addmember.php
$ID = $_POST['ID'];
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$shift = $_POST['shift'];
$branch = $_POST['branch'];
$experiencec = $_POST['experiencec'];;

//phpinfo() external file;
include '../db_connect.php';

$sql = "INSERT INTO `staff` VALUES ('$ID', '$name', '$address', '$contact', '$gender', '$shift', '$branch', '$experience')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: staff.php");
?>
