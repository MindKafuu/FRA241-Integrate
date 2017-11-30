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
    <link rel="stylesheet" type="text/css" href="css/admin3-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-2.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-3.css">


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
  <body onload="hidet()">
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br><br>
        </header>
        <form action="test.php" method="post">
        <div style="margin-top: -94px; margin-left:87.7%">
        <a href="index.php" class="btn"><b>?</b></a>
        <a href="index.php" class="btn"><b>Log out</b></a>
    </div>
    <div style="margin-top: 20px; margin-left:33.3%">
        <a href="admin1.php" class="btn1"><b>Home</b></a>
        <a href="admin2.php" class="btn1"><b>User Info</b></a>
        <a href="admin3.php" class="btn1"style=" color: #79a2ff"><b>Class Info</b></a>
        <a href="admin4.php" class="btn1"><b>Class Management</b></a>
        <a href="admin5.php" class="btn1"><b>Summary</b></a>
        <a href="admin6.php" class="btn1"><b>User status</b></a>
        <a href="admin7.php" class="btn1"><b>Complete</b></a>
    </div>
    <div style="margin-top:25px;">
        <br><b class="topics">Class Information</b><br><br><br>
        <a href="admin3.php" class="btn2"style="background-color:#79a2ff"><b>Bachelor's degree</b></a><br><br>
        <a href="admin3-M.php" class="btn2"><b>Master's degree</b></a><br><br>
        <a href="admin3-D.php" class="btn2"><b>Doctor's degree</b></a><br><br>
    </div>
    <!--//////////////////////////////////////subject code///////////////////////////////////////////////-->
    <div style="margin-top: -200px; margin-left: 400px">
        <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Subject Code </b>
        <input name="code" type="text" class="whitetab" style= "margin-left: 25px; margin-top:22px" require>
    </div>
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
    <br>
    <br>
    <!--/////////////////////////////////////subject name////////////////////////////////////////////////-->
    <div style="margin-left: 400px">
        <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Subject name  </b>
        <input type="text" name="subject_name"  class="whitetab" style= "margin-left: 20px" require>
    </div>
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
    <br>
    <br>
    <!--/////////////////////////////////////////////year////////////////////////////////////////////////-->
    <div style="margin-left: 400px">
        <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Year  </b>
        <select name="year" class="year">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
    <br>
    <br>
    <!--/////////////////////////////////////////////lecturer////////////////////////////////////////////-->
    <div style="margin-left: 400px">
        <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Lecturer  </b>
        <button name="send" type="submit" style="margin-left: 620px ; margin-top:-33px"class = "button5"> + </button>
        <?php  
            $count = 0;
            if(empty($_POST['code']) && empty($_POST['subject_name'])) {
                if(isset($_POST['send'])) {
                    $count++;
                    $_SESSION['mm'] = $_SESSION['mm'] + $count;
                    
                }
                else {
                    subject_code();
                }
            }
            function subject_code () {
                require 'dbconfig/config.php';
                $sql = "SELECT * FROM table_account";
                $result = mysqli_query($con,$sql);
                echo "<div style='margin-top:-40px; margin-left:150px;'>";
                echo "<select name='lecturer' class='lecturer'>";
                echo "<option>General Teacher</option>";
                while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['teacher_name'] ."'>" . $row['teacher_name'] ."</option>";
                }
                echo "</select>";
                echo "</div>";  
            }
        ?>
    </div>
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
    <br>
    <br>
    <!--////////////////////////////////////////////////hours/week///////////////////////////////////////-->
    <div style="margin-left: 400px">
        <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Hours/week  </b>
        <select name="hour-week" class="year1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="4">5</option>
            <option value="4">6</option>
            <option value="4">7</option>
            <option value="4">8</option>
        </select>
    </div>
    <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
    </form>
  </body>
</html>