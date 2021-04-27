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
include 'header.html';

//title of the page
echo "<head><title>Fitness Always</title></head>";

//Heading of the Page
echo '
  <br>
  <center>
    <h1><img src="logo.png" width="100px" height="40px">
    <strong>Fitness Always Gym</strong></h1>
  </center><br>

  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="fitnessalways.php">Dashboard</a>
      </li>
      <!-- Dropdown 1 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin Features
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="admin/adminfeatures.php"><b>Admins</b></a>
          <a class="dropdown-item" href="admin/addadmin.php">Add Admin</a>
          <a class="dropdown-item" href="admin/remadmin.php">Remove Admin</a>
          <br>
          <a class="dropdown-item" href="branch/branch.php"><b>Branch</b></a>
          <a class="dropdown-item" href="branch/addbranch.php">Add Branch</a>
          <a class="dropdown-item" href="branch/rembranch.php">Remove Branch</a>
        </div>
      </li>
      <!-- Dropdown 2 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Membership Management
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="membership/membership.php"><b>Members</b></a>
          <a class="dropdown-item" href="membership/addmember.php">Add Members</a>
          <a class="dropdown-item" href="membership/remmember.php">Remove Members</a>
        </div>
      </li>
      <!-- Dropdown 3 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Employee Management
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="staff/staff.php"><b>Staffs</b></a>
          <a class="dropdown-item" href="staff/addstaff.php">Add Staff</a>
          <a class="dropdown-item" href="staff/remstaff.php">Remove Staff</a>
          <br>
          <a class="dropdown-item" href="trainer/trainer.php"><b>Trainers</b></a>
          <a class="dropdown-item" href="trainer/addtrainer.php">Add Trainer</a>
          <a class="dropdown-item" href="trainer/remtrainer.php">Remove Trainer</a>
        </div>
      </li>
      <!-- Dropdown 4 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Workout Class Schedule
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="workout/workout.php"><b>Workout Classes</b></a>
          <a class="dropdown-item" href="workout/addworkout.php">Add Class</a>
          <a class="dropdown-item" href="workout/remworkout.php">Remove Class</a>
        </div>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="documentation/documentation.php">Documentation</a>
    </li>
    </ul>
  </nav>';


// ok, valid username & password
//echo '<div  class="container"><div class="alert alert-dark">You are logged in as: ' . $data['username'].'</div></div>';

//phpinfo() external file;
include 'db_connect.php';

//
echo "<br><h3 class='design'>Welcome to the Dashboard!</h3>
<br>
<h4 class='design'>Introduction to Fitness Always Gym</h4>
<p class='design'>
      Now a days online service is a best competitive edge for any organization
      which makes it differ from other organizations.

      The Fitness Always gym is such a system which provide best platform for
      ease of access to the Gym Staff. Customer can check his updates online
      anytime about fitness or Workout Class Schedule and new updates of the
      gym etc.

      The focus of this project is about online services for a fitness club but by
      minimizing all those defects which are found in currently available manually
      file system.

      This is a best platform for customers and gym member to interact freely with
      each other.

      In this system admin of the system and customer’s have their accounts
      (user-name and passwords).

      This system will be used by only two person’s (admin and customer’s).Admin
      can update everything, customers can only view the daily updates about their
      fitness updates and can edit his profile data and post a question to admin.

</p>

<br><h4 class='design'>Scope of Fitness Always Gym</h4>
<p class='design'>
The Gym management system web portal has a wide cope
which covers the following perspectives:
<ul style='margin-left: 50px'>
<li>The administrator has the full-fledged rights over this System.</li>

<li>The admin can register and view the Customers Profile Data.</li>

<li>The Admin can make update about any thing.</li>

<li>Customers can view their evaluation report, updated diet plan,
updated workout class schedule, can ask any question to admin
and view the answer.</li>

<li>Admin will update evaluation report of customer , update diet plan ,
update workout class schedule .Customers can view the Profile data
and can update it by using his own account.</li>

</ul>
</p>

<br><h4 class='design'>Goals of Fitness Always Gym</h4>
<p class='design'>
<ul style='margin-left: 50px'>
<li>To remove the manual or paper work in the Fitness club.</li>

<li>Provide a platform with interactive user interface for both
customer and admin.</li>

<li>Save the time of both admin and customer.</li>

<li>Get online Plans in an efficient manner.</li>

<li>To save cost for each user.</li>

User friendly
</p>

";
?>
