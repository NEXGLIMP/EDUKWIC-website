<?php
session_start();
include('db_conn.php');

function send_password_reset($get_name,$get_email,$token)
{
    
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
     $get_name = $row['name'];
     $get_email = $row['email'];

     $update_token = "UPDATE users SET verify_token='$token' WHERE user_email='$get_email' LIMIT 1";
     $update_token_run = mysqli_query($conn, $update_token);
       if($update_token_run)
       {
         send_password_reset($get_name,$get_email,$token);
         $_SESSION['status'] = "We emailed you a password reset link";
         header("Location: forget-password.html");
        exit(0);
       }
       else{
        $_SESSION['status'] = "Something went wrong #1";
    header("Location: forget-password.html");
    exit(0);
       }
   }
   else{
    $_SESSION['status'] = "No Email Found";
    header("Location: forget-password.html");
    exit(0);
   }
}
?>