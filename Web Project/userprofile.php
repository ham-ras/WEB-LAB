<html>
<head>
    <title>LMS</title>

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
session_start();
?>

<body>
<marquee direction="left" behaviour="sliding" onMouseOver="this.stop()" onMouseOut="this.start()">
    <h1>Library Manamgement System </h1>
    </marquee>
<h2>Hello <?php echo $_SESSION["users"]; ?> </h2>

<form action = "" method="post">

<input type="text" name = "check" width=90% placeholder = "search book, author,......"  > &nbsp;
<input type="submit" value="search" style="width:50px">
<input type="button" value="My Books" style="width: 75px" onclick="window.location.href='mybooks.php'">



</form>



</body>
</html>

<?php

include "connection.php";
if(!(isset($_POST["check"]))){

    $sql = "select * from books";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo"<br>";
        echo "<table>";
        echo "<tr>";
        echo "<th>User_ID</th>";
        echo "<th>Book_Name</th>";
        echo "<th>Publisher</th>";
        echo "<th>Author</th>";
        echo "<th>Price</th>";
        echo "</tr>";
        while($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$rows['Book_No']."</td>";
            echo "<td>".$rows['Book_Name']."</td>";
            echo "<td>".$rows['Publisher']."</td>";
            echo "<td>".$rows['Author']."</td>";
            echo "<td>".$rows['Price']."</td>";
            echo "</tr>";
            
        }
        echo "</table>";
    }
    else{
        echo "<br>The book you searched is not avaiable";
    }
}
else{

    if(isset($_POST["check"])){
        $searchbook = $_POST["check"];
        $sql = "select * from books
                where Book_Name like '%$searchbook%' or 
                Author like '%$searchbook%' ";
        $result = mysqli_query($conn,$sql);
       
        if(mysqli_num_rows($result)>0){
            
            echo"<br>";
        echo "<table>";
        echo "<tr>";
        echo "<th>User_ID</th>";
        echo "<th>Book_Name</th>";
        echo "<th>Publisher</th>";
        echo "<th>Author</th>";
        echo "<th>Price</th>";
        echo "</tr>";

        while($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$rows['Book_No']."</td>";
            echo "<td>".$rows['Book_Name']."</td>";
            echo "<td>".$rows['Publisher']."</td>";
            echo "<td>".$rows['Author']."</td>";
            echo "<td>".$rows['Price']."</td>";
            echo "</tr>";

        }

        echo "</table>";
        }
    }
}

?>