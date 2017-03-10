<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$id=$_GET['id'];
$s=$_GET['s'];
mysql_query("update student_details set defaulter='$s' where reg_id='$id'");
?>
