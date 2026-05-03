<html>
    <body>
        <?php
        $id = $_GET['id'];
        require_once '../config.php';
        $q = "delete from donors where id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Deleted Successfully');
            window.location.assign('donordetails.php')</script>";
        }
        ?>
    </body>
</html>