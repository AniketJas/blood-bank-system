<html>
    <head>
        <title>BBMS - Admin Login</title>
        <link rel="stylesheet" href="../css/index.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/adminpage.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="navbar">
            <p>Blood Bank Management System</p>

            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="../donor/donorlogin.php">Donor</a></li>
                <li><a href="../patients/patientlogin.php">Patient</a></li>
            </ul>
        </div>

        <div class="contentbox">
            <div class="adminloginbox">
                <p class='adminlogin'>Admin Login</p><hr>
                <form action="admchk.php">
                    <input type="email" name="id" placeholder="Enter Email"><br>
                    <input type="Password" name="pass" placeholder="Enter Password"><br>
                    <input type="submit" value="Login" class="subbutton">
                </form>
            </div>
        </div>
        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>