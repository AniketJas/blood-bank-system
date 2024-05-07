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
                <li><a href='bloodrequest.php'>Requests</a></li>
                <li><a href='../logout.php'>Logout</a></li>
            </ul>
        </div>";

        echo "<div class='contentbox'>
        <p class='heading'>Manage Blood Requests</p>
        ";

        echo "
        <div class='table'><table>
        <tr>
        <th class='thead'>S.No.</th>
        <th class='thead'>RequestID</th>
        <th class='thead'>Patient Name</th>
        <th class='thead'>Mobile No.</th>
        <th class='thead'>Blood Group</th>
        <th class='thead'>Unit(in ml)</th>
        <th class='thead'>Reason</th>
        <th class='thead'>Status</th>
        <th class='thead'>Action</th>
        </tr>";

        $con = mysqli_connect('localhost', 'root', '8338','bloodbank');
        $q = "select * from requests where status=0";
        $rs = mysqli_query($con,$q);
        $sno=1;
        
        while($row = mysqli_fetch_array($rs)){
            echo "<tr>
        <td>$sno</td>
        <td>$row[request_id]</td>";

        $patientq = "select * from patients where id = '$row[patient_id]'";
        $patientResult = mysqli_query($con,$patientq);

        if($r = mysqli_fetch_array($patientResult)){
            echo "<td>$r[name]</td>
            <td>$r[mobile]</td>";
        }

        echo "<td>$row[blood_group]</td>
        <td>$row[no_units]</td>
        <td>$row[reason]</td>";

        $bg = urlencode($row['blood_group']);

        echo "<td class='btn'>
            <button class='pending'>Pending</button>
        </td>
        <td class='btn'>
            <button class='edit'><a href='actionPatient.php?id=$row[request_id]&status=1&unit=$row[no_units]&bg=$bg'>Approve</a></button>
            <button class='delete'><a href='actionPatient.php?id=$row[request_id]&status=2&unit=$row[no_units]&bg='$row[blood_group]'>Reject</a></button>
        </td>";

        echo "</tr>";}

        echo "</table></div></div>";
        ?>

        <div class="footer">&copy; Made with &#10084;, by Aniket Jas</div>
    </body>
</html>