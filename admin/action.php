<?php
include'../config.php';
require_once'session_admin.php';
$id=$_GET['id'];
$s=$_GET['s'];
mysql_query("update student_details set defaulter='$s' where u_id=$id");
?>
