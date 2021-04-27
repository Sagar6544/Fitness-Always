<?php

$ID = $_POST['ID'];

//phpinfo() external file;
include '../db_connect.php';

$sql = "DELETE from workout WHERE class_id = '$ID';";
$result = $conn->query($sql);
$return_arr = array();
	header("Location: workout.php");

?>
 