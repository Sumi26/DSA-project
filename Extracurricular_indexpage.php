<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Extra-curricular</title>
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
<!--Nav Bar ends here-->

<!-- Event Registration link-->
<br>
<h3 style="font-size: 2vw; color: #1111ff; padding-left: 3vw;">Event registration</h3>
<div class="form-check">
  <div style="float: left;"> &nbsp &nbsp &nbsp &nbsp </div>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked style="float: left;">
  <label class="form-check-label" for="exampleRadios1" style="color: #1111ff;">
    In-person Workshops
  </label>
</div>
<div class="form-check">
  <div style="float: left;"> &nbsp &nbsp &nbsp &nbsp </div>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1" style="color: #1111ff;">
    Webinar Workshops
  </label>
</div>
<div class="form-check">
  <div style="float: left;"> &nbsp &nbsp &nbsp &nbsp </div>
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1" style="color: #1111ff;">
    Reading Summit
  </label>
</div>
<br>
<br>
<div style="float: left;"> &nbsp &nbsp &nbsp &nbsp </div>
<a href="https://www.paypal.com/in/webapps/mpp/home?gclsrc=aw.ds&gclid=EAIaIQobChMIsJjyg8WV4QIVg6mWCh1q1g6dEAAYASAAEgKFR_D_BwE&gclsrc=aw.ds"><button type="button" class="btn btn-outline-primary">Choose Payment</button></a>
<!-- Event Details Showcased here-->
<br>
<br>
<br>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
          In-person Workshops
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration: none;">
          Webinar workshops
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration: none;">
          Reading Summit
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
</div>


<script>
var s=document.getElementsByClassName("card-body");
s[0].innerHTML="<b>Date</b>: 30/03/19 <br><b>Venue</b>:Conference Hall <br><b> Timing</b>:10-1pm<br><b>Event Description</b>:In-person workshops are intensive, hands-on learning events. Participants receive individualized attention from presenters. "
s[1].innerHTML="<b>Date</b>: 28/03/19 <br><b>Venue</b>:Room no. 115 <br><b> Timing</b>:9-11pm<br><b>Event Description</b>:A webinar is a presentation, lecture, workshop or seminar that is transmitted over the Web using video conferencing software.";
s[2].innerHTML="<b>Date: 15/04/19</b> <br><b>Venue</b>:Library <br> <b>Timing</b>:8-12pm<br><b>Event Description</b>:Reading is our favorite sport, and like other activities, it requires practice. Join us for a one-day professional learning conference, where you can network with nationally recognized educators and authors. ";
</script>

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
