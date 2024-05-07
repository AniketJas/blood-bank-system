<html>
    <body>
        <?php
        $id = $_GET['requestID'];

        $con = mysqli_connect('localhost','root','8338','bloodbank');
        $q = "delete from requests where request_id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Deleted Successfully');
            window.location.assign('requestHistory.php')</script>";
        }
        ?>
    </body>
</html>