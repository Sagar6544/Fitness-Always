<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../index.php");
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
        <a class="nav-link" href="fitnessalways.php">Dashboard</a>
      </li>
      <!-- Dropdown 1 -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin Features
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href=".admin/adminfeatures.php"><b>Admins</b></a>
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
          <a class="dropdown-item" href="trainer/addtariner.php">Add Trainer</a>
          <a class="dropdown-item" href="trainer/remtrainer.php">Remove Trainer</a>
        </div>
      </li>
      <!-- Dropdown 4 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Workout Class Schedule
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../workout/workout.php"><b>Workout Classes</b></a>
            <a class="dropdown-item" href="../workout/addworkout.php">Add Class</a>
            <a class="dropdown-item" href="../workout/remworkout.php">Remove Class</a>
          </div>
        </li>
      <li class="nav-item active">
      <a class="nav-link" href="documentation.php">Documentation</a>
    </li>
    </ul>
  </nav>';


echo "<div style='margin-left:40px'>
<br><h3 class='design'>Welcome to the Documentation of Fitness Always Gym!</h3>
<br>
<b><h3 class='design'>Login Homepage</h3></b>
<p class='design'>
<center><img src='homepage.png' width='1000px' height=450px'></center><br><br>
<br>
<center><img src='login.png' width='1000px' height=450px'></center><br><br>
On login page you are able to <b>login using your credentials</b>. If you write your username or 
  password wrong, the system will ask you retype your credentials. 
</p>
<br>
<h5>Members</h5>
<p class='design'>
  <center><img src='member.png' width='1000px' height=450px'></center><br><br>
  On member page you can <b>view all the existing members</b> of Fitness Always Gym.
</p>
<br>
<h5>Add Member</h5>
<p class='design'>
  <center><img src='addadmin.png' width='1000px' height=450px'></center><br><br>
  On add member page you can <b>add new member with all essential details</b> on Fitness Always Gym.
</p>
<br>
<h5>Remove Member</h5>
<p class='design'>
  <center><img src='remmember.png' width='1000px' height=450px'></center><br><br>
  On remove member page you can <b>remove existing members from the system by choosing correct details</b> from Fitness Always Gym.
</p>






<b><h3 class='design'>Dashboard</h3></b>
<p class='design'>
  <center><img src='pic1.png' width='1000px' height=450px'></center><br><br>
  On dashboard you can read <b>about</b> Fitness Always Gym, read about <b>Scope</b> of the project and furistic <b>Goal</b> of the project
</p>

<br>
<h3 class='design'>Admin Features</h3>
<p class='design'>
  <center><img src='pic2.png' width='1000px' height=450px'></center><br><br>
  In admin features you are able to view existing admins of the gym. Moreover you 
  are able to <b>add and remove</b> admins of you choice.
</p>
<br>
<h5>Admin</h5>
<p class='design'>
  <center><img src='pic3.png' width='1000px' height=450px'></center><br><br>
  On admin page you can <b>view all the existing admins</b> of Fitness Always Gym.
</p>
<br>
<h5>Add Admin</h5>
<p class='design'>
  <center><img src='addadmin.png' width='1000px' height=450px'></center><br><br>
  On add admin page you can <b>add new admin with all essential details</b> on Fitness Always Gym.
</p>
<br>
<h5>Remove Admin</h5>
<p class='design'>
  <center><img src='remmember.png' width='1000px' height=450px'></center><br><br>
  On remove admin page you can <b>remove existing admins from the system by choosing correct details</b> from Fitness Always Gym.
</p>

<br>
<h5>Branch</h5>
<p class='design'>
  <center><img src='branch.png' width='1000px' height=450px'></center><br><br>
  On branch page you can <b>view all the existing branches</b> of Fitness Always Gym.
</p>
<br>
<h5>Add Branch</h5>
<p class='design'>
  <center><img src='addbranch.png' width='1000px' height=450px'></center><br><br>
  On add branch page you can <b>add new branch with all essential details</b> on Fitness Always Gym.
</p>
<br>
<h5>Remove Branch</h5>
<p class='design'>
  <center><img src='rembranch.png' width='1000px' height=450px'></center><br><br>
  On remove branch page you can <b>remove existing branches from the system by choosing correct details</b> from Fitness Always Gym.
</p>




<br>
<b><h3 class='design'>Membership Management</h3></b>
<p class='design'>
  <center><img src='membermune.png' width='1000px' height=450px'></center><br><br>
  In membership management you are able to view existing members of the gym. Moreover you 
  are able to <b>add and remove</b> members of you choice.
</p>
<br>
<h5>Members</h5>
<p class='design'>
  <center><img src='member.png' width='1000px' height=450px'></center><br><br>
  On member page you can <b>view all the existing members</b> of Fitness Always Gym.
</p>
<br>
<h5>Add Member</h5>
<p class='design'>
  <center><img src='addadmin.png' width='1000px' height=450px'></center><br><br>
  On add member page you can <b>add new member with all essential details</b> on Fitness Always Gym.
</p>
<br>
<h5>Remove Member</h5>
<p class='design'>
  <center><img src='remmember.png' width='1000px' height=450px'></center><br><br>
  On remove member page you can <b>remove existing members from the system by choosing correct details</b> from Fitness Always Gym.
</p>




<br>
<b><h3 class='design'>Employee Management</h3></b>
<p class='design'>
  <center><img src='employeemenu.png' width='1000px' height=450px'></center><br><br>
  In employee management you are able to view existing staffs and trainers of the gym. Moreover you 
  are able to <b>add and remove</b> staffs and trainers of you choice.
</p>
<br>
<h5>Staffs</h5>
<p class='design'>
  <center><img src='staff.png' width='1000px' height=450px'></center><br><br>
  On staff page you can <b>view all the existing staffs</b> of Fitness Always Gym.
</p>
<br>
<h5>Add Staff</h5>
<p class='design'>
  <center><img src='addstaff.png' width='1000px' height=450px'></center><br><br>
  On add staff page you can <b>add new staff with all essential details</b> on Fitness Always Gym.
</p>
<br>
<h5>Remove Staff</h5>
<p class='design'>
  <center><img src='remstaff.png' width='1000px' height=450px'></center><br><br>
  On remove staff page you can <b>remove existing staff from the system by choosing correct details</b> from Fitness Always Gym.
</p>
<br>
<h5>Trainers</h5>
<p class='design'>
  <center><img src='trainer.png' width='1000px' height=450px'></center><br><br>
  On trainer page you can <b>view all the existing trainers</b> of Fitness Always Gym.
</p>
<br>
<h5>Add Trainers</h5>
<p class='design'>
  <center><img src='addtrainer.png' width='1000px' height=450px'></center><br><br>
  On add trainer page you can <b>add new trainer with all essential details</b> on Fitness Always Gym.
</p>
<br>
<h5>Remove Trainers</h5>
<p class='design'>
  <center><img src='remtrainer.png' width='1000px' height=450px'></center><br><br>
  On remove trainer page you can <b>remove existing trainers from the system by choosing correct details</b> from Fitness Always Gym.
</p>





<br>
<b><h3 class='design'>Workout Class Schedule</h3></b>
<p class='design'>
  <center><img src='workoutmenu.png' width='1000px' height=450px'></center><br><br>
  On workout class schedule you are able to view existing workout class. Moreover you 
  are able to <b>add and remove</b> classes of you choice.
</p>
<br>
<h5>Workout</h5>
<p class='design'>
  <center><img src='workout.png' width='1000px' height=450px'></center><br><br>
  On workout page you can <b>view all the existing workout classes</b> offered by Fitness Always Gym.
</p>
<br>
<h5>Add Workout</h5>
<p class='design'>
  <center><img src='addworkout.png' width='1000px' height=450px'></center><br><br>
  On add workout page you can <b>add new workout class with all essential details</b> on Fitness Always Gym record.
</p>
<br>
<h5>Remove Workout</h5>
<p class='design'>
  <center><img src='remworkout.png' width='1000px' height=450px'></center><br><br>
  On remove workout page you can <b>remove existing workout class from the system by choosing correct details</b> from Fitness Always Gym record.
</p>






<br>
<b><h3 class='design'>Documentation</h3></b>
<p class='design'>
  <center><img src='workoutmenu.png' width='1000px' height=450px'></center><br><br>
  The documentation page will help the user understand <b>how to use the application</b>.
  The documentaion of all the fucntions and pages are cleatly demonstrated with the of 
  sample page screenshots. Below the screenshots is the explaination of what the page represents or
  does. 
</p>
</div>
";
?>
 