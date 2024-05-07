<?php

$con = mysqli_connect('localhost', 'root', '8338','bloodbank');
mysqli_set_charset($con, 'utf8');

$id = $_GET['id'];
$status = $_GET['status'];
$unit = $_GET['unit'];

$bg = rawurldecode($_GET['bg']);

if($status == 1){
    $check = "select * from stock where blood_group='$bg'";
    $chk = mysqli_query($con,$check);
    $val = mysqli_fetch_array($chk);

    if($val['stock'] < $unit){
        echo "<script>alert('Insufficient Blood');
        window.location.assign('bloodrequest.php');</script>";
        return;
    }else{
    $approve = "update stock set stock=stock-$unit where blood_group='$bg'";
    mysqli_query($con,$approve);
    }
}

$q = "update requests set status='$status' where request_id='$id'";
$rs = mysqli_query($con,$q);

if($rs){
    echo "<script>alert('Changes saved');
    window.location.assign('bloodrequest.php');</script>";
}else{
    echo "<script>alert('Error Saving Changes');
    window.location.assign('bloodrequest.php');</script>";
}