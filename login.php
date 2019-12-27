<?php

session_start();
if(!isset($_SESSION['user'])){

	header("Location: index.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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


	<nav class="navbar navbar-expand-xl bg-dark navbar-dark " style="margin: 0px;">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">OCAS</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="department.php">Departments</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact us</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="appointmenthistory.php">My appointment history</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout <? echo $_SESSION['user']; ?></a>
    </li>
  </ul>
</nav>

<div class="container-fluid" style="margin-top: 100px;margin-left: 40px;">
	<div class="row">
		<div class="col-md-4" style="border: 1px solid black;border-top-left-radius: 10px;border-bottom-right-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
			<h3 style="color:blue">How to take appointment?</h3>
			<p>1] Login to this site</p>
			<p>2] Either click on the 'Take appointment' below or click on deparments above.</p>
			<p>3] Choose your department. For example: Orthopedics</p>
			<p>4] Select your doctor, time and date.</p>
			<p>5] Click on confirm appointment</p>
			<p>6] A token will be generated after you have confirmed appointment. So, please make sure to screenshot the token.</p>
			<p>7] Payment is reqiured to be done on arrival.</p>
			<h4> Thank you for choosing OCAS </h4>
      <form action="department.php">
			<button class="btn btn-danger" style="margin-bottom: 50px;">Take appointment</button>
    </form>
		</div>
		<div class="col-md-4 bg-light" style="margin-left: 00px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)">
     <br/> 
    <h3>About us</h3>
    <hr/>
    <p>OCAS stands for online clinic appointment system. This is a web application which allows patients to take aapointment online. It is pretty easy to use and has simple user interface design. If you are having problem using this website than please throughly read how to use divison on the left of this.</p>  
    <br/>
    <p>This clinic is located in Changunarayan municipality of Bhaktapur district, opposite of NIC bank in Neupane Gaun. Our clinic is fully equipped with modern medical technology and qualified & reputed doctors. Currently, there are over 30 staffs in the clinic and 16 of them are doctors. </p>
    <br/>
    <p>You can also connect with us via facebook , instagram and Twitter. However, use of website is highly recommed for taking appoinment smoothly.</p>
    <h4 style="margin-left: 100px">Thank you!</h4>
    </div>
	</div>
</div>
</body>
</html>


