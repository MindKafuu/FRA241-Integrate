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
  <script>
    function greeds(){
        var x = document.getElementById("mimi").value;
        var gr = "<p>"+ x +"</p>"
        document.getElementById("greed").innerHTML = gr;
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
            <?php  $sql = "SELECT * FROM table_account";
                $mind = '';
                $result = mysqli_query($con,$sql);
                echo "<form action='test.php' method='post'>";
                echo "<div style='margin-top:-10px; margin-left:-20px;'>";
                echo "<select name='lecturer'>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<option id='mimi' name='" . $row['teacher_name'] ."'>" . $row['teacher_name'] ."</option>";
                    
                    echo "<br>";
                    $mind = $row['teacher_name'];
                }
                echo "</select>";
                echo "<button onclick='greed()' name='mind' type='submit'>Submit</button>";
            
                echo "</div>";  
                
                echo "</form>";
                


            ?>
            <div id='greed' ></div>
            
        </div>
    </body>
</html>
