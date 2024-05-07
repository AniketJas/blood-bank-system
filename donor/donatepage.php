<html>
    <head>
        <title>BBMS - Donor Dashboard</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/adminpage.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/donationreq.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <?php
        session_start();
        $name = $_SESSION['name'];
            if(isset($_SESSION['name']) == false){
                echo "<script>
            window.location.assign('adminlogin.php');
            </script>";
            }


            echo "<div class='navbar'>
            <p class='title'>Blood Bank - Donor</p>

            <p class='name'><b>User:</b> $name</p>

            <ul>
            <li><a href='donordashboard.php'>Dashboard</a></li>
            <li><a href='donatepage.php'>Donate</a></li>
            <li><a href='donreq.php'>Request</a></li>
            <li><a href=''>Print Certificate</a></li>
            <li><a href='../logout.php'>Logout</a></li>
            </ul>
        </div>";
        
        echo "
        <div class='contentbox'>
        <div class='adminloginbox'>  
            <p class='adminlogin'>Blood Donation Form</p><hr>
            <form action='addDonationRequest.php'>
                <select name='blood_group' id='blood_group' value='Select Blood Group'>
                    <option value='A+'>A+</option>
                    <option value='A-'>A-</option>
                    <option value='B+'>B+</option>
                    <option value='B-'>B-</option>
                    <option value='AB+'>AB+</option>
                    <option value='AB-'>AB-</option>
                    <option value='O+'>O+</option>
                    <option value='O-'>O-</option>
                </select>
                <br>
                <input type='text' name='units' placeholder='Enter No of units'><br>
                <textarea name='disease' placeholder='disease if any'></textarea>
                <input type='submit' value='Submit' class='subbutton'>
            </form>
            </div>
            <div class='image'></div>
            </div>
        ";
        
        ?>
        <div class='footer'>&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>