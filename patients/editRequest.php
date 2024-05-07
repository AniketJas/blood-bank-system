<html>
    <head>
        <title>BBMS - Donor Dashboard</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/donordetails.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/editdonor.css?v=<?php echo time(); ?>"> 
        <link rel="stylesheet" href="../css/donationreq.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <?php
        session_start();
        $name = $_SESSION['name'];
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

        $requestID = $_GET['requestID'];

        $con = mysqli_connect('localhost', 'root', '8338', 'bloodbank');
        $q = "select * from requests where request_id='$requestID'";
        $rs = mysqli_query($con,$q);

        if($row = mysqli_fetch_array($rs)){
            echo "
            <div class='form'>
            <p class='dd'>Edit Donation Request</p><hr>
            <form method='get' action='updateRequest.php'>
                <input type='text' value='$row[request_id]' name='id' style='display:none'/><br>
                <p>Blood Group:</p> <input type='text' value='$row[blood_group]' name='blood_group'/><br>
                <p>No of Units:</p> <input type='text' value='$row[no_units]' name='units'/><br>
                <p>Reason: </p><textarea name='reason' placeholder='$row[reason]'></textarea><br>
                <input type='submit' value='Update' class='button'/>
            </form></div>
            ";
        }
        ?>

<div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>