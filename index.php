<?php
require 'dbh.php';
require 'index.html';
date_default_timezone_set('Asia/Kolkata');
        $day = date('l');
        $time = date('h:i');
        $min = date('i');
        $pdate = date('Y-m-d');
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="menu sidebar" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="menubar-con">
            <input type="submit" name="logout" value="supply_chain_tracker">
            <input type="submit" name="logout" value="weekly_progress">
            <input type="submit" name="logout" value="critical_issues">
            <input type="submit" name="logout" value="Drawing_Register">
            <input type="submit" name="logout" value="Material_Requisition&Delivery">
            <input type="submit" name="logout" value="Technical_Submittal">
        </div>
        
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
    </div>
    <div class="cont">
        <div class="table-head">
            <table>
            <tr>
            <label >SUPPLY CHAIN TRACKER - TO BE UPDATED BY PROCUREMENT</label>
            </tr>
            <tr>
                <th colspan="4">DETAILS AS PER BOQ & NON TENDERED ITEMS</th>
                <th colspan="5">DETAILS AS PER BOQ & NON TENDERED ITEMS</th>
                <th colspan="8">DETAILS AS PER BOQ & NON TENDERED ITEMS</th>
            </tr>
            <tr>
                <th>Sr NO</th>
                <th>BOQ NO</th>
                <th>BREIF DESCRIPTION</th>
                <th>MAKE/MODEL</th>
                <th>QTY</th>
                <th>UNIT</th>
                <th>DATE OF SUBMISSION</th>
                <th>LEAD TIME</th>
                <th>DELIVERY REQUIRED AS PER PROJECT SCHEDULE</th>
                <th>MAKE/MODEL APPROVED</th>
                <th>ANY COST IMPACT DUE TO CHANGE IN MAKE ?</th>
                <th>DATE OF APPROVAL</th>
                <th>PO NO.</th>
                <th>PO DATE</th>
                <th>DATE OF DELIVERY AS PER PO</th>
                <th>ACTUAL DATE OF DELIVERY</th>
                <th>REMARKS</th>
            </tr>
        </div>
            <?php
                $serial = 1;
                $q0 ="SELECT * FROM `workers`, `details` WHERE `workers`.`id` = `details`.`id`";
                $result = $conn->query($q0);
                if($result){
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>
                            <td>'.$serial.'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['govt_id'].'</td>
                            <td>'.$serial.'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['govt_id'].'</td>
                            <td>'.$serial.'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['govt_id'].'</td>
                            <td>'.$row['govt_id'].'</td>
                            <td>'.$serial.'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['govt_id'].'</td>
                            </tr>';
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
        
        <div class="trans-back" id="idback">
        </div>
        <div class="con-form" id='idcform'>
        <button class="bclose" id="idclose" onclick= bclose()>X</button>
                <form action="submitted.php" method="post">
                <p><h1>ENTRY</h1></p>
                <p>
                    <label> ID : </label>
                    <input type="text" name="id">
                </p>
                <p>
                    <label> DATE : </label>
                    <input type="date" name="date" value="<?php echo $pdate; ?>">
                </p>
                <p>
                    <label> TIME : </label>
                    <input type="time" name="time" value="<?php echo $time; ?>">
                </p>
                <p>
                    <button type="submit" name="butent">SUBMIT</button>
                </p>
            </form>
            </div>
        <div class="con-form" id="exidform">
            <button class="bclose" id="idclose" onclick= bclose()>X</button>
            <form action="ext.php" method="post">
                <p><h1>LABOUR EXITING </h1></p>
                <p>
                    <label> ID : </label>
                    <input type="text" name="lids">
                </p>
                <p>
                    <label> DATE : </label>
                    <input type="date" name="exdate" value="<?php echo $pdate; ?>">
                </p>
                <p>
                    <label> TIME : </label>
                    <input type="time" name="extin" value="<?php echo $time; ?>">
                </p>
                <p>
                    <button type="submit" name="butex">SUBMIT</button>
                </p>
            </form>
            </div>
        <div class="con-form" id="newidform">
            <button class="bclose" id="idclose" onclick= bclose()>X</button>
            <form action="submit.php" method="post">
            <p>
                <label> <h1>NEW USER DATA</h1></label>
                <hr>
            </p>
            <p><label>NAME</label>
            <input type="text" name="lname" value="">
            </p>
            <p><label>TRADE</label>
            <input type="text" name="ltrade" value="">
            </p>
            <p><label>FATHER NAME</label>
            <input type="text" name="lfname" value="">
            </p>
            <p><label>D.O.B</label>
            <input type="date" name="ldob" value="">
            </p>
            <p><label>ID NO</label>
            <input type="text" name="lid" value="">
            </p>
            <p><label>GOVERNMENT ID</label>
            <input type="text" name="lgovid" value="">
            </p>
            <p><label>Details for day : </label>
            <input type="text" name="day" value=<?php echo $day;?>>
            </p> 
            <p><label>Date : </label>
            <input type="date" name="date" value=<?php echo $pdate;?>>
            </p>
            <p><label>Entrance Time</label>
            <input type="time" name="time" value=<?php echo $time;?>>
            </p>
            <p><label>Shift</label>
            <input type="text" name="shift" value="D">
            </p>
            <p>
            <button type="submit" name="butsub">SUBMIT</button>
            </p>
        </form>
        </div>
    </body>
    <footer>

    </footer>
    <script src="javascript.js"></script>
</html>