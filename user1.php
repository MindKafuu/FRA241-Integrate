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
    <header>
        <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
        <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
        <b>Classroom Schedule</b>
        </div><br>
        </header>
        <div style="text-align: right; margin-top: -30px; margin-right: 600px">
            <a href="user1.php" class="btn1"><b>Profile</b></a>
            <a href="user2.php" class="btn1"><b>Inconvenient time</b></a>
            <a href="user3.php" class="btn1"><b>Schedule</b></a>
            <a href="user4.php" class="btn1"><b>Classroom</b></a>
            
        </div>
        <div style="text-align: right; margin-top: -84px; margin-right: 20px">
            <button onclick="green()" name="logout" class="btn"><b>logout</b></button>
        </div>
        <?php
            $allsubject = "SELECT DISTINCT subject_code AS Subjects FROM table_teacher_subject";
            $sql = "SELECT table_account.teacher_email, table_teacher_subject.teacher_name, table_teacher_subject.subject_code, table_account.teacher_password
            FROM table_account
            INNER JOIN table_teacher_subject ON table_teacher_subject.teacher_name=table_account.teacher_name;";
            $smyData = mysqli_query($con, $sql);
            $smyData2 = mysqli_query($con, $allsubject);
            $save = "";
            while($row = mysqli_fetch_array($smyData)){
                if($row['teacher_email'] == $_SESSION['username']) {
                    echo "<div style='margin-top:200px; margin-left:450px'class='statuskru'>";
                    echo "<img class='mind1' src='images/profile.png'>";
                    echo "<p class='mind'> <b>".$row["teacher_name"]."</b></p><br>";
                    echo "<p class='mind'> <b>".$row["teacher_email"]."</b></p><br>";
                    echo "<p class='mind'> <b>".$row["teacher_password"]."</b></p><br>";
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