<html>
    <head>
        <title>BBMS - Patient Registration</title>
        <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/adminpage.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="navbar">
            <p>Blood Bank Management System</p>

            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../admin/adminlogin.php">Admin</a></li>
                <li><a href="../donor/donorlogin.php">Donor</a></li>
                <li><a href="patientlogin.php">Patient</a></li>
            </ul>
        </div>
        <div class="contentbox">
        <div class="adminloginbox registrationbox">
            <p class='adminlogin'>Patient Registration</p><hr>
            <form action="addpatient.php">
                <input type="text" name="name" placeholder="Enter Name"><br>
                <input type="email" name="email" placeholder="Enter Email"><br>
                <input type="password" name="pass" placeholder="Enter Password"><br>
                <input type="text" name="mob" placeholder="Enter Mobile"><br>
                <input type="submit" value="Register" class="subbutton">
            </form>
        </div>
        </div>
        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>