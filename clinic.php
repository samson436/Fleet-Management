<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Clinic</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="center">
        <h1>Add new clinic</h1>
        <form action="includes/clinic.inc.php" method="post">
            <div class="txt-field">
                <input type="text" name="uid" required id="uid">
                <label for="uid">Username</label>
            </div>
            <input type="submit" name="submit-clinic" value="Add New">
        </form>
    </div>
</body>

</html>