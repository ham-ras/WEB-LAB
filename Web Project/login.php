<html>

<head>
    <title>
    </title>
</head>

<body>
    <form action="loggedin.php" method="POST">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td><input type="text" name="user" placeholder="Username" required></td><br><br>
                </tr>
                <tr>
                    <td><input type="password" name="pass" placeholder="Password" required>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"></td>
                </tr>
                <tr>
                    <td><a href="">Forgot password ?</a></td>
                </tr>
                <tr>
                    <td>New User ? <input type="button" value="Register" onclick="window.location.href='register.php'"></td>

                </tr>
                <br>
                <tr>
                    <td>Admin Login <input type="button" value="Admin login" onclick="window.location.href='adminlogin.php'"></td>

                </tr>
            </table>
    </form>

</body>

</html>