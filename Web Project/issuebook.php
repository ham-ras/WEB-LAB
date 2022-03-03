<html>
<head>
<title>
</title>
</head>
<body>
<form action="" method="POST">
<table>
<input type="button" value="Back" onclick="window.location.href='adminprofile.php'">
<tr><td>
<h2>Issue books</h2>
</td></tr>
<tr>
<td><input type= "number" name="bkno" placeholder="Book No" required></td><br><br>
</tr>
<tr>
<td><br><input type="number" name = "user" placeholder="User_ID" required >
</tr>
<tr>
<td><br><label for="issuedate">Issue Date:</label><br><input type="date" name = "issuedate" id="issuedate" 
placeholder="Issue Date" required>
</tr>
<tr>
<td><br><label for="returndate">Return Date:</label><br><input type="date" name = "returndate" placeholder="Return Date" required>
</tr>
<tr>
<td><br><input type="submit" value = "Issue"></td> 
</tr>
</table>
</form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["bkno"])){
    
    include "connection.php";
    $bookno = $_POST["bkno"];
    $userID = $_POST["user"];
    $issue = $_POST["issuedate"];
    $return = $_POST["returndate"];

    $sql = "INSERT INTO issued_books(`Book_No`, `User_ID`, `Issue_Date`, `Return_Date`) 
            VALUES ($bookno,$userID,'$issue','$return')";

    if(mysqli_query($conn,$sql)){

        echo "<br>Book is issued";
    
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }
}




}


?>