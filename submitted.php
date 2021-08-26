<?php
require 'dbh.php';
if(isset($_POST['butent'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    if(empty($id) || empty($date) ||empty($time) ){
        header("Location: index.php?error=emptyfields");
        exit();
    }else{
        $sql = "SELECT `id`,`endate`,`edate`,`time_out` FROM `details` WHERE `id`='$id'";
        $result = $conn->query($sql);
        if($result){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    if($row['endate']!=NULL && $row['edate']==NULL){
                        header("Location: index.php?error=error2");     //error2 : - labours previous day's exit data missing
                        exit();
                    }else{
                        $quer = "UPDATE `details` SET `endate`='$date',`time_in`='$time' WHERE `id`='$id'";
                        if($conn->query($quer)){
                            header("Location: index.php?status=updated");
                            exit();
                        }
                    }
                }
            }else{
                header("Location: index.php?error=erroru");
                exit(); //erroru: - contact developer for this error
            }
        }else{
            header("Location: index.php?error=error1");  // error1 : -   Id not available Click new input for entry
            exit();
        }
    }
}
?>