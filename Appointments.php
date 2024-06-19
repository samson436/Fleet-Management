<head>
    <link rel="stylesheet" href="css/style2.css" />
    <meta name="viewpoint" content="with=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favEoss.png">
</head>

<body>
    <div class="akoko">
        <div class="note">
            <h3>Book Your clinic appointment early and save time</h3>
            <p></p>
        </div>
        <div class="aoro">
            <h2>Fill the Appointment </h2>
            <div class="awiti">
                <form class="form-h" action="includes/apt.inc.php" method="post">
                    <input type="text" name="fname" placeholder="Patient Name" required>
                    <input type="text" name="phonenumber" placeholder="Phone Number" required><br><br>
                    <input type="text" name="email" placeholder="Email.." required>
                    <input type="text" name="residence" placeholder="Residence" required><br><br>
                    <input type="text" name="age" placeholder="Patient Age" required>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female<br><br>
                    <?php
                    include_once 'includes/dbh.inc.php';
                    $sql = "SELECT * FROM clinics";
                    $result = $conn->query($sql);
                    ?>
                    <select name="clinic" id="reg" required>
                        <option value="" disabled selected hidden> Select Clinic </option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <option><?php echo $row["opCategory"]; ?></option>
                            <?php
                            }
                        } else {
                            ?>
                            <option><?php echo "Op Clinics are not available"; ?></option>
                        <?php
                        }

                        ?>
                    </select>
                    <?php
                    include_once 'includes/dbh.inc.php';
                    $sql = "SELECT * FROM doctors";
                    $result = $conn->query($sql);
                    ?>
                    <select name="doc" id="reg" required>
                        <option value="" disabled selected hidden> Select Doctor </option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <option><?php echo $row["docName"]; ?></option>
                            <?php
                            }
                        } else {
                            ?>
                            <option><?php echo "Doc Not Available"; ?></option>
                        <?php
                        }

                        ?>
                    </select><br><br>
                    <button type="submit" name="submit-hire">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- <img src="images/investor1.jpeg" alt="">
  <?php
    #checking for erros then displaying error messages
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinputs") {
            echo "<p>Please fill in all fields!!</p>";
        } elseif ($_GET["error"] == "invalidUid") {
            echo "<p>Please choose a correct username!!</p>";
        } elseif ($_GET["error"] == "invalidEmail") {
            echo "<p>Please enter correct Email!!</p>";
        } elseif ($_GET["error"] == "passwordsDoNotMatch") {
            echo "<p>password and confirm password do not match!!!</p>";
        } elseif ($_GET["error"] == "userExist") {
            echo "<p>User Already exist please check your username or email!!!</p>";
        } elseif ($_GET["error"] == "stmtfailed") {
            echo "<p>Opps!! something went wrong try again..</p>";
        } elseif ($_GET["error"] == "none") {
            echo "<p>You have signed up</p>";
        }
    }

    if (isset($_GET["newPwd"])) {
        if ($_GET["newPwd"] === "pwdUpdated") {

            echo "<p>You changed password!</p>";
        }
    }

    ?>----->
</body>

</html>