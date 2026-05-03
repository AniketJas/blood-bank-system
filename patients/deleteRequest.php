<html>
    <body>
        <?php
        $id = $_GET['requestID'];

        require_once '../config.php';
        $q = "delete from requests where request_id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Deleted Successfully');
            window.location.assign('requestHistory.php')</script>";
        }
        ?>
    </body>
</html>