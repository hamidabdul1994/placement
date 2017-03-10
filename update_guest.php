<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];

$gid=$_GET['id'];
$pwd=$_GET['pwd'];

mysql_query("update guest set pwd='$pwd' where g_id='$gid'");



?>