<?php
$connection=mysqli_connect("localhost","root","","ocms");
session_start();
$doctor = $_SESSION['doctor'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin panel | Add doctor</title>
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

</head>
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
  <a class="navbar-brand" href="#">OCAS</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Home</a>
    </li>
    
        <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout <? echo $_SESSION['doctor']; ?></a>
    </li>
  </ul>
</nav>
<div style="margin-top: 100px">
  <table class="table table-striped table-dark table-hover">
    <tr>
      <th> SN</th>
      <th> Patient name</th>
      <th> Date </th>
    </tr>
  <?php
  $number = 1;
  $sql = "SELECT * FROM `$doctor`";
  $result = mysqli_query($connection,$sql);
  while ($row = mysqli_fetch_assoc($result)) {
  echo"<tr>
  <td>".$number."</td>
  <td>".$row['patientname']."</td>
  <td>".$row['date']."</td>
  </tr>";
  $number++;
  }
  ?>
</table>
</div>
</form>
</div>
</div>
</div>
</body>
</html>