<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    include "connection.php";

    $sql = "select Name from students 
            where Email = '$user' and Password = '$pass' ";

    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_assoc($result)){

            echo "Login  successfull".$row["Name"];
            $_SESSION["users"]=$row["Name"];
        }
        
        header("Location:userprofile.php");

    }
    else{
        echo "<br>Login failed. Check your password and login again";
    }
 
    
}




?>