<?php
include'../config.php';
session_start();
$user_check=$_SESSION['admin_user'];
$ses_sql=mysql_query("select * from admin where username='$user_check'");
$row = mysql_fetch_array($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
header('Location:index.php');
}
?>
