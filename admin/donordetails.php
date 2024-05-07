<html>
    <head>
        <title>BBMS - Admin Dashboard</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/donordetails.css?v=<?php echo time(); ?>">
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
                <li><a href=''>Requests</a></li>
                <li><a href='../logout.php'>Logout</a></li>
            </ul>
        </div>";

        echo "
        <div class='contentbox'>
        <p class='heading'>List Of All Donors</p>";

        echo "
        <div class='table'><table>
        <tr>
        <th class='thead'>DonorID</th>
        <th class='thead'>Donor Name</th>
        <th class='thead'>Donor Email</th>
        <th class='thead'>Mobile</th>
        <th class='thead' colspan='2'>Action</th>
        </tr>";

        $con = mysqli_connect('localhost', 'root', '8338','bloodbank');
        $q = "select * from donors";
        $rs = mysqli_query($con,$q);
        
        while($row = mysqli_fetch_array($rs)){
            echo "<tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[mobile]</td>
        <td class='btn'>
            <button class='edit'><a href='editdonor.php?id=$row[id]'>Edit</a></button>
            <button class='delete'><a href='deletedonor.php?id=$row[id]'>Delete</a></button>
        </td>
        </tr>";}
        echo "</table></div></div>"
        ?>

        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>