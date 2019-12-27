<?php
$connection = mysqli_connect("localhost","root","","ocms");
session_start();
extract($_POST);


$sqlquery = "DELETE FROM `$department` WHERE id = '$id' ";
$result = mysqli_query($connection,$sqlquery); 
header("Location: removedoc.php");
?>

