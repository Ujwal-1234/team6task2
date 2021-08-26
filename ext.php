<?php

if(isset($_POST['butex'])){
    require 'dbh.php';
    $ids = $_POST['lids'];
    $exdate = $_POST['exdate'];
    $extin = $_POST['extin'];
    $q = "UPDATE `details` SET `edate`='$exdate',`time_out`='$extin' WHERE `id` = '$ids' ";
    if($conn->query($q) === TRUE){
        header("Location: index.php?exited");
    }else{
        echo 'not exited';
    }
}

if(isset($_POST['lexit'])){
    
    date_default_timezone_set('Asia/Kolkata');
    $day = date('l');
    $time = date('h:i');
    $min = date('i');
    $pdate = date('Y-m-d');
    require 'dbh.php';
    $exitbtn = $_POST['lexit'];
    $qry = "UPDATE `details` SET `edate`='$pdate',`time_out`='$time' WHERE `id` = '$extbtn' ";
    if($conn->query($qry) === TRUE){
        header("Location: index.php?exited");
        exit();
    }else{
        header("Location: index.php?error");
    }
}
?>