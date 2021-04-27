<?php

//variables to get the contents of the form from addmember.php
$ID = $_POST['ID'];
$membercode = $_POST['membercode'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$stateid = $_POST['stateid'];
$cityid = $_POST['cityid'];
$ssn = $_POST['ssn'];
$medical = $_POST['medical'];
$mobile = $_POST['mobile'];
$joindate = $_POST['joindate'];
$diet = $_POST['diet'];
$image = $_POST['image'];

//phpinfo() external file;
include '../db_connect.php';

$sql = "INSERT INTO `member` VALUES ('$ID', '$membercode', '$name', '$address', '$email', '$dob', '$gender', '$stateid', '$cityid', '$ssn', '$medical', '$mobile', '$joindate', '$diet', '$image')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: membership.php");
?>
