<?php
require_once '../config.php';

$id = $_GET['id'];
$status = $_GET['status'];

$q = "update donation set status='$status' where donation_id='$id'";
$rs = mysqli_query($con,$q);

if($status == 1){
    $unit = $_GET['unit'];
    $bg = rawurldecode($_GET['bg']);
    $approve = "update stock set stock=stock+$unit where blood_group='$bg'";
    mysqli_query($con,$approve);
}

if($rs){
    echo "<script>alert('Changes saved');
    window.location.assign('donationrequest.php');</script>";
}else{
    echo "<script>alert('Error Saving Changes');
    window.location.assign('donationrequest.php');</script>";
}