<?php
      require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    
    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>
    
    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/admin7-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin7-2.css">
    
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <style>
  body {
  background-color: #ececec;
  color: #ff6c00 ;
  font-family: 'Work Sans', sans-serif;
  font-size: 1em;
  text-align: left;}
  header {
     background: #ff6c00 none repeat-x 0 0;
     color: #FFFFFF;
     margin-top: 0px;
     padding: 0 5px;
     text-align: left;}
</style>
<body>
  <header>
      <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
      <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
      <b>Classroom Schedule</b>
      </div><br><br>
      </header>
      <div style="margin-top: -94px; margin-left:87.7%">
          <a href="index.php" class="btn"><b>?</b></a>
          <a href="index.php" class="btn"><b>Log out</b></a>
      </div>
      <div style="margin-top: 20px; margin-left:33.3%">
          <a href="admin1.php" class="btn1"><b>Home</b></a>
          <a href="admin2.php" class="btn1"><b>User Info</b></a>
          <a href="admin3.php" class="btn1"><b>Class Info</b></a>
          <a href="admin4.php" class="btn1"><b>Class Management</b></a>
          <a href="admin5.php" class="btn1"><b>Summary</b></a>
          <a href="admin6.php" class="btn1"><b>User status</b></a>
          <a href="admin7.php" class="btn1"style=" color: #79a2ff"><b>Complete</b></a>
      </div>
      <div style="margin-top: 25px;">
          <br><b class="topics">Complete Schedule</b>
      </div><br><br>
        <ul id="navbar">
                <li><a href="admin7.php"style ="
                    background-color:#ff6d00;"><b>ALL Schedule</b></a>
                    
                <li><a href="admin7-1.php" style ="background: url(images/arrow.png); 
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ff6d00"><b>Years Schedule</b></a>
                    <ul class="item">
                            <li><a href="#" style ="background: url(images/rightarrow.png); 
                                background-repeat: no-repeat; 
                                background-size: 15px;
                                background-position: right center;
                                background-color:#ff6d00"><b>Bachelor</b> </a>
                                <ul class="sub-item" style="margin-left:1px;margin-top:1px">
                                    <li><a href="admin7-b1.php">1</a></li>
                                    <li><a href="admin7-b2.php">2</a></li>
                                    <li><a href="admin7-b3.php">3</a></li>
                                    <li><a href="admin7-b4.php">4</a></li>
                                </ul>
                            </li>
                            <li><a href="#" style ="background: url(images/rightarrow.png); 
                                background-repeat: no-repeat; 
                                background-size: 15px;
                                background-position: right center;
                                background-color:#ff6d00"><b>Master</b></a>
                                <ul class="sub-item" style="margin-left:1px;margin-top:1px">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#" style ="background: url(images/rightarrow.png); 
                                background-repeat: no-repeat; 
                                background-size: 15px;
                                background-position: right center;
                                background-color:#ff6d00"><b>phD</b></a>
                                <ul class="sub-item" style="margin-left:1px;margin-top:1px">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </li>
                        </ul>
                </li>
                <li><a href="admin7-2.php"style ="
                    background-repeat: no-repeat; 
                    background-size: 25px;
                    background-position: right center;
                    background-color:#ff6d00;
                    margin-top : -0.5px"><b>Name list</b></a>
                    
                </li>
            </ul>
</div></br></br>
        <div  style="margin-top: -300px; margin-left: 320px" class="show">
        <h1>First Year Sec A</h1>
        <table>
            <tr class="head">
                <th rowspan="2">
                    Day
                </th>
                <th colspan="10">
                    Time
                </th>

            </tr>
            <tr  class="head-time">
                <th>
                    08.30-09.30
                </th>
                <th>
                    09.30-10.30
                </th>
                <th>
                    10.30-11.30
                </th>
                <th>
                    11.30-12.30
                </th>
                <th>
                    12.30-13.30
                </th>
                <th>
                    13.30-14.30
                </th>
                <th>
                    14.30-15.30
                </th>
                <th>
                    15.30-16.30
                </th>
                <th>
                    16.30-17.30
                </th>
                <th>
                    17.30-18.30
                </th>
            </tr>
            
            <tr>
                <td rowspan='1'; style='background-color: yellow'>Monday</td>
                    <?php
                       ////
                    ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan='1'; style='background-color: pink' >Tuesday</td>
                    <?php
                        ////
                    ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan='1'; style='background-color: green' >Wedenday</td>
                    <?php
                        ////
                    ?>
                    </td>
                </tr>
                <tr>
                    <td rowspan='1'; style='background-color: orange' >Thursday</td>
                    <?php
                        ////
                    ?>
                    </td>
            </tr>
            <tr>
                <td rowspan='1'; style='background-color: blue' > Friday</td>
                <?php
                    ////
                ?>
                </td>
            </tr>
            <tr>
                <td rowspan='1'; style='background-color: blue' >Satruday</td>
                <?php
                    ///
                ?>
                </td>
           </tr>
        </table>
    </body>
</html>
<?php
    function createTable($year, $sec, $day) {
        require 'dbconfig/config.php';
        
        $count = 0;
        $check1 = 0;
        $check2 = 0;
        $check3 = 0;
        $total = 0;

        $run = "SELECT * FROM `table_subject_description_output` ORDER BY `table_subject_description_output`.`start_time` ASC";
        $smyData = mysqli_query($con, $run);

        while($row = mysqli_fetch_array($smyData)) {
            $hour = (int)$row['subject_hour_per_day'];
            $time = (int)$row['start_time'];
            if($row['subject_level'] == $year ) {
                if($row['subject_sec'] == $sec || $row['subject_sec'] == "AB") {
                    if($row['Day'] == $day){
                        if($time == 99) {
                            echo "<td style='background-color: wheat;' colspan='10'></td>";
                        }
                        else if($time >= 0) {
                            $count = $count + 1;
                            if($count == 1) {
                                if($time == 0) {
                                    echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                    $check1 = $check1 + $hour;
                                }
                                else if($time > 0) {
                                    echo "<td style='background-color: wheat;' colspan='$time'></td>";
                                    echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                    $check1 = $check1 + $time + $hour;
                                }
                            }
                            else if($count == 2) {
                                $sum = abs($check1 - 1);
                                if($time == 1) {
                                    if(abs($check1 - 1) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + abs($check1 - 1);
                                    }
                                }
                                else if($time == 2) {
                                    $sum = abs($check1 - 2);
                                    if(abs($check1 - 2) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 3) {
                                    $sum = abs($check1 - 3);
                                    if(abs($check1 - 3) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 4) {
                                    $sum = abs($check1 - 4);
                                    if(abs($check1 - 4) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 5) {
                                    $sum = abs($check1 - 5);
                                    if(abs($check1 - 5) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 6) {
                                    $sum = abs($check1 - 6);
                                    if(abs($check1 - 6) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 7) {
                                    $sum = abs($check1 - 7);
                                    if(abs($check1 - 7) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 8) {
                                    $sum = abs($check1 - 8);
                                    if(abs($check1 - 8) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                                else if($time == 9) {
                                    $sum = abs($check1 - 9);
                                    if(abs($check1 - 9) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check2 = $check1 + $hour + $sum;
                                    }
                                }
                            }
                            else if($count == 3) {
                                if($time == 1) {
                                    $sum = abs($check2 - 1);
                                    if(abs($check2 - 1) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 2) {
                                    $sum = abs($check2 - 2);
                                    if(abs($check2 - 2) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 3) {
                                    $sum = abs($check2 - 3);
                                    if(abs($check2 - 3) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 4) {
                                    $sum = abs($check2 - 4);
                                    if(abs($check2 - 4) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 5) {
                                    $sum = abs($check2 - 5);
                                    if(abs($check2 - 5) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 6) {
                                    $sum = abs($check2 - 6);
                                    if(abs($check2 - 6) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 7) {
                                    $sum = abs($check2 - 7);
                                    if(abs($check2 - 7) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 8) {
                                    $sum = abs($check2 - 8);
                                    if(abs($check2 - 8) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                                else if($time == 9) {
                                    $sum = abs($check2 - 9);
                                    if(abs($check2 - 9) == 0) {
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                    else {
                                        echo "<td style='background-color: wheat;' colspan='$sum'></td>";
                                        echo "<td style='background-color: #00FA9A' colspan='$hour'>" . $row['subject_code'] . "</td>";
                                        $check3 = $check2 + $hour + $sum;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        $total = $check3;
        $total = 10 - $total;
        if($total != 0) {
            echo "<td style='background-color: wheat;' colspan='10-$total'></td>";
        }
    }
?>