<html>
    <head>
        <title>BBMS - Admin Dashboard</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
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

            $con = mysqli_connect('localhost', 'root', '8338','bloodbank');
            $q = "select * from stock order by sno";
            $rs = mysqli_query($con,$q);

            echo "
            <div class='bloodcount'>";
            while($row = mysqli_fetch_array($rs)){
                echo "
                <div class='value'>
                <p class='bloodtype'>$row[blood_group]</p>
                <p class='bloodcnt'>Total Unit Avaliable : <b>$row[stock]</b> </p>
                </div>
                ";
            }
            echo "</div>";
            ?>
        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
        </body>
</html>