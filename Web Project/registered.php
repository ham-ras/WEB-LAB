<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST["name"];
$collgeid = $_POST["id"];
$dept = $_POST["dept"];
$email = $_POST["email"];
$pass = $_POST["pass"];

include "connection.php";

// $sql = "Create table students (User_ID int(6) primary key, Name varchar(30), 
//         Department varchar(20), Email varchar(30), Password varchar(30))";

// if (mysqli_query($conn,$sql)){
//     echo "Table created successfully";
// }
// else{    
// echo "Failed";
// }

$sql = "Insert into students values($collgeid,'$name','$dept','$email','$pass')";

if(mysqli_query($conn,$sql)){
    echo " Registration Successfull";
}

echo "<br> <a href='login.php'>Login using your Email and Password</a>";

}
?>