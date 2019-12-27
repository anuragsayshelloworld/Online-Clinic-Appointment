<?php
$connection=mysqli_connect("localhost","root","","ocms");
session_start();
if (isset($_SESSION['user'])) {
	header("Location: login.php");
}
if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=$_POST['password'];


 $select=mysqli_query($connection,"SELECT * FROM logintable");
 $justatemporaryvariable = 0;
 while($row=mysqli_fetch_array($select)){

 	if($row['username']==$username && $row['password']==$password && $row['recog'] == 0){
       session_start();
       $_SESSION['user']=$row['username'];
       header("Location: login.php");

 	}
 	elseif ($row['username']==$username && $row['password']==$password && $row['recog'] == 1) {
       session_start();
       $_SESSION['admin']=$row['fullname'];
       header("Location: admin.php"); 		
 	}
    elseif ($row['username']==$username && $row['password']==$password && $row['recog'] == 2) {
       session_start();
       $_SESSION['doctor']=$row['fullname'];
       header("Location: doctorsindex.php");     
  }
 	$justatemporaryvariable++;
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Onlince clinic appointment system</title>
	<style type="text/css">
		.smalldiv{
			width: 135px;
			height: 50px;
			float: left;
		}
		body{
			margin:0px;
			background: url("image/banner-bg.jpg") no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
             background-size: cover;
           }
        
	</style>
</head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	function redirect(){
    window.location.href = "signup.php";
  	}
  </script>
<body class="bg-success">
	<div class="container" style="margin-top: 250px;margin-left: 450px;">
		<div class="row">
			<div class="col-md-4 bg-light" style="border: 1px solid black;border-top-left-radius: 10px;border-bottom-right-radius: 10px;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

		<form action="" method="POST" class="form-group">	
			<?php 
			if (isset($_POST['login'])) {
			if ($justatemporaryvariable == mysqli_num_rows($select)) {
            echo $messege = "<legend style='color:red;'>Invalid username or password</legend> <br/>";
            }
			}
			?>
		<label>username</label><input type="text" name="username" class="form-control" placeholder="username"><br>
		<label>password</label><input type="password" name="password" class="form-control" placeholder="password"><br>
		<button name="login" class="btn btn-info" style="margin-left:70px;width:200px;">Login</button><br/>
        <div class="smalldiv"><hr></div> <p style="margin-top: 7px;margin-left:20px;margin-right:20px;float: left;">Or</p><div class="smalldiv"><hr></div>
  	</form>
  	<form action="signup.php"><input type="submit" name="submit" class="btn btn-primary" style="margin-left:70px;width:200px; margin-bottom:10px;" value="Sign up"></form>
</div>
</div>
</div>

</body>
</html>

