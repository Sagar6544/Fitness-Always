<?php

//variables to get the contents of the form from addmember.php
$ID = $_POST['ID'];
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$age = $_POST['age'];
$spec = $_POST['spec'];
$exp = $_POST['exp'];
$gender = $_POST['gender'];
$branch = $_POST['branch'];;

//phpinfo() external file;
include '../db_connect.php';

$sql = "INSERT INTO `trainer` VALUES ('$ID', '$branch', '$name', '$address', '$gender', '$contact', '$spec', '$exp', '$age')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: trainer.php");
?>
