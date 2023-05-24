<?php
//CONNECT TO DB
require 'connection.php';
//SECURITY AND SESSION START
include 'security.php';

$idnews = $_GET['id_news'];
$approved = $_GET['approved'];

$result = mysqli_query($con, "UPDATE news SET approved = '$approved' WHERE id_news = '$idnews'");

//DISPLAY POP UP MESSAGE IF SUCESS
echo "<script> alert('Your approval / rejection has been recorded.');
window.location = 'review.php' </script>";
?>