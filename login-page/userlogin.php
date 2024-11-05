<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <center>
        <form method=post action="">
            <table border="1">
                <tr>
                    <th>User Name</th>
                    <td><input type="text" name="txtuser" id=""></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type="password" name="txtpass" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="submit">
                        <input type="reset" value="reset">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST["txtuser"];
            $pass = $_POST["txtpass"];

            // Validation logic
            if (strcmp($user, "neha") == 0 && strcasecmp($pass, "12345") == 0) {
                header("Location: welcome.php");
                // echo "<font color='green' size='5'>You are a valid user</font>";
            } else {
                echo "<font color='red' size='5'>You are an invalid user</font>";
            }
        }
        ?>
    </center>
</body>

</html>