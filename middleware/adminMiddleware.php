<?php
  session_start();
if(isset($_SESSION['auth'])){
    if($_SESSION['role_as'] != 1)
{
    header('Location: ../ekadmin/index.php');

}
}
else{
    header('Location: ../login.php');

}

?>