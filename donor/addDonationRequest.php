<html>

    <?php
    $blood_group = $_GET['blood_group'];
    $units = $_GET['units'];
    $disease = $_GET['disease'];

    session_start();
    $id = $_SESSION['id'];

    $con = mysqli_connect('localhost','root','8338', 'bloodbank');
    $q = "insert into donation(donor_id,blood_group,no_units,disease,status) values('$id','$blood_group','$units','$disease', 0)";
    $rs = mysqli_query($con,$q);

    if($rs){
        echo "<script>alert('Requested submitted successfully');
        window.location.assign('donreq.php');</script>";
    }else{
        echo "<script>alert('Error while submitting. Please Try Again !!');
        window.location.assign('donatepage.php');
        </script>";
    }
    ?>
</html>