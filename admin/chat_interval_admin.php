<?php
include'../config.php';
require_once'session_admin.php';
$reg_id=$_GET['reg_id'];
$c=$_GET['count'];
$c=$c-1;
$sql=mysql_query("select * from chat where user_id='$reg_id' order by message_id ASC limit $c,2");
$count=mysql_fetch_array($sql);
if($count>$c){
	while ($s=mysql_fetch_array($sql)) {
		$message=$s['message'];
		$curdate=$s['cur_date'];
	    $curdate=date("M d",strtotime($curdate));
	    $curtime=$s['cur_time'];
	    $sent=$s['sent'];
		$x=mysql_fetch_array(mysql_query("select * from user where reg_id='$reg_id'"));
		$name=$x['uname'];
		$sent=$s['sent'];
		if($sent=="n"){
		echo '
		    <div class="item">
		                <img src="profile.png" alt="user image" class="offline">

		                <p class="message">
		                  <a href="#" class="name">
		                    <small class="text-muted pull-right">'.$curdate.' <i class="fa fa-clock-o"></i> '.$curtime.'</small>
		                    '.$name.'
		                  </a>
		                  '.$message.'
		                </p>
		              </div>

    ';
	}
		else{
				echo '
		    <div class="item">
		                <img src="profile.png" alt="user image" class="online">

		                <p class="message">
		                  <a href="#" class="name">
		                    <small class="text-muted pull-right">'.$curdate.' <i class="fa fa-clock-o"></i> '.$curtime.'</small>
		                    Admin
		                  </a>
		                  '.$message.'
		                </p>
		              </div>

		    ';

		}
}
}
?>
