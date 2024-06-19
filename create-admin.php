<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin Account</title>
    <link rel="icon" href="img/favEoss.png">
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="centre">
        <h1>Create Admin Account</h1>
        <form action="includes/admin.inc.php" method="post">
            <div class="txt-field">
                <input type="text" name="fname" placeholder="Fullname" required>
            </div>
            <div class="txt-field">
                <input type="text" name="uid" placeholder="Username" required>
            </div>
            <div class="txt-field">
                <input type="text" name="email" placeholder="Email..." required>
            </div>
            <!-- <div class="txt-field">
                <select name="department" id="dept">
                    <option value="" disabled selected hidden> Select Company Role </option>
                    <option value="Chief Investiment Officer">Chief Investiment Office</option>
                    <option value="Ceo and Cofounder">Ceo and Cofounder</option>
                    <option value="Chief Technology and Innovation">Chief Technology and Innovation</option>
                    <option value="Talent-Market and Research">Talent-Market and Research</option>
                    <option value="Member">Member</option>
                </select>
            </div> -->
            <div class="txt-field">
                <input type="password" name="pwd" placeholder="Password." required>
            </div>
            <div class="txt-field">
                <input type="password" name="conPwd" placeholder="Confirm Password." required>
            </div>
            <input type="submit" name="submit-create" value="Create Account">
        </form>
    </div>
</body>

</html>