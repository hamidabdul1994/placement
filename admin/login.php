<?php
include'../config.php';
$error='';
if(isset($_POST['login']))
   {
      $username=mysql_real_escape_string($_POST['username']);
      $password=mysql_real_escape_string($_POST['password']);
      $sql1=mysql_query("select * from admin where username='$username' and password='$password' ") or die(mysql_error());
      $count1=mysql_num_rows($sql1);
      $error='<i class="ion-alert"></i> Admin::'.$count1;
      if($count1==1)
       {
           $x=mysql_fetch_array($sql1);
           $username=$x['username'];
           session_start();
           $_SESSION['admin_user']=$username;
           header('location:welcome_admin.php');
       }
       else if($count1==0)
       {
       	  $sql2=mysql_query("select * from guest where g_id=$username and pwd='$password'");
		      $count2=mysql_num_rows($sql2);
          $error='<i class="ion-alert"></i> Admin::'.$count2;
		      if($count2==1){
			       $x=mysql_fetch_array($sql2);
			       $gid=$x['g_id'];
			       session_start();
             $_SESSION['guest_user']=$gid;
             header('location:welcome_guest.php');
		         }
        }
		else{
			$error='<i class="ion-alert"></i> Invalid login credentials';
		}
   }
?>
