<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }

  //if ($_SESSION['username'] == 'sagar') {
?>

<?php

//html header file (linking styles sheets, JVScript and Bootstrap 4
include '../header.html';

//title of the page
echo "<head><title>Fitness Always</title></head>";

//Heading of the Page
echo '
  <br>
  <center>
    <h1><img src="../logo.png" width="100px" height="40px">
    <strong>Fitness Always Gym</strong></h1>
  </center><br>

  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../fitnessalways.php">Dashboard</a>
      </li>
      <!-- Dropdown 1 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin Features
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../admin/adminfeatures.php"><b>Admins</b></a>
          <a class="dropdown-item" href="../admin/addadmin.php">Add Admin</a>
          <a class="dropdown-item" href="../admin/remadmin.php">Remove Admin</a>
          <br>
          <a class="dropdown-item" href="branch.php"><b>Branch</b></a>
          <a class="dropdown-item" href="addbranch.php">Add Branch</a>
          <a class="dropdown-item" href="rembranch.php">Remove Branch</a>
        </div>
      </li>
      <!-- Dropdown 2 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Membership Management
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../membership/membership.php"><b>Members</b></a>
          <a class="dropdown-item" href="../membership/addmember.php">Add Members</a>
          <a class="dropdown-item" href="../membership/remmember.php">Remove Members</a>
        </div>
      </li>
      <!-- Dropdown 3 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Employee Management
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../staff/staff.php"><b>Staffs</b></a>
          <a class="dropdown-item" href="../staff/addstaff.php">Add Staff</a>
          <a class="dropdown-item" href="../staff/remstaff.php">Remove Staff</a>
          <br>
          <a class="dropdown-item" href="../trainer/trainer.php"><b>Trainers</b></a>
          <a class="dropdown-item" href="../trainer/addtariner.php">Add Trainer</a>
          <a class="dropdown-item" href="../trainer/remtrainer.php">Remove Trainer</a>
        </div>
        </li>
        <!-- Dropdown 4 -->
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Workout Class Schedule
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="workout.php"><b>Workout Classes</b></a>
            <a class="dropdown-item" href="addworkout.php">Add Class</a>
            <a class="dropdown-item" href="remworkout.php">Remove Class</a>
          </div>
        </li>
        <li class="nav-item active">
      <a class="nav-link" href="../documentation/documentation.php">Documentation</a>
    </li>
    </ul>
  </nav>';



// ok, valid username & password
//echo '<div  class="container"><div class="alert alert-dark">You are logged in as: ' . $data['username'].'</div></div>';

//phpinfo() external file;
include '../db_connect.php';

//

//SQL Query to display content from database
$sql = "SELECT * FROM workout";

$result = $conn->query($sql);
$return_arr = array();

//Heading for Projects
echo "<div class='container-fluidser'>
<br><h1 style='margin-left: 66px'><b>Workout Classes</b></h1><br></div>";

//Table that display the tuples and attributes from Project Table
echo "<div class='container'>
<table class='table table-hover'>
    <thead>
      <tr>
        <th>Class ID</th>
        <th>Title</th>
        <th>Descdription</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Room</th>
        <th>Seats</th>";

while($row = $result->fetch_assoc())
{
  echo "<tr><td>";

  echo $row["class_id"];
  echo "</td><td>";

  echo $row['title'];
  echo "</td><td>";

  echo $row['description'];
  echo "</td><td>";

  echo $row['start_time'];
  echo "</td><td>";

  echo $row['end_time'];
  echo "</td><td>";

  echo $row['room'];
  echo "</td><td>";

  echo $row['seats'];
  echo"</td></tr></div>";

}

//printing button
echo"
</table>";

?>
