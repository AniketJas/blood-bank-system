<html>

    <?php
    $blood_group = $_GET['blood_group'];
    $units = $_GET['units'];
    $reason = $_GET['reason'];

    session_start();
    $id = $_SESSION['id'];

    require_once '../config.php';
    $q = "insert into requests(patient_id,blood_group,no_units,reason,status) values('$id','$blood_group','$units','$reason', 0)";
    $rs = mysqli_query($con,$q);

    if($rs){
        echo "<script>alert('Requested submitted successfully');
        window.location.assign('requestHistory.php');</script>";
    }else{
        echo "<script>alert('Error while submitting. Please Try Again !!');
        window.location.assign('requestPage.php');
        </script>";
    }
    ?>
</html>