<?php

//variables to get the contents of the form from addmember.php
$ID = $_POST['ID'];
$title = $_POST['title'];
$des = $_POST['des'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
$room = $_POST['room'];
$seats = $_POST['seats'];

//phpinfo() external file;
include '../db_connect.php';

$sql = "INSERT INTO `workout` VALUES ('$ID', '$title', '$des', '$stime', '$etime', '$room', '$seats')";
$result = $conn->query($sql);
$return_arr = array();
        header("Location: workout.php");
?>
