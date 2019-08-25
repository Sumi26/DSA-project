<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
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
<br>
<br>
<br>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
          Monday
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
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration: none;">
          Tuesday
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-decoration: none;">
          Wednesday
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="text-decoration: none;">
          Thursday
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="text-decoration: none;">
          Friday
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="text-decoration: none;">
          Saturday
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>

  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven" style="text-decoration: none;">
          Sunday
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
      </div>
    </div>
  </div>
  </div>
</div>



<script>
var s=document.getElementsByClassName("card-body");
s[0].innerHTML="<b>Breakfast</b> : Milk , Cornflakes ,Bread , Butter, Jam<br> <b>Lunch</b> : Rice, Curd, Chapati, Dal , Bhindi,Salad, Masala Papad <br> <b>Snacks</b>:Cream Roll,Lassi<br> <b>Dinner</b>:Dal, Green Veg< Rice, Chapati,Salad, Rasmalai /Boondi Ladoo(2 pieces)"
s[1].innerHTML="<b>Breakfast</b> :Milk , Cornflakes,Aloo- Parantha, Pickle <br> <b>Lunch</b> :Puri, Aloo – Palak, Stuffed Mirchi,Kadhi , Salad, Veg. Pulao, Plain Chach<br> <b>Snacks</b>:Aloo Chana Chat,Vanila Shake<br><b> Dinner</b>:Tuar Dal, Paneer Butter Masala,Rice, Chapati , Salad, Ice - Cream ";
s[2].innerHTML="<b>Breakfast</b> :Milk , Cornflakes,Masala Parantha, Pickle <br><b> Lunch</b> :Green Veg, Dal, Rice, Chapati, Salad,Papad, Curd <br><b> Snacks</b>:Patties (1 Piece)Pine apple Shake<br> <b>Dinner</b>:Rice, Chapati , Aloo -Pyaj,Dal Makhani , Salad, 2 Rasgulla";
s[3].innerHTML="<b>Breakfast</b> :Milk , Cornflakes Poha with Namkin &Lemon <br> <b>Lunch</b> :Rice, Green Veg, Stuffed Karela, Salad,Chapati, Masala Papad, Mixed Raita <br> <b>Snacks</b>:Dahi Bare<br> <b>Dinner</b>:Kadai Paneer, Green Veg, Lacha Parantha, Jeera Rice, Fruit Custard";
s[4].innerHTML="<b>Breakfast</b> :Milk , Cornflakes,Uttapam, Coconut -Chutney <br> <b>Lunch</b> :Rice, Green Veg., Chapati, Salad,Pickle, Dal , Curd, Papad <br><b> Snacks</b>:Veg Macaroni,Mango Shake<br> <b>Dinner</b>:Urad Dal, Baingan Bharta, Rice,Chapati, Kala Gulabjamun";
s[5].innerHTML="<b>Breakfast</b> :Milk , Cornflakes,Bread , Butter, Jam, Banana <br><b> Lunch</b> :Gatte Ki Sabji, Stuffed Capsicum, Rice,Chappati, Salad Pickle, <br> <b>Snacks</b>:Pani Puri(10 Pieces)<br> <b>Dinner</b>:Chana Masala, Green Veg,Chapati, Rice, Salad, Fruit Cream";
s[6].innerHTML="<b>Breakfast</b> :Milk, Cornflakes,Plain Idli/Fried Idli,Sambhar,Coconut Chutney <br> <b>Lunch </b>:Dal – Bati, Churma, Chach, Lehsun Ki Chutney, Fruit <br> <b>Snacks</b>:Jam Roll,Cold Coffee<br> <b>Dinner</b>:Puri, Dum Aloo, Kheer, Salad";
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
