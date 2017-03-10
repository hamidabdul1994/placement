<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$message=mysql_real_escape_string($_POST['message']);
mysql_query("insert into chat (user_id,message,cur_date,cur_time)values('$reg_id','$message',CURDATE(),CURTIME()) ");
?>