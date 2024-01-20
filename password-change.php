<?php
session_start();
include('db_conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name,$get_email,$token)
{
  $mail = new PHPMailer(true);
  // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
  $mail->isSMTP();                                            
  $mail->SMTPAuth   = true;                                   

  $mail->Host       = "smtp.gmail.com";                     
  $mail->Username   = "edukwicorg@gmail.com";                     
  $mail->Password   = "***";                               

  $mail->SMTPSecure = "tls"; 
  
  $mail->Port       = 587;                                   

  
  $mail->setFrom("edukwicorg@gmail.com", $get_name);
  $mail->addAddress($get_email);     
 

  $mail->isHTML(true);                                  
  $mail->Subject = "Reset Password Notification";
  //Attachments
  $mail->Body    = "<h2>Hello!</h2>
                    <h3>You are receiving this email because we received a password reset request for your account<h3>
                    <br>
                    <a href='http://localhost/EDUKWIC-website/password-reset-page.php?token=$token&email=$get_email'>Reset Password</a>";
                    
   $mail->send();                
}

if(isset($_POST['resetbtn']))
{
   $email = mysqli_real_escape_string($conn,$_POST['umail']);
   $token= md5(rand());

   $check_email= "SELECT user_email FROM users WHERE user_email='$email' LIMIT 1";
   $check_email_run= mysqli_query($conn, $check_email);

   if(mysqli_num_rows($check_email_run)>0)
   {
     $row = mysqli_fetch_array($check_email_run);
     $get_name = $row['user_name'];
     $get_email = $row['user_email'];

     $update_token = "UPDATE users SET verify_token='$token' WHERE user_email='$get_email' LIMIT 1";
     $update_token_run = mysqli_query($conn, $update_token);
       if($update_token_run)
       {
         send_password_reset($get_name,$get_email,$token);
        //  $_SESSION['status'] = "We emailed you a password reset link";
         header("Location: forgot-password.php");
        exit(0);
       }
       else{
        // $_SESSION['status'] = "Something went wrong #1";
    header("Location: forgot-password.php");
    exit(0);
       }
   }
 else{
    // $_SESSION['status'] = "No Email Found";
    header("Location: forgot-password.php");
    exit(0);
   }
}
?>