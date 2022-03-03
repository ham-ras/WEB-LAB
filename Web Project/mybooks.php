<html>
<head>
    <style>
      table,
      td,tr
      th {
        border: 1px solid black;
      }
      table {
        border-collapse: separate;
        border-spacing: 3px;
        width: 80%;
        text-align:center;
        margin-left: auto;
        margin-right: auto;
      }
      th,
      td {
       text-align: center;
      }
      </style>
</head>


<?php

echo "<h1>My Books</h1>";
session_start();
include "connection.php";
$name = $_SESSION['users'];
$sql = "select User_ID from students where  Name = '$name'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_assoc($result)){

        $user_ID = $row["User_ID"];
    }
}

$sql = "select * from issued_books where User_ID =$user_ID ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
            
    echo"<br>";
echo "<table>";
echo "<tr>";
echo "<th>Issue_ID</th>";
echo "<th>Book_No</th>";
echo "<th>Issue_Date</th>";
echo "<th>Return_Date</th>";
echo "</tr>";

while($rows = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$rows['Issue_ID']."</td>";
    echo "<td>".$rows['Book_No']."</td>";
    echo "<td>".$rows['Issue_Date']."</td>";
    echo "<td>".$rows['Return_Date']."</td>";
    echo "</tr>";

}

echo "</table>";
}
else{
    echo "You have no books";
}




?>

</html>