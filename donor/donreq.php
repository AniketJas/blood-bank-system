<html>
    <head>
        <title>BBMS - Admin Dashboard</title>
        <link rel="stylesheet" href="../css/admindashboard.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../css/donordetails.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <?php
        session_start();
        $name = $_SESSION['name'];
        $id = $_SESSION['id'];
        $sno=1;
            if(isset($_SESSION['name']) == false){
                echo "<script>
            window.location.assign('donorlogin.php');
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

        echo "<div class='contentbox'>
        <p class='heading'>Donation Request</p>
        ";

        echo "
        <div class='table'><table>
        <tr>
        <th class='thead'>S.No.</th>
        <th class='thead'>DonationID</th>
        <th class='thead'>Blood Group</th>
        <th class='thead'>Unit(in ml)</th>
        <th class='thead'>Status</th>
        <th class='thead'>Action</th>
        </tr>";

        $con = mysqli_connect('localhost', 'root', '8338','bloodbank');
        $q = "select * from donation where donor_id='$id'";
        $rs = mysqli_query($con,$q);
        
        while($row = mysqli_fetch_array($rs)){
            echo "<tr>
        <td>$sno</td>
        <td>$row[donation_id]</td>
        <td>$row[blood_group]</td>
        <td>$row[no_units]</td>";

        if($row['status'] == 0){
            echo "<td class='btn'>
                <button class='pending'>Pending</button>
            </td>
            <td class='btn'>
                <button class='edit'><a href='editRequest.php?donationID=$row[donation_id]'>Edit</a></button>
                <button class='delete'><a href='deleteRequest.php?donationID=$row[donation_id]'>Delete</a></button>
                </td>";
            }

        else if($row['status'] == 1){
            echo "<td class='btn'>
                <button class='approved'>Approved</button>
            </td>
            <td class='btn'>
                <button class='action'>No Action Needed</button>
                </td>";
            }

            else{
                echo "<td class='btn'>
                    <button class='rejected'>Rejected</button>
                </td>
                <td class='btn'>
                <button class='action'>No Action Needed</button>
                </td>";
            }

        echo "</tr>";
        $sno++;
    }
        echo "</table></div></div>"
        ?>

        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>