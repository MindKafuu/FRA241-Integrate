<?php
  require 'dbconfig/config.php';
  require 'PHPMailer/PHPMailerAutoload.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--style-->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Work+Sans" rel="stylesheet">

    <!--shortcut-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <title>Classroom Schedule</title>
  </head>
  <body>
    <br><br><br><img src="images/FIBO_logo.jpg" width="150" height="170">
    <br><br><br><b style="font-size: 3em;">Classroom Schedule</b>
    <br><br>
    <b>Please enter your E-mail to verify your account,</b><br>
    <b>your password will be sent to your E-mail</b>
    <br><br><br>
    <form action="page2.php" method="post">
      <input name="email" class="input email" type="text" placeholder="Email address" required/>
      <br><br><br><button name="send" class="btn"><b>Submit</b></button>
      <a class="btn" href="index.php">
      <b>Cancel</b></a>
    </form>

    <!--SEND EMAIL-->
    <?php
      if(isset($_POST['send']))
      {
        $sql = "SELECT * FROM table_account";
        $smyData = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($smyData)) {
          $username = $row['teacher_email'];
          $password = $row['teacher_password'];
        }

        $query = "SELECT * FROM table_account WHERE teacher_email = '$username'";
        
        $query_run = mysqli_query($con, $query);
        if(mysqli_num_rows($query_run) > 0)
        {
          /////////////////////////////////////send email////////////////////////////////////////////
          $mail = new PHPMailer;
          
          $mail->isSMTP();                                   // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                            // Enable SMTP authentication
          $mail->Username = 'chanaganmind@gmail.com';          // SMTP username
          $mail->Password = 'chanagan24'; // SMTP password
          $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                 // TCP port to connect to
          
          $mail->setFrom('chanaganmind@gmail.com', 'CodexWorld');
          $mail->addReplyTo('chanaganmind@gmail.com', 'CodexWorld');
          $mail->addAddress($username);   // Add a recipient
          //$mail->addCC('cc@example.com');
          //$mail->addBCC('bcc@example.com');
          
          $mail->isHTML(true);  // Set email format to HTML
          
          $bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
          $bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';
          
          $mail->Subject = 'Email from Localhost by CodexWorld';
          $mail->Body    = $bodyContent;
          
          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              echo 'Message has been sent';
          }
          ///////////////////////////////////////////////////////////////////////////////////////////
        }
        else
        {
          echo '<script type="text/javascript"> alert("Invalid email. Try again plase!!") </script>';
        }
      }
    ?>

  </body>
</html>