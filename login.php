<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>

    <div class="center">
        <h1>Login To Admin Account</h1>
        <form action="includes/login.inc.php" method="post">
            <div class="txt-field">
                <input type="text" name="uid" required id="uid">
                <label for="uid">Username</label>
            </div>
            <div class="txt-field">
                <input type="password" name="pwd" required id="pwd">
                <label for="pwd">Password</label>
            </div>
            <div class="pass"><a href="forget.php">Forgot Password</a></div>
            <input type="submit" name="submit-login" value="Login">
        </form>
    </div>

    <?php
    #checking for erros then displaying error messages
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinputs") {
            echo "<p>Please fill in all fields!!</p>";
        } elseif ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect Login details</p>";
        } elseif ($_GET["error"] == "wrongPwd") {
            echo "<p>Please check your password</p>";
        }
    }

    ?>
</body>

</html>