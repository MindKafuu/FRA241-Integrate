<?php
      require 'dbconfig/config.php';
      session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>
    <title>Classroom Schedule</title>
    <link rel="stylesheet" type="text/css" href="css/user1.css">
    <link rel="stylesheet" type="text/css" href="css/user1-1.css">
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">
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
    <button onclick="green()" name="logout" class="btn"><b>Log out</b></button>
</div>
<div style="margin-top: 20px; margin-left:60.3%">
    <a href="user1.php" class="btn1"  style=" color: #79a2ff"><b>Profile</b></a>
    <a href="user2.php" class="btn1"><b>Inconvenient Time</b></a>
    <a href="user3.php" class="btn1"><b>Classroom</b></a>
    <a href="user4.php" class="btn1"><b>Schedule</b></a>
</div>
    <div style="margin-top: 25px;">
        <br><b class="topics">Profile</b><br><br>
    </div>
            
        </div>
        <?php
            $allsubject = "SELECT * FROM table_account";
            $smyData2 = mysqli_query($con, $allsubject);
            $save = "";
            while($row = mysqli_fetch_array($smyData2)){
                if($row['teacher_email'] == $_SESSION['username']) {
                    echo"<div style= 'margin-top: -40px; margin-left: 200px'>";
                    echo "<img class='mind1' src='images/man.png'>";
                    echo "<div style='margin-top:-350px; margin-left:500px; font-size:26px'class='statuskru'>";
                    echo "<p style='margin-top:-120px class='mind'> <b> Name: ".$row['teacher_name']."</b></p><br>";
                    echo "<p style='margin-top:-10px; margin-left:450px class='mind'> <b>Email: ".$row["teacher_email"]."</b></p><br>";
                    echo "<p style='margin-top:-10px; margin-left:450px class='mind'> <b>Password: ".$row["teacher_password"]."</b></p><br>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                    echo "<br>";
                }
            }
        ?>            

</body>
</html>
<?php
    if(isset($_POST['logout']))
        {
            session_destroy();
            echo '<script>window.location="index.php" </script> ';
        }
?>