<?php
include'config.php';
require_once'session_admin.php';
$reg_id=$_SESSION['login_user'];
$id=$_GET['id'];
$sql=mysql_query("select * from chat where user_id='$id' order by message_id ASC");
while ($s=mysql_fetch_array($sql)) {
	$message=$s['message'];
    $curdate=$s['cur_date'];
    $curdate=date("M d",strtotime($curdate));
    $curtime=$s['cur_time'];
    $sent=$s['sent'];
    $y=mysql_fetch_array(mysql_query("select * from student_details where reg_id='$id'"));
    $gender=$y['gender'];
    if($gender=="male"){$gender1='male.png';}
    else{$gender1='female.png';}
	$x=mysql_fetch_array(mysql_query("select * from user where reg_id='$id'"));
	$name=$x['uname'];
    if($sent=='n'){
    echo '
    <div class="item">
                <img src="'.$gender1.'" alt="user image" class="offline">
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
                <img src="admin.png" alt="user image" class="online">
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
?>