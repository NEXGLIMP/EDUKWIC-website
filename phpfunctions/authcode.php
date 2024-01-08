<?php

session_start();
include('../db_conn.php');

if (isset($_POST['login_btn'])) {

   $umail = mysqli_real_escape_string($conn,$_POST['user_email']);
   $upass = mysqli_real_escape_string($conn,$_POST['user_pass']);

   $login_query = "SELECT * FROM users WHERE user_email='$umail' AND user_password='$upass' ";
   $login_query_run = mysqli_query($conn,$login_query);

   if(mysqli_num_rows($login_query_run) > 0)
   {
    $_SESSION['auth'] = true;
    
    $userdata = mysqli_fetch_array($login_query_run);
    $username = $userdata['user_name'];
    $useremail = $userdata['user_email'];
    $role_as = $userdata['role_as'];


    $_SESSION['auth_user'] =[
       'user_name' => $username,
       'user_email' => $useremail
    ];
    $_SESSION['role_as'] = $role_as;
    if($role_as == 1){
      header('Location: ../admin/admin-dashboard.html');
    }
    else{
    // $_SESSION['message'] = "Logged In Successfully";
    header('Location: ../index.php');
    }

   }
   else
   {
    $_SESSION['message'] = "Invalid Credentials";
    header('Location: ../login.php');
    
   }

}


?>