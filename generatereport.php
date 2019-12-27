<?php
$connection = mysqli_connect("localhost","root","","ocms");
session_start();
if(!isset($_SESSION['user'])){

  header("Location: index.php");
}

extract($_POST);
$patientname = $_SESSION['user'];
$token = rand(9000,9999);
$adate = $_POST['date'];
$cdate = date("Y-m-d");
 if ($adate > $cdate) {

  $a = "INSERT INTO `$patientname` (`id`, `doctorname`, `date`) VALUES (NULL, '$doctor', '$date')";
  mysqli_query($connection,$a);
$sqlquery = "INSERT INTO `$doctor` (`id`, `patientname`, `date`, `token`) VALUES (NULL, '$patientname', '$date', '$token')";
mysqli_query($connection,$sqlquery);
echo '
<!DOCTYPE html>
<html>
<head>
	<title>Appointment report</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 btn-info" style="margin-left: 280px;margin-top: 30px;">
		<h2 class="text-light">Appointment successfully taken!</h2>	
		<small>Please screenshot this page for verification of appointment</small>
		<hr/>
        <form class="form-group">
        	<label>Patient is </label><input type="text" value=" '.$patientname.'" disabled class="form-control">
        	<label>Doctor is </label><input type="text" value="'.$doctor.'" disabled class="form-control">
        	<label>Date is </label><input type="text" value="'.$date.'" disabled class="form-control">
        	<label>Token is </label><input type="text" value="'.$token.'" disabled class="form-control">
        </form>
		</div>
	</div>
</div>
<a href="login.php"><button class="btn btn-danger" style="margin-top: 20px;margin-left: 500px;">Go to index page</button></a>
</body>
</html>';
}
else
{
	echo "Please Enter a valid date!<br/>";
	echo "<a href='department.php'><button>Click here to take appointment</button></a>";
}