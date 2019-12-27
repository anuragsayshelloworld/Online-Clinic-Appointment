<?php
$connection = mysqli_connect("localhost","root","","ocms");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Remove Doctor</title>
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




<body>

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
  <a class="navbar-brand" href="#">OCMS</a>
  
  <!-- Links -->
  <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link" href="admin.php">Add Doctor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="removedoc.php">Remove Doctor</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="givedoctorlogin.php">Give doctor login access</a>
    </li>
        <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout Admin</a>
    </li>
  </ul>
</nav>

<div style="margin-top: 170px;margin-left: 450px;margin-right: 450px">	
<form action="remove.php" method="post" class="form-group">	
<?php
$select = "SELECT * FROM department";
$result = mysqli_query($connection,$select);

echo '<select name="department" class="form-control">';

while ($row = mysqli_fetch_array($result)) {
 echo "<option>".$row['departmentname']."</option>";
}
echo '</select>';
?>
<input type="submit" name="submit" class="btn btn-danger" style="margin-left: 140px;margin-top: 10px">
</form>
</div>
</body>
</html>