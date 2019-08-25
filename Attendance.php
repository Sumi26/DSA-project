<!DOCTYPE html>
<?php
define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'project');
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	session_start();
	//$user=$_SESSION["id"];
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance</title>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.js" -->
			  <!-- integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" -->
			  <!-- crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,400i" rel="stylesheet">
	<style>
	need
	{
		padding:50px;
		font-size:25px;
		color:'blue';
	}
</style>

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
<h2 style="text-align: center; color: #1111aa;">Attendance<h2>
<form  method="post" name="attend">
  <div class="form-group" style="background-color: #1111aa; color: white; font-size: 20px;">
    <label for="exampleFormControlSelect1">Select Month</label>
    <select name="month" class="form-control" id="exampleFormControlSelect1">
      <option value="NULL">---Choose Month---</input></option>
      <option value="jan">January</option>
      <option value="feb">February</option>
      <option value="mar">March</option>
      <option value="apr">April</option>
      <option value="may">May</option>
      <option value="june">June</option>
      <option value="july">July</option>
      <option value="aug">August</option>
      <option value="sep">September</option>
      <option value="oct">October</option>
      <option value="nov">November</option>
      <option value="dec">December</option>
    </select>
  </div>
	<div style="padding:10px;"><input style="background-color:#ffffff; color: #0000ff; font-size:25px;" type="submit" name="submit" value="Submit"></input><div>
	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['submit']))
		{
			if($_POST['month'] == 'NULL')
			{
				echo '<p>Please select an option from the select box.</p>';
			}
			else
			{
				$user=$_SESSION["id"];
				$month=$_POST['month'];
				$sql = "SELECT id,month,attend FROM attendance WHERE id = '$user' and month = '$month'";
				$res = mysqli_query($db,$sql);
				$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
				$attend=$row['attend'];
				echo "<div style='font-size:21px; color: blue; padding-top: 50px;padding-right: 20px; padding-left: 20px;'> Your attendance percentage is </div><br>";
				echo "<div style='font-size:21px; color: blue;'>$attend%<div>";
			}
		}
	}
	?>
</body>
</html>
<!--action="<//?php echo $_SERVER['PHP_SELF']; ?>"--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
