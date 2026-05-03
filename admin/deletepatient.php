<html>
    <body>
        <?php
        $id = $_GET['id'];

        require_once '../config.php';
        $q = "delete from patients where id='$id'";
        $result = mysqli_query($con, $q);

        if($result){
            echo "<script>alert('Deleted Successfully');
            window.location.assign('patientdetails.php')</script>";
        }
        ?>
    </body>
</html>