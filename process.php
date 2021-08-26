<?php
date_default_timezone_set('Asia/Kolkata');
$day = date('l');
$time = date('h:i');
$min = date('i');
$pdate = date('Y-m-d');

if(isset($_POST['linbtn'])){
    require 'dbh.php';
    $linput = $_POST['lin'];
    if(empty($linput)){
        header("Location: index.php?error=emptyfield");
        exit();
    }else{
        $sql = "SELECT * FROM `details` WHERE `id`='$linput'";
        $result = $conn->query($sql);
        if($result){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['endate']!=NULL && $row['edate']==NULL){
                        header("Location: index.php?error=error2");     //error2 : - labours previous day's exit data missing
                        exit();
                    }else{
                        $quer = "UPDATE `details` SET `endate`='$pdate',`time_in`='$time' WHERE `id`='$linput'";
                        if($conn->query($quer)){
                            header("Location: index.php?status=updated");
                            exit();
                        }else{
                            header("Location: index.php?error=notupdated");
                            exit();
                        }
                    }
                }
            }else{
                header("Location: index.php?error=nodata");
                exit();
            }
        }else{
            header("Location: index.php?error=error1");
            exit();
        }
    }  
}
if(isset($_POST['loutbtn'])){
    require 'dbh.php';
    $oinput = $_POST['lout'];
    if(empty($oinput)){
        header("Location: index.php?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT * FROM `details` WHERE `id`='$oinput'";
        $result = $conn->query($sql);
        if($result){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['endate']== NULL && $row['edate']!=NULl){
                        header("Location: index.php?error=error1");
                        exit();
                    }else{
                        $quer = "UPDATE `details` SET `edate`='$pdate', `time_out`='$time' WHERE `id`='$oinput'";
                        if($conn->query($quer)){
                            header("Location: index.php?updated");
                            exit();
                        }else{
                            header("Location: index.php?error=notexited");
                            exit();
                        }
                    }
                }
            }else{
                header("Location: index.php?error=nodata");
                exit();
            }
        }else{
            header("Location: index.php?error=error1");
            exit();
        }
    }
}
?>