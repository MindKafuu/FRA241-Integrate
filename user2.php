<?php
    session_start();
    require 'dbconfig/config.php';

     if(isset($_POST['ok'])){
       $teacher_name  = $_POST['lecturer'];
       $time = $_POST['Week'];
       foreach ($time as $value) {
                 $sql ="SELECT * FROM table_teacher";
                 $smyData = mysqli_query($con,$sql);
               while($row = $smyData->fetch_assoc()) {
                   $count = $row['No'] + 1 ;
                   }
                   list($teacher_unavailable_day,$teacher_unavailable_time) = explode("/",$value);
                   $query = "INSERT INTO  table_teacher(No,teacher_name,
                     teacher_unavailable_day,teacher_unavailable_time)
              VALUES ('$count',' $teacher_name','$teacher_unavailable_day','$teacher_unavailable_time')";
                   $query_run = mysqli_query($con,$query); 
            }
            header('location:user2.php');

    }

?>
<!DOCTYPE html>
<html>
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/user1.css">
    <link rel="stylesheet" type="text/css" href="css/user2.css">
    <link rel="stylesheet" type="text/css" href="css/user2-1.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <!--javascript-->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <title>Classroom Schedule</title>
  </head>
  <script>
    function green(){
        window.location="index.php"
    }
  </script>
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
    <form action="user2.php" method="POST">
    <header>
    <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
    <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
    <b>Classroom Schedule</b>
    </div><br><br>
    </header>
    <form action="admin2.php" method="post">

    <div style="margin-top: -94px; margin-left:87.7%">
    <a href="index.php" class="btn"><b>?</b></a>
    <button onclick="green()" name="logout" class="btn"><b>logout</b></button>
</div>

<div style="margin-top: 20px; margin-left:60.3%">
    <a href="user1.php" class="btn1"><b>Profile</b></a>
    <a href="user2.php" class="btn1" style=" color: #79a2ff"><b>Inconvenient Time</b></a>
    <a href="user3.php" class="btn1"><b>Classroom</b></a>
    <a href="user4.php" class="btn1"><b>Schedule</b></a>
</div>

<div style="margin-top: 25px;">
        <br><b class="topics">Inconvenient Time</b><br><br>
</div>
<div style="margin-top:-40px;margin-left:500px" >
    <b>Teacher:</b>
    </div>
    <div style="margin-top:-25px;margin-left:590px" >
    <?php  $sql = "SELECT * FROM table_account";
      $result = mysqli_query($con,$sql);
      echo "<div style='margin-top:-10px; margin-left:-20px;'>";
      echo "<select name='lecturer' class='whitetab'>";
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['teacher_name'] ."'>" . $row['teacher_name'] ."</option>";
      }
      echo "</select>";
      echo "</div>";  ?></div>
<!--///////////////////////////////CHECK BOX KNIGHT//////////////////////////////////-->
    <div style="margin-top:50px;margin-left:150px;">
    <table>
        <tr>
            <th class="headbox">Date/Time</th>
            <th class="headbox">08.30-09.20</th>
            <th class="headbox">09.30-10.20</th>
            <th class="headbox">10.30-11.20</th>
            <th class="headbox">11.30-12.20</th>
            <th class="headbox">12.30-13.20</th>
            <th class="headbox">13.30-14.20</th>
            <th class="headbox">14.30-15.20</th>
            <th class="headbox">15.30-16.20</th>
            <th class="headbox">16.30-17.20</th>
            <th class="headbox">17.30-18.20</th>
        </tr>

        <tr> <!-- monday -->
            <td class="headbox"><b>Monday</b></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/0"checked>
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/1">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/2">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/3">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/4">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/5">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/6">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/7">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/8">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="0/9">
            <span class="checkmark"></span>
            </lable></td>
        </tr><!--Tuesday-->
        <tr>
            <td class="headbox"><b>Tuesday</b></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/0">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/1">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/2">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/3">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/4">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/5">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/6">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/7">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/8">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="1/9">
            <span class="checkmark"></span>
            </lable></td>
            </tr><!--Wednesday-->

        <tr>
            <td class="headbox"><b>Wednesday</b></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/0">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/1">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/2">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/3">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/4">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/5">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/6">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/7">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/8">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="2/9">
            <span class="checkmark"></span>
            </lable></td>
        </tr><!--3-->

        <tr>

            <td class="headbox"><b>Thursday</b></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/0">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/1">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/2">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/3">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/4">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/5">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/6">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/7">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="vehicle" value="3/8">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="3/9">
            <span class="checkmark"></span>
            </lable></td>
        </tr><!--Friday-->
        <tr>
            <td class="headbox"><b>Friday</b></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/0">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/1">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/2">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/3">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/4">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/5">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/6">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/7">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/8">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="4/9">
            <span class="checkmark"></span>
            </lable></td>
        </tr><!--5-->
        <tr>
            <td class="headbox"><b>Saturday</b></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/0">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/1">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/2">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/3">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/4">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/5">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/6">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/7">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/8">
            <span class="checkmark"></span>
            </lable></td>

            <td><label class="container">
            <input class="container" type="checkbox" name="Week[]" value="5/9">
            <span class="checkmark"></span>
            </lable></td>
        </tr><!--6-->
    </table>
    </div>



<!--///////////////////////////////CHECK BOX KNIGHT//////////////////////////////////-->

        <div style ="margin-left:1150px;margin-top:20px;font-family:'Work Sans', sans-serif">
        <button name="ok" class = "buttonsave" type="button"><b class="contents">save</b></button>
        </div>

    </form>
    <script>
        $('.b-tn').click(function() {
            $(this).addClass("b-tn-click");
        });
        $('.b-tn2').click(function() {
            $(this).addClass("b-tn2-click");
        });
    </script>
  </form>
  </body>
</html>
<?php
    if(isset($_POST['logout']))
        {
            session_destroy();
        }
?>
