<?php

$ID = $_POST['ID'];

//phpinfo() external file;
include '../db_connect.php';

$sql = "DELETE from `member` WHERE ID = '$ID';";
$result = $conn->query($sql);
$return_arr = array();
	header("Location: membership.php");

?>
