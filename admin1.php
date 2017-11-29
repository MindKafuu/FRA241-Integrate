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
    <link rel="stylesheet" type="text/css" href="css/admin1.css">
  

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
            <a href="admin1.php" class="btn1" style=" color: #79a2ff"><b>Home</b></a>
            <a href="admin2.php" class="btn1"><b>User Info</b></a>
            <a href="admin3.php" class="btn1"><b>Class Info</b></a>
            <a href="admin4.php" class="btn1"><b>Class Management</b></a>
            <a href="admin5.php" class="btn1"><b>Summary</b></a>
            <a href="admin6.php" class="btn1"><b>User status</b></a>
            <a href="admin7.php" class="btn1"><b>Complete</b></a>
        </div>
        <div style="margin-top: 25px;">
            <br><b class="topics">Home</b>
        </div>
        <?php
                $allsubject = "SELECT DISTINCT subject_code AS Subjects FROM table_teacher_subject 
                				ORDER BY `table_teacher_subject`.`subject_code` ASC";
                $data = "SELECT * FROM `table_teacher_subject` 
                			ORDER BY `table_teacher_subject`.`subject_code` ASC";
                $description = "SELECT DISTINCT subject_code AS subjects_input FROM `table_subject_description_input` 
                				ORDER BY `table_subject_description_input`.`subject_code` ASC";
                
                $sub_code = mysqli_query($con, $allsubject);
                while($row = mysqli_fetch_array($sub_code)){
                    $status = "0";
                    $check = $row['Subjects'];
                    echo "<div style='margin-top:0px; margin-left:450px'class='statuskru'>";
                    echo "<p class='text-head'> <b>".$row["Subjects"]."</b></p><br>";

                    $sub_des = mysqli_query($con, $description);
                    while($row = mysqli_fetch_array($sub_des)) {
                    	if($check == $row['subjects_input']){
                    		$status = "1";
                    		break;
                    	}
                    }
                    $sub_data = mysqli_query($con, $data);
                    while($row = mysqli_fetch_array($sub_data)) {
                        if($check == $row['subject_code'])
                        {
                            echo "<p class='text'>".$row['teacher_name']."</p><br>";
                        }
                    }
                    if ($status == "1"){
                    	echo "<img src='images/tick.png' width='120' height='90'>";
                    }
                    else if($status == "0"){
                    	echo "<img src='images/x.png' width='40' height='60' style='margin-left: 460px'>";
                    }
                    echo "</div>";
                    echo "<br>";
                    echo "<br>";
                }
                    echo "<br>";
            ?>            
        <div style="margin-top:-575px;margin-left:890px">
            <i class="fa fa-close" style="font-size:48px;color:red"></i>
            <br><br><br><br><br><br><br><br><br><br>
            <i class="fa fa-close" style="font-size:48px;color:red"></i>
            <br><br><br><br><br><br><br><br><br><br>
            <i class="fa fa-check-square" style="font-size:48px;color:green"></i>
        </div>
  </body>
</html>