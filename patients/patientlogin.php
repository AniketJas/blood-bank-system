<html>
    <head>
        <title>BBMS - Patient Login</title>
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
                <li><a href="/patientlogin.php">Patient</a></li>
            </ul>
        </div>
<div class="contentbox">
        <div class="adminloginbox">
            <p class='adminlogin'>Patient Login</p><hr>
            <form action="patientchk.php">
                <input type="email" name="id" placeholder="Enter Email"><br>
                <input type="Password" name="pass" placeholder="Enter Password"><br>
                <input type="submit" value="Login" class="subbutton">
            </form>
            <p class='register' style="font-size: 14px;">Don't have an account, <a href='patientregistration.php'>Create here</a></p>
        </div></div>
        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>