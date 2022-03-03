<?php


$servername="localhost";
$username="root";
$password="";
$dbname = "ham";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Registration failed".mysqli_connect_error());
}

?>