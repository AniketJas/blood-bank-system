<html>
    <head>
        <title>BBMS - Admin Dashboards</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/donordetails.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/editdonor.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <?php
        session_start();
        $name = $_SESSION['uid'];
            if(isset($_SESSION['uid']) == false){
                echo "<script>
            window.location.assign('adminlogin.php');
            </script>";
            }
            echo "<div class='navbar'>
            <p class='title'>Blood Bank - Admin</p>

            <p class='name'><b>User:</b> $name</p>

            <ul>
                <li><a href='admindashboard.php'>Dashboard</a></li>
                <li><a href='donordetails.php'>Donors</a></li>
                <li><a href='patientdetails.php'>Patients</a></li>
                <li><a href='donationrequest.php'>Donations</a></li>
                <li><a href='bloodrequest.php'>Requests</a></li>
                <li><a href='../logout.php'>Logout</a></li>
            </ul>
        </div>";

        $id = $_GET['id'];

        $con = mysqli_connect('localhost', 'root', '8338', 'bloodbank');
        $q = "select * from donors where id='$id'";
        $rs = mysqli_query($con,$q);

        if($row = mysqli_fetch_array($rs)){
            echo "
            <div class='form'>
            <p class='dd'>Edit Donor Details</p><hr>
            <form method='get' action='updatedonor.php'>
                <input type='text' value='$row[id]' name='id' style='display:none'/><br>
                <p><p>Name:</p> <input type='text' value='$row[name]' name='name'/><br>
                <p>Email:</p> <input type='text' value='$row[email]' name='email'/><br>
                <p>Password: </p><input type='password' value='$row[password]' name='pass'/><br>
                <p> Mobile No:</p> <input type='text' value='$row[mobile]' name='mob'/><br>
                <input type='submit' value='Update' class='button'/>
            </form></div>
            ";
        }
        ?>

<div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>