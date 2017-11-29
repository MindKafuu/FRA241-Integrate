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
    <link rel="stylesheet" type="text/css" href="css/admin3-1.css">
    <link rel="stylesheet" type="text/css" href="css/admin3-2.css">
    <link rel="stylesheet" type="text/css" href="page3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="ddstyle.css">
    <link rel="stylesheet" type="text/css" href="theme.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>
  </head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
        $("q").hide();
        
        
        $("#hide").click(function(){
            $("q").hide();
            $("g").hide();
    });
        $("#show").click(function(){
            $("q").show();
            $("g").show();
    });
        
        $("#hide1").click(function(){
            $("q1").hide();
            $("g").hide();
    });
        $("#show1").click(function(){
            $("q1").show();
            $("g").show();
    });
        $("g").hide();
        $("#hide2").click(function(){
            $("q").hide();
            $("q1").hide();
            $("g").hide();
    });
    });
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
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br><br>
        </header>
        <form action="admin2.php" method="post">
        <div style="margin-top: -94px; margin-left:87.7%">
        <a href="index.php" class="btn"><b>?</b></a>
        <a href="index.php" class="btn"><b>Log out</b></a>
    </div>
    <div style="margin-top: 20px; margin-left:33.3%">
        <a href="admin1.php" class="btn1"><b>Home</b></a>
        <a href="admin2.php" class="btn1"><b>User Info</b></a>
        <a href="admin3.php" class="btn1"><b>Class Info</b></a>
        <a href="admin4.php" class="btn1"><b>Class Management</b></a>
        <a href="admin5.php" class="btn1" style=" color: #79a2ff"><b>Summary</b></a>
        <a href="admin6.php" class="btn1"><b>User status</b></a>
        <a href="admin7.php" class="btn1"><b>Complete</b></a>
    </div>
        <div style="margin-top: 25px;">
            <br><b class="topics">User Informatiom</b><br><br>
        </div>
        <a href="#" id="show"  style=" margin-left:1000px ; margin-top: -50px " class = "button4"  >
        <span class = "content"><b>+Add User</b></span></a>
<!-- ปุ่มsave-->
        <q><button id ="hide" name="save_account" style=" margin-left:1050px ; margin-top:60px " class = "buttonsave">
                <span class = "content"><b>save</b></span>
        </button>
<!-- link data base -->
        <center>
        <div  style='margin-top:-85px; margin-left:100px;border-radius: 6px; background-color:white; height:205px ; width: 550px'>

                <b style =" margin-left:70px;margin-top:40px; font-family: 'Work Sans', sans-serif; font-size: 16px ">Name</b>
                <input style ="width:350px; height:23px; margin-top:40px; margin-left:55px" name="name" type="text" placeholder="Name"><!-- link data base -->
                <br>

                <img src='images/user.png' ALIGN = "MIDDLE" width="60" height="70" >

                <b style ="font-family: 'Work Sans', sans-serif; font-size: 16px" >Username</b>
                <input style ="width:350px; height:23px; margin-left:25px" name="username" type="text" placeholder="E-mail"><!-- link data base -->
                <br>
                <b style ="margin-left:70px; font-family: 'Work Sans', sans-serif; font-size: 16px ">Password</b>
                <input style ="width:350px; height:23px; margin-left:25px" name="password" type="text" placeholder="Password"><!-- link data base -->
        </div>
        
        </center>
        <br>
        </q>


        <div style="margin-top: 25px;"><br><br>
        </div>
        <a href="#" id="show1"  style=" margin-left:1000px ; margin-top: -50px " class = "button4"  >
        <span class = "content"><b>-Remove</b></span></a>
<!-- ปุ่มsave-->
        <q1><button id ="hide1" name="remove_account" style=" margin-left:1050px ; margin-top:60px " class = "buttonsave">
                <span class = "content"><b>remove</b></span>
        </button>
<!-- link data base -->
        <center>
        <div  style='margin-top:-85px; margin-left:100px;border-radius: 6px; background-color:white; height:135px ; width: 550px'>
                <br>
                <br>
                <img src='images/user.png' ALIGN = "MIDDLE" width="60" height="70">
                <b style =" margin-left:10px; font-family: 'Work Sans', sans-serif; font-size: 16px ">No</b>
                <input style ="width:350px; height:23px; margin-top:5px; margin-left:55px" name="No" type="text" placeholder="No"><!-- link data base -->
                
        </div>
        
        </center>
        <br>
        </q1>
        <g><button id ="hide2" style=" margin-left:1200px ; margin-top:10px " class = "buttonsave">
                <span class = "content"><b>cancel</b></span>
                </button>
        </g>


        <?php
                $sql = "SELECT * FROM table_account";
                $smyData = mysqli_query($con, $sql);
                $save = "";
                while($row = mysqli_fetch_array($smyData)){
                    echo "<div style='margin-top:0px; margin-left:450px'class='statuskru'>";
                    echo "<p class='text-head'><b> No: </b>".$row["No"]."</p><br>";
                    echo "<p class='text'><b> Name: </b>".$row["teacher_name"]."</p><br>";
                    echo "<p class='text'><b>Email: </b>".$row["teacher_email"]."</p><br>";
                    echo "<p class='text'><b>Password: </b>".$row["teacher_password"]."</p><br>";
                    echo "<img style='width: 28%; height: auto; margin-top: -107px; margin-left: 288px;' src='images/user.png'>";
                    echo "</div>";
                    echo "<br>";
                    echo "<br>";
                }
                // while($row = mysqli_fetch_array($smyData2)){
                //     $check = $row['Subjects'];
                //     echo "<div style='margin-top:0px; margin-left:450px'class='statuskru'>";
                //     echo "<p class='text-head'> <b>".$row["Subjects"]."</b></p><br>";
                //     if($save != "") {
                //         echo "<p class='text'>".$save."</p><br>";
                //     }
                //     while($row = mysqli_fetch_array($smyData)) {
                //         if($check == $row['subject_code'])
                //         {
                //             echo "<p class='text'>".$row['teacher_name']."</p><br>";
                //         }
                //         else if($check != $row['subject_code']) {
                //             $save = $row['teacher_name'];
                //             break;
                //         }
                //     }
                //     echo "<img src='images/tick.png'>";
                //     echo "</div>";
                //     echo "<br>";
                //     echo "<br>";
                // }
            ?>


        </div>

        <div style="margin-top:-575px;margin-left:890px">
            <i class="fa fa-close" style="font-size:48px;color:red"></i>
            <br><br><br><br><br><br><br><br><br><br>
            <i class="fa fa-close" style="font-size:48px;color:red"></i>
            <br><br><br><br><br><br><br><br><br><br>
            <i class="fa fa-check-square" style="font-size:48px;color:green"></i>

        </div>
      </form>
  </body>
</html>

<?php
    if(isset($_POST['save_account'])){
          $sql ="SELECT * FROM table_account";
          $smyData = mysqli_query($con,$sql);
        while($row = $smyData->fetch_assoc()) {
          $count = $row['No'] + 1 ;
          }
            $teacher_name      = $_POST['name'];
            $teacher_email     = $_POST['username'];
            $teacher_password  = $_POST['password'];
            $teacher_status = 'T';
        $query = "INSERT INTO table_account(No,teacher_name,teacher_email,teacher_password,teacher_status)
                  VALUES ('$count','$teacher_name','$teacher_email','$teacher_password','$teacher_status')";
        $query_run = mysqli_query($con,$query);
        echo '<script type="text/javascript"> alert("Input Account successful!") </script>';
    }
    if(isset($_POST['remove_account'])){
            $sql ="SELECT * FROM table_account";
            $smyData = mysqli_query($con,$sql);
            $No = $_POST['No'];
          $query = "DELETE FROM `table_account` WHERE `table_account`.`No` = $No";
          $query_run = mysqli_query($con,$query);
          echo '<script type="text/javascript"> alert("Remove Account successful!") </script>';
  }
?>