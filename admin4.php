<?php
  require 'dbconfig/config.php';
  /*  หน้า input Class Management ห้องเรียน ปัจจุบันรับค่าจาก textbox ได้
      ห้องcomputer ความจุ 40 เท่านั้น แต่เผื่ออนาคต 80 ได้ */
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
    <link rel="stylesheet" type="text/css" href="css/admin4-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin4-2.css">

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
  <body >
    <form action="admin4.php" method="post">
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
        <a href="admin4.php" class="btn1"style=" color: #79a2ff"><b>Room Management</b></a>
        <a href="admin5.php" class="btn1"><b>Summary</b></a>
        <a href="admin6.php" class="btn1"><b>User status</b></a>
        <a href="admin7.php" class="btn1"><b>Complete</b></a>
    </div>
        <div style="margin-top: 25px;">
            <br><b class="topics">Class Management</b><br><br>
            <a href="admin4.php" class="btn2" style="background-color:#79a2ff"><b>Computer room</b></a><br><br> <!--แก้ link-->
            <a href="admin4-2.php" class="btn2"><b>Studio room</b></a><br><br> <!--แก้ link-->
            <a href="admin4-1.php" class="btn2"><b>Classroom</b></a><br><br>    <!--แก้ link-->
        </div>
        <div style="margin-top: -200px; margin-left: 480px">

          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Computer(Code room):  </b>
            <br><br>
            <input class="whitetab" name="room_code" type="text" id="username"></input>&nbsp&nbsp&nbsp<b>Ex. FB306</b>
            <br><br>
          <b style="font-family: 'Work Sans', sans-serif; font-size: 24px">Capacity: </b>

        </div>


        <div style="margin-top:25px; margin-left:440px;">
        <select name="size">
        <option value="MENU" >Menu</option>
          <option value="40">40</option>
          <option value="80">80</option></b>
        </select>

        </div>
        <div style="margin-top:150px; margin-left:-520px">
        <button name="save_data" class = "buttonsave">
        <span class = "content"><b>save</b></span>
        </button>
        </div>
    </form>
  </body>
</html>
<?php
//////////////////////////////ROOM///////////////////////////////////////
    if(isset($_POST['save_data'])){
        $sql = "SELECT * FROM table_room";
        $smyData = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($smyData)) {
            $count = $row['No'] + 1 ;
            $room_code = $_POST['room_code'];
            $room_type  = 'classroom';
            $room_size  = $_POST['size'];
            $query = "INSERT INTO table_room(No,room_code,room_type,room_size) VALUES ('$count','$room_code','$room_type','$room_size')";
            $query_run = mysqli_query($con,$query);
            if($query_run){
                header('location:admin4.php');
                exit;
                break;
            }
        }
    }
?>