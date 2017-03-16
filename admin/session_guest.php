<?php
include'../config.php';
session_start();
$user_check=$_SESSION['guest_user'];
$ses_sql=mysql_query("select * from guest where g_id='$user_check'");
$row = mysql_fetch_array($ses_sql);
$login_session =$row['g_id'];
if(!isset($login_session)){
header('Location: index.php');
}
?>
