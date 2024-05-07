<html>
    <body>
        <?php
        $id = $_GET['donationID'];

        $con = mysqli_connect('localhost','root','8338','bloodbank');
        $q = "delete from donation where donation_id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Deleted Successfully');
            window.location.assign('donreq.php')</script>";
        }
        ?>
    </body>
</html>