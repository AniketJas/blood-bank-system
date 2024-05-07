<html>
    <body>
        <?php
        $id = $_GET['id'];

        $con = mysqli_connect('localhost','root','8338','bloodbank');
        $q = "delete from donors where id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Deleted Successfully');
            window.location.assign('donordetails.php')</script>";
        }
        ?>
    </body>
</html>