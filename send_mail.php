<?php
include 'config.php';
require_once'session_admin.php';
$to=$_POST['to'];
$message=$_POST['message'];
$subject=$_POST['subject'];
$company=$_POST['company'];
mysql_query("insert into message (message,subject,send_date,send_time,company_id)values('$message','$subject',CURDATE(),CURTIME(),'$company')");
$sq=mysql_fetch_array(mysql_query("select * from message order by mail_id desc limit 1"));
$message_id=$sq['mail_id'];
$res=explode(";", $to);
		foreach ($res as $email) {
			if($email!="" && $email!=null){
				$count=mysql_num_rows(mysql_query("select * from message_list where mail_id='$message_id' and user_id='$reg'"));
				if($count==0){mysql_query("insert into message_list (mail_id,user_id)values('$message_id','$email')");}
			}
		}	
?>