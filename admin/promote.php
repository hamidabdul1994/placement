<?php
include'config.php';
require_once'session_admin.php';
$user=$_GET['user'];
$c=$_GET['c'];
$r=$_GET['r'];
$s=mysql_fetch_array(mysql_query("select * from message where c_id=$c"));
$l=mysql_fetch_array(mysql_query("select * from company where c_id=$c"));
$round=$l['criteria'];
$mail_id=$s['mail_id'];
if($round<=$r){
mysql_query("update message_list set round='$r' where u_id=$user and mail_id=$mail_id");
}
else{
$placed='y';
mysql_query("update message_list set round='$r' where u_id=$user and mail_id=$mail_id");
mysql_query("update student_details set c_id=$c,placed='$placed' where u_id=$user");
}

?>
