<?php
require 'dbh.php';
if(isset($_POST['butsub'])){
    $lname = $_POST['lname'];
    $ltrade = $_POST['ltrade'];
    $lfname = $_POST['lfname'];
    $ldob = $_POST['ldob'];
    $lid = $_POST['lid'];
    $lgovid = $_POST['lgovid'];
    $day = $_POST['day'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $shift = $_POST['shift'];
    if(empty($lname) || empty($ltrade) || empty($lfname) || empty($date) || empty($day) || empty($time) || empty($ldob) || empty($lid) || empty($lgovid)){
        header("Location: index.php?error=emptyfields");
        exit();
    }else{
        $q1 = "INSERT INTO `workers`(`id`, `name`, `trade`, `father_name`, `dob`, `govt_id`) VALUES ('$lid','$lname','$ltrade','$lfname','$ldob','$lgovid');";
        $q1 .= "INSERT INTO `details`(`id`, `date`, `Day`, `shift`, `time_in`) VALUES ('$lid','$date','$day','$shift','$time')";
        if($conn->multi_query($q1) === TRUE){
            session_start();
            $_SESSION['id']=$lid;
            $_SESSION['lname']=$lname;
            header("Location: index.php?succes=submited");
            exit();
        }else{
            header("Location: index.php?error=$conn->error");
            exit();
        }
    }
}
?>