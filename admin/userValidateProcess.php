<?php
include'../config.php';
require_once'session_admin.php';
$id=$_POST['id'];
$s=$_POST['s'];
mysql_query("update user set valid=1 where u_id=$id");
?>
