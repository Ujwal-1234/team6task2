<?php
require 'dbh.php';
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <header>
        ACME EHS TEAM
    </header>
    <body>
        <div class="cont">
            <div class="ctable">
                <table>
                    <tr>
                        <th> SERIAL</th>
                        <th> ID </th>
                        <th> NAME </th>
                        <th> GOVERNMENT ID </th>
                        <th> TRADE </th>
                        <th> FATHER NAME </th>
                        <th> D.O.B. </th>
                        <th> DATE </th>
                        <th> DAY </th>
                        <th> SHIFT </th>
                        <th> TIME IN </th>
                        <th> EXIT DATE </th>
                        <th> TIME EXIT </th>
                    </tr>

                <?php
                $serial = 1;
                $q0 ="SELECT * FROM `workers`, `details` WHERE `workers`.`id` = `details`.`id`";
                $result = $conn->query($q0);
                if($result){
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<tr><td>'.$serial.'</td><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['govt_id'].'</td><td>'.$row['trade'].'</td><td>'.$row['father_name'].'</td><td>'.$row['dob'].'</td><td>'.$row['date'].'</td><td>'.$row['Day'].'</td><td>'.$row['shift'].'</td><td>'.$row['time_in'].'</td><td>'.$row['edate'].'</td><td>'.$row['time_out'].'</td><td>';
                            $serial=$serial+1;
                        }
                    } else {
                        echo "No Data Found";
                    }
                }else{
                    echo 'result not processed';
                }
                ?>
                </table>
            </div>

        </div>

    </body>
    <footer>

    </footer>
</html>