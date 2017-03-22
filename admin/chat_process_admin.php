<?php
include'../config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$message=mysql_real_escape_string($_POST['message']);
$x='y';
$user_id=$_POST['user_id'];
mysql_query("insert into chat (u_id,message,cur_date,cur_time,sent)values($user_id,'$message',CURDATE(),CURTIME(),'$x') ");
?>
