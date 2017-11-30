<?php
    session_start();
    require 'dbconfig/config.php';
    if(isset($_POST['save'])){
      $x = $_POST['subject_code'];
          $sql ="SELECT * FROM table_subject_description_input";
          $smyData = mysqli_query($con,$sql);
      while($row = $smyData->fetch_assoc()) {
          $count = $row['No'] + 1 ;
        }
        $result = mysqli_query($con,"SELECT * FROM table_subject_description_input_admin WHERE subject_code = '$x' ");
        while ($row = mysqli_fetch_assoc($result)) {
        $subject_level =  $row['subject_level'];
        $subject_code  = $row['subject_code'];
        $subject_name  = $row['subject_name'];
        $subject_hour_per_week  = $row['subject_hour_per_week'];
        $subject_spirt = $_POST['period'];
        $subject_sec_teacher_want	 =$_POST['SEC'];
        $subject_room = $_POST['room'];

        $query = "INSERT INTO table_subject_description_input(No,subject_level,subject_code,subject_name,subject_hour_per_week,subject_spirt,subject_sec_teacher_want,subject_room)
                    VALUES ('$count','$subject_level','$subject_code','$subject_name','$subject_hour_per_week','$subject_spirt','$subject_sec_teacher_want','$subject_room')";
          $query_run = mysqli_query($con,$query);

        break;

        }

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
    <link rel="stylesheet" type="text/css" href="css/user3-1.css">
    <link rel="stylesheet" type="text/css" href="css/user3-2.css">
    <link rel="stylesheet" type="text/css" href="css/user3-3.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <title>Classroom Schedule</title>

    <script>
            function myFunction(){
                var x = document.getElementById("mySelect").value;
                if(x=="AB"){
                  document.getElementById("roomAB").style.visibility="visible";
                    document.getElementById("roomA").style.visibility="hidden";
                    document.getElementById("roomB").style.visibility="hidden";
            }
                    if(x=="AA"){
                      document.getElementById("roomAB").style.visibility="hidden";
                        document.getElementById("roomA").style.visibility="visible";
                        document.getElementById("roomB").style.visibility="hidden";;
                }
                    if(x=="BB"){
                        document.getElementById("roomAB").style.visibility="hidden";
                        document.getElementById("roomA").style.visibility="hidden";
                        document.getElementById("roomB").style.visibility="visible";

                }

            }

            function hideA(){
                document.getElementById("#topic").style.visibility="hidden";//ไม่โชว์ให้เอาอันนี้ออก
                document.getElementById("#split").style.visibility="hidden";//ไม่โชว์ให้เอาอันนี้ออก
                //document.getElementById("roomA").style.visibility="hidden";
                //document.getElementById("roomB").style.visibility="hidden";
                
    }

             function labelfng(){
                
                document.getElementById("#topic").style.visibility="visible";
                document.getElementById("#split").style.visibility="visible";
               	var y = document.getElementById("labelfn").value;
                    if(y==1){
                        var green = "<select name='period' ><option value='1'>1</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==2){
                        var green = "<select name='period' ><option value='2'>2</option><option value='1/1'>1/1</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==3){
                        var green = "<select name='period' ><option value='3'>3</option><option value='1/2'>1/2</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==4){
                        var green = "<select name='period' ><option value='4'>4</option><option value='1/3'>1/3</option><option value='2/2'>2/2</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==5){
                        var green = "<select name='period' ><option value='5'>5</option><option value='1/4'>1/4</option><option value='2/3'>2/3</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==6){
                        var green = "<select name='period' ><option value='6'>6</option><option value='1/5'>1/5</option><option value='2/4'>2/4</option><option value='3/3'>3/3</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==7){
                        var green = "<select name='period' ><option value='7'>7</option><option value='1/6'>1/6</option><option value='2/5'>2/5</option><option value='3/4'>3/4</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    if(y==8){
                        var green = "<select name='period' ><option value='8'>8</option><option value='1/7'>1/7</option><option value='2/6'>2/6</option><option value='3/5'>3/5</option><option value='4/4'>4/4</option>";
                        document.getElementById("gB").innerHTML=green;
                    }
                    
             }
             function greed(){
                    window.location="index.php"
    }



    </script>
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
  <body onload="hideA()">
  <header>
  <img src="images/FIBO_logo.jpg" width="55" height="62" style="margin-top: 10px; margin-left: 10px">
      <div style="font-size: 1.8em; margin-top: -50px; margin-left: 80px">
          <b>Classroom Schedule</b>
      </div><br><br>
  </header>

  <form action="user3.php" method="post">
  <div style="margin-top: -94px; margin-left:87.7%">
  <a href="index.php" class="btn"><b>?</b></a>
  <button onclick="greed()" name="logout" class="btn"><b>Log out</b></button>
  </div>

  <div style="margin-top: 20px; margin-left:60.3%">
  <a href="user1.php" class="btn1"><b>Profile</b></a>
  <a href="user2.php" class="btn1"><b>Inconvenient Time</b></a>
  <a href="user3.php" class="btn1"style=" color: #79a2ff"><b>Classroom</b></a>
  <a href="user4.php" class="btn1"><b>Schedule</b></a>
  </div>
  
    <div style="margin-top: 25px;">
    <br><b class="topics">Classroom</b><br><br>
    </div>
      
        <div  style="margin-top:-20px; margin-left: 400px">
       <p  style =" font-family: 'Work Sans', sans-serif; font-size: 24px;"><b> Subject code  </b> </p><br><br>
        </div>
       <div id="topic" style="margin-top:20px; margin-left: 100px">
       <p style ="margin-top:3px; font-family: 'Work Sans', sans-serif; font-size: 24px"><b>  Subject name  </b></p><br>
       <p style ="margin-top:3px; font-family: 'Work Sans', sans-serif; font-size: 24px"><b>  Subject level  </b></p><br>
       <p style ="margin-top:5px; font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Lecturer </b></p><br>
        </div>
       <div  style="margin-top:-170px; margin-left: 800px">
       <p style ="margin-top:2px; font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Hour/week </b></p><br><br>
       <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Split period:   </b>   </p><br><br>
       <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px" id="gB"> <b> Sec:  </b> </p><br><br>
       <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Room:   </b>   </p>

      </div>
      </div>
      
      <div style="margin-top:-305px; margin-left:550px">
      <?php  $sql = "SELECT * FROM  table_subject_description_input_admin";
          $result = mysqli_query($con,$sql);
          echo "<select id='s' name='subject_code' class='subject_code'>";
          echo "<option>subject_code</option>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['subject_code'] ."'>" . $row['subject_code'] ."</option>";
            }
              echo "</select><br><br><br><br>";
              echo "";  ?>

              <script type="text/javascript">
                document.getElementById('s').value = "<?php echo $_POST['subject_code'];?>";
              </script>

          <div style="margin-top:-95px; margin-left:280px" class = "buttonchoose">
            <input style="font-size: 17px; font-family: 'Work Sans', sans-serif"  name="ok" type="submit" value="Enter" onclick="labelfng()">
          </div>
<?php
if(isset($_POST['ok'])){
  $x = $_POST["subject_code"];
$result = mysqli_query($con,"SELECT * FROM table_subject_description_input_admin WHERE subject_code = '$x' ");
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div style='margin-left:-260px;margin-top:65px;>";
  echo "<br><br><br>";
  echo "<b class='whitetab'><b>".$row['subject_name']."</b></b>";
  echo "<br>";
  break;
}

$result = mysqli_query($con,"SELECT * FROM table_subject_description_input_admin WHERE subject_code = '$x' ");
while ($row = mysqli_fetch_assoc($result)) {
  echo "<br>";
  echo "<p class='whitetab' type='hidden' name=''><b>". $row['subject_level'] ."</b></p>";
  echo "<br><br>";
  break;
}
$result = mysqli_query($con,"SELECT * FROM table_teacher_subject WHERE subject_code = '$x' ");
echo "<div class='statuskru'></div>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div class='name'>";
  echo "<b >".$row['teacher_name']."</b><br>";
  echo "<br></div>";
  //style='margin-bottom:50px;margin-left:20px
}

$result = mysqli_query($con,"SELECT * FROM table_subject_description_input_admin WHERE subject_code = '$x' ");
while ($row = mysqli_fetch_assoc($result)) {
  echo "<div style='margin-top:-404px; margin-left:680px'>";
  echo "<b>".$row['subject_hour_per_week']."</b>";
  echo "<br><br>";
  echo "<input type='hidden' id='labelfn' value='" . $row['subject_hour_per_week'] ."'>";
  echo "</div>";
  break;
}


}
?>

      </div><br><br>
        <div id="split" style="margin-left:500px">
        <div  style="margin-top:0px; margin-left:300px" class = "buttonchoose">
            <input style="font-size: 17px; font-family: 'Work Sans', sans-serif" type="button" value="Split" onclick="labelfng()">
        </div>
        <!--<p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Split period:   </b>   </p>
        <div style="margin-top:-10px; margin-left:550px" id="gB"></div><br>
        <br>
        <p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Sec:  </b> </p>-->

        <div style="margin-top:15px; margin-left:-190px">

        <select name="SEC" id="mySelect">
            <option value="AB">A+B</option>
        <!--    <option value="AA,BB">A/B</option>  -->
            <option value="AA">A</option>
            <option value="BB">B</option>
          </select>


        </div>

        <!--<p style =" font-family: 'Work Sans', sans-serif; font-size: 24px"> <b> Room:   </b>   </p>-->

<?php   $sql = "SELECT * FROM table_room";
        $result = mysqli_query($con,$sql);
      echo "<div style='margin-top:25px; margin-left:-180px'>";
      echo "<c><select id='roomAB' name='room' >";
        echo "<option value='' >Section room</option>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['room_code'] ."'>" . $row['room_code'] ."</option>";
                  }
        echo "</select></c>";

     ?>

    </b>
    <div style="margin-top:40px;margin-left:290px">
    <input  type="submit" name="save" value="save" >
    </div>
</div>
      </form>
  </body>
</html>
<?php
    if(isset($_POST['logout']))
        {
            session_destroy();
        }
?>
