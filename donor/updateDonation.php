<?php

$donation_id = $_GET['id'];
$blood_group = $_GET['blood_group'];
$unit = $_GET['units'];
$disease = $_GET['disease'];

$con = mysqli_connect('localhost', 'root', '8338', 'bloodbank');
$q = "update donation set blood_group='$blood_group', no_units='$unit', disease='$disease' where donation_id='$donation_id'";
$rs = mysqli_query($con,$q);

if($rs){
    echo "<script>alert('Updated Successfully');
    window.location.assign('donreq.php')</script>";
}else{
    echo "<script>alert('Error Updating, Please Try Again');
    window.location.assign('donreq.php')</script>";
}