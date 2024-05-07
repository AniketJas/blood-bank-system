<html>
    <head>
        <title>BBMS - Patient Dashboard</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
</head>
    <body>
        <?php
        session_start();
        $name = $_SESSION['name'];
        $patient_id = $_SESSION['id'];
            if(isset($_SESSION['name']) == false){
                echo "<script>
            window.location.assign('patientlogin.php');
            </script>";
            }

            echo "<div class='navbar'>
            <p class='title'>Blood Bank - Patient</p>
            
            <p class='name'><b>User:</b> $name</p>
            
            <ul>
            <li><a href='patientdashboard.php'>Dashboard</a></li>
            <li><a href='requestPage.php'>Request Blood</a></li>
            <li><a href='requestHistory.php'>Requests History</a></li>
            <li><a href='../logout.php'>Logout</a></li>
            </ul>
            </div>";

            $con = mysqli_connect('localhost', 'root', '8338','bloodbank');

            $countApproved = "select COUNT(status) as approved from requests where patient_id='$patient_id' AND status=1";
            $resultApproved = mysqli_fetch_array(mysqli_query($con,$countApproved));

            $countPending = "select COUNT(status) as pending from requests where patient_id='$patient_id' AND status=0";
            $resultPending = mysqli_fetch_array(mysqli_query($con,$countPending));

            $countRejected = "select COUNT(status) as rejected from requests where patient_id='$patient_id' AND status=2";
            $resultRejected = mysqli_fetch_array(mysqli_query($con,$countRejected));

            $countTotal = "select COUNT(status) as total from requests where patient_id='$patient_id'";
            $TotalRequest = mysqli_fetch_array(mysqli_query($con,$countTotal));

            $totalBlood = "select SUM(no_units) as totaldonated from requests where patient_id='$patient_id' AND status=1";
            $totalBloodRequested = mysqli_fetch_array(mysqli_query($con,$totalBlood));

            echo "<div class='bloodcount'>";

            if($totalBloodRequested['totaldonated'] == NULL){
                echo "
            <div class='value'>
                <p class='bloodtype'>Blood Requested</p>
                <p class='bloodcnt'>Total: 0 units </p>
            </div>
            ";
            }else{           
            echo "
            <div class='value'>
                <p class='bloodtype'>Blood Requested</p>
                <p class='bloodcnt'>Total: $totalBloodRequested[totaldonated] units </p>
            </div>
            ";
            }

            echo "
            <div class='value'>
                <p class='bloodtype'>Total Requests</p>
                <p class='bloodcnt'>Total: $TotalRequest[total]</p>
            </div>
            ";

            echo "
            <div class='value'>
                <p class='bloodtype'>Request Pending</p>
                <p class='bloodcnt'>Total: $resultPending[pending]</p>
            </div>
            ";

            echo "
            <div class='value'>
                <p class='bloodtype'>Request Accepted</p>
                <p class='bloodcnt'>Total: $resultApproved[approved]</p>
            </div>
            ";

            echo "
            <div class='value'>
                <p class='bloodtype'>Request Rejected</p>
                <p class='bloodcnt'>Total: $resultRejected[rejected]</p>
            </div>
            ";

            echo "</div>";
            ?>
        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
        </body>
</html>