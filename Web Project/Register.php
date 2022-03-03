<html>
<head>
<title>
</title>
</head>
<body>
<form action="registered.php" method="POST">
<fieldset><legend>REGISTRATION FORM</legend>
<table>
<tr>
<td>Name </td><td><input type= "text" name="name" required></td><br><br>
</tr>
<tr>
<td>College Id</td><td><input type="text" name = "id" required>
</tr>
<tr>
<td>Select your Dept</td><td>
    <select name = "dept" required>
        <option>MCA</option>
        <option>MBA</option>
        <option>Civil</option>
        <option>Mechanical</option>
    </select></td>
</tr>
<tr>
<td>Email ID</td><td><input type="email" name="email" required>
</tr>
<td>Password</td> <td><input type="password" name="pass" required></td>
</tr>
<tr>
<td>Confirm Password</td><td><input type="password" name="repass" required></td>
</tr>
</fieldset>

<tr>
<td><input type="button" value = "Back to Login" onclick="window.location.href='login.php'"></td> <td>
    <input type="submit" value="Register"></td>
</tr>
</table>
</form>

</body>
</html>
