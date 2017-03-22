<?php
include'../config.php';
require_once'session_guest.php';
$reg_id=$_SESSION['guest_user'];

if(isset($_POST['submit']))
   {
             $password=$_POST['password'];
             mysql_query("update guest set pwd='$password' where g_id=$reg_id");
             header('location:welcome_guest.php');
    }


?>
