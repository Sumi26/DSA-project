<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Timetable</title>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" -->
			  <!-- integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" -->
			  <!-- crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,400i" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" class="navbar navbar-light" style="background-color: #e3f2fe;">
  <a class="navbar-brand" href="index_new.php"><img alt="Logo-img" src="logo.PNG" width="50px" height="70px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Display info.php">Display info</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="Timetable.php">Timetable</a>
          <a class="dropdown-item" href="Study_materials.php">Study Materials</a>
          <a class="dropdown-item" href="Attendance.php">Attendance</a>
          <a class="dropdown-item" href="Extracurricular_indexpage.php">Extra curricular</a>
          <a class="dropdown-item" href="Calender.php">Calendar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Examination
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Examination_schedule.php">Schedule</a>
          <a class="dropdown-item" href="Examination_result.php">Result</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transport
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Transport_registration.php">Registration</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Online Payment
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Online payment.php">Choose payment</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Library
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="borrowed_books.php">Borrowed Books</a>
          <a class="dropdown-item" href="Amount_due.php">Amount Due</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hostel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mess_menu.php">Mess menu</a>
        </div>
      </li>
    </ul>
    <a href="Logout.php"><button type="button" class="btn btn-primary" style="background-color: #ffffff; color: #1111ff;">Sign Out</button></a>
  </div>
</nav>
</body>
<body bgcolor="skyblue">
<H1><FONT COLOR="DARKCYAN"><CENTER>School Timetable</FONT></H1>
<table width=1000 height=500 border="10" cellspacing="3" align="center">
<tr>
 <td align="center">
 <td align="center">8:30-9:30
 <td align="center">9:30-10:30
 <td align="center">10:3-11:30
 <td align="center">11:30-12:30
 <td align="center">12:30-2:00
 <td align="center">2:00-3:00
 <td align="center">3:00-4:00
 <td align="center">4:00-5:00
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center">---<td align="center"><font color="blue">Maths<br>
 <td align="center"><font color="pink">Science<br>
 <td align="center"><font color="red">EVS<br>
 <td rowspan="6"align="center">L<br>U<br>N<br>C<br>H
 <td align="center"><font color="maroon">English<br>
 <td align="center"><font color="brown">Hindi<br>
 <td align="center">Counselling class
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center"><font color="blue">Computer<br>
 <td align="center"><font color="red">EVS<br>
 <td align="center"><font color="pink">Games<br>
 <td align="center">---
 <td align="center"><font color="orange">Art<BR>
 <td align="center"><font color="maroon">Maths<br>
 <td align="center">Library
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><font color="pink">Science<br>
 <td align="center"><font color="orange">Hindi<BR>
 <td align="center"><font color="brown">English<br>
 <td align="center">---
 <td colspan="3" align="center"><font color="green"> Lab
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center">Hindi<br>
 <td align="center"><font color="brown">English<br>
 <td align="center"><font color="orange">Science<BR>
 <td align="center">---
 <td align="center"><font color="blue">Computer<br>
 <td align="center"><font color="red">Games<br>
 <td align="center">Library
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center"><font color="orange">Physics<BR>
 <td align="center"><font color="maroon">Chemistry<br>
 <td align="center"><font color="blue">Biology<br>
 <td align="center">---
 <td align="center"><font color="pink">Computer<br>
 <td align="center"><font color="brown">Maths<br>
 <td align="center">Library
</tr>
<tr>
 <td align="center">SATURDAY
 <td align="center"><font color="red">Maths<br>
 <td colspan="3" align="center">Seminar
 <td align="center"><font color="pink">EVS<br>
 <td align="center"><font color="brown">English<br>
 <td align="center">library
</tr>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
