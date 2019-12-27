<?php
$connection = mysqli_connect("localhost","root","","ocms");
$value = $_POST['depart'];
session_start();
if(!isset($_SESSION['user'])){

  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Department | Doctor</title>
</head>
<style type="text/css">
 body{
      background: url("image/banner-bg.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }
      .headerz{
      float: left;
      height: 50px;
      width: 100%;
      background-color: white;
    }
    .smallimages{
      float: left;
      height:30px;
      width:25px;
      margin: 10px;
      clear: none;
    }
    .logoimages{
        float: right;
      height:35px;
      width:35px;
      margin: 8px;
      clear: none;
      opacity: 0.8; 
    }
    .logoimages:hover{
      opacity: 1;
    }

</style>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body class="bg-success">

  <div class="headerz">
  <img src="image/phone.png" class="smallimages">
  <p style="float:left;size: 18px;
      color: grey;margin-top: 12px;">Call us now +977984231452</p>
  <img src="image/chat.png" class="smallimages">
  <p style="size: 18px;float:left;
      color: grey;margin-top: 12px;float:left;"> Mycare@example.com</p>
  <img src="image/location.jpg" class="smallimages">
  <p style="size: 18px;
      color: grey;margin-top: 12px;float:left;"> Changunarayan, Bhaktapur</p>
    <img src="image/facebook.png" class="logoimages">
    <img src="image/instagram.png" class="logoimages">
    <img src="image/twitter.png" class="logoimages">
</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">OCAS</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="login.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="department.php">Departments</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact us</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="appointmenthistory.php">Appointment history</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout <? echo $_SESSION['user'] ?></a>
    </li>

  </ul>
</nav>

<div style="margin-top: 50px;">
<?php

$sql = "SELECT * FROM department WHERE id='$value' ";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);

$departmentname = $row['departmentname'];

$sql2 = "SELECT * FROM ".$departmentname." ";
$res2 = mysqli_query($connection,$sql2);

while ($row2 = mysqli_fetch_array($res2)) {
  $srv = $row2['doctorname'];
  $qer = "SELECT * FROM `$srv` ";
  $resu = mysqli_query($connection,$qer);
  $nim = mysqli_num_rows($resu);
echo "  
<div class='card' style='float:left; margin-top:0px;margin-left:15px;'  clear:none;'>
  <div class='card-header'><small>Department: </small>".$row['departmentname']."</div>
  <div class='card-header'><small>Name: </small>".$row2['doctorname']."</div>
  <div class='card-body'><img src='".$row2['image']."' class='img-thumbnail' style='width:260px;height:200px;'></div>
  <div class='card-header'><small>Qualification: </small>".$row2['qualification']."</div>
  <div class='card-header'><small>Availability: </small>".$row2['timetable']."</div>
  <div class='card-footer'>

  <form action='generatereport.php' method='post'>
  <input type='date' name='date' class='form-control' style='margin-bottom:10px;' required>
  ";
  if ($nim<6) { 
  echo"
  <button value='".$row2['doctorname']."' name = 'doctor' class='btn btn-danger' style='margin-left:40px;margin-bottom:10px'>Confirm appointment</button>";
}
else{
  echo "Max appointment";
}

 echo "</form>

  </div>
</div>
</div>";
}

?>
</div>
</body>
</html>

