
<?php

$connection=mysqli_connect("localhost","root","","ocms");

extract($_POST);

if(isset($_POST['signup'])){
    $select = "SELECT * FROM `logintable` WHERE `username` LIKE '%{$username}%'";
    $res = mysqli_query($connection,$select);
    $userno = mysqli_num_rows($res);

    $select1 = "SELECT * FROM `logintable` WHERE `email` LIKE '%{$email}%'";
    $res1 = mysqli_query($connection,$select1);
    $emailno = mysqli_num_rows($res1);
    $recog = 0;

    if ($cpassword == $password && strlen($password) >6 && strlen($contactno) == 10)  {

    if ($userno == 0 && $emailno == 0) {
    
    $insert="INSERT INTO `logintable` (`id`, `fullname`, `email`, `mnum`, `username`, `password`, `recog`) VALUES (NULL, '$fullname', '$email', '$contactno', '$username', '$password', '$recog')";
    mysqli_query($connection,$insert);
   
    $create = "CREATE TABLE `ocms`.`$username` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `doctorname` VARCHAR(255) NOT NULL , `date` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    mysqli_query($connection,$create);

    header("Location: index.php");
  } 
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
     background: url("image/banner-bg.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }
     
  }
</style>
</head>
<body class="bg-success">
	<div class="container" style="margin-left: 480px; margin-top: 80px;">
		<div class="row">
			<div class="col-md-4 bg-light" style="border: 1px solid black;border-top-left-radius: 10px;border-bottom-right-radius: 10px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
	<form action="" method="POST" class="form-group"> 
  <label>fullname</label><input type="text" name="fullname" placeholder="Enter your fullname" class="form-control" required>
  <?php
  if (isset($_POST['signup'])) {
  if (strlen($contactno) !=10) {
   echo "<p style='color:red'>please correct your mobile number<p>"; 
  }
  }
  ?>
  <label>contact no.</label><input type="number" name="contactno" placeholder="Enter your phone number" class="form-control" required>
  <?php if (isset($_POST['signup'])) {
    $a = mysqli_num_rows($res);
  if ($a>0) {
  echo "<p style='color:red'>username already taken<p>";
  }
  } ?>
<label>username</label><input type="text" name="username" placeholder="Enter your desired username" required class="form-control" required>
<?php if (isset($_POST['signup'])) {
    $ab = mysqli_num_rows($res1);
  if ($ab>0) {
  echo "<p style='color:red'>This email has been registered<p>";
  }
  } ?>
  <label>Email</label><input type="email" name="email" placeholder="Enter your email" required class="form-control" required>
  <?php if (isset($_POST['signup'])) {
   if ($password != $cpassword) {
     echo "<p style='color:red'>password doesn't match<p>";
   }
   else{
    if (strlen($password)<6) {
    echo "<p style='color:red'>password must contain atleast 6 characters<p>";
    }
   }
   }
   ?>
  <label>password</label><input type="password" name="password" placeholder="Enter your desired password" class="form-control" required>
  <label>confirm password</label><input type="password" name="cpassword" placeholder="Enter your desired password again" class="form-control" required>
  <button name="signup" class="btn btn-success"  style="margin-left: 80px;margin-top: 10px;width: 180px">Signup</button>

</form>
</div>
</div>
</div>
</body>
</html>
