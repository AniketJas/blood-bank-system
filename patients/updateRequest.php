<?php

$request_id = $_GET['id'];
$blood_group = $_GET['blood_group'];
$unit = $_GET['units'];
$reason = $_GET['reason'];

$con = mysqli_connect('localhost', 'root', '8338', 'bloodbank');
$q = "update requests set blood_group='$blood_group', no_units='$unit', reason='$reason' where request_id='$request_id'";
$rs = mysqli_query($con,$q);

if($rs){
    echo "<script>alert('Updated Successfully');
    window.location.assign('requestHistory.php')</script>";
}else{
    echo "<script>alert('Error Updating, Please Try Again');
    window.location.assign('requestHistory.php')</script>";
}