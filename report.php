<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eoss Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">
    <script src=" https://kit.fontawesome.com/8fab363ec0.js" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="sidebar">
        <header>Eoss Admin Dashboard</header>
        <ul>
            <li><a href="index.html"><i class="fa fa-house-user"></i>Home</a></li>
            <li><a href="#apt"><i class="fa fa-person"></i>Appointments</a></li>
            <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i>Mail</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="search...">
                    <button type="submit"><img src="img/search.png" alt="search"></button>
                    <a class="btn" href="clinic.php">Add Clinic</a>
                    <a class="btn" href="doctor.php">Add Doctor</a>
                </div>
                <div class="admin">
                    <!--<a class="btn" href="create-admin.php">Create New</a>
                    <a class="btn" href="includes/logout.inc.php">Signout</a>---->
                    <!--- <a class="btn" href="create-admin.php">Create New</a>----->
                    <?php
                    if (isset($_SESSION["adminId"])) {
                        echo "<a class='btn' href='create-admin.php'>Create New</a>";
                        echo "<a class='btn' href='includes/logout.inc.php'>Log Out</a>";
                    } else {
                        //header("location: ../index.html");
                        exit();
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="hire-talent" id="hire">
                    <div class="title">
                        Hire Talents
                    </div>
                    <?php
                    include_once 'includes/dbh.inc.php';
                    //select the tables
                    $sql = "SELECT * FROM patientvisitdetails";
                    $result = $conn->query($sql);
                    ?>
                    <table>
                        <tr>
                            <th>Patient Name</th>
                            <th>Patient Phone Number</th>
                            <th>Patient Email</th>
                            <th>Residence</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Outpatient Clinic</th>
                            <th>Attending Doctor</th>
                        </tr>
                        <?php
                        //FETCH THE DATA
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td><?php echo $row['pntName']; ?></td>
                                    <td><?php echo $row['pntPhoneNo']; ?></td>
                                    <td><?php echo $row['pntEmail']; ?></td>
                                    <td><?php echo $row['pntResidence']; ?></td>
                                    <td><?php echo $row['pntAge']; ?></td>
                                    <td><?php echo $row['pntGender']; ?></td>
                                    <td><?php echo $row['pntOpCategory']; ?></td>
                                    <td><?php echo $row['docName']; ?></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <th colspan="2">There is no data found!!</th>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>