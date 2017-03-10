<?php
include'config.php';
$error='';
if(isset($_POST['login']))
   {
        $reg_id=mysql_real_escape_string($_POST['reg_id']);
        $password=mysql_real_escape_string($_POST['password']);
        $sql=mysql_query("select * from user where reg_id='$reg_id' and password='$password' ");
        $count=mysql_num_rows($sql);
       if($count==1)
       {    $x=mysql_fetch_array($sql);
            $reg_id=$x['reg_id'];
            session_start();
            $_SESSION['login_user']=$reg_id;
           $sql=mysql_query("select * from student_details where reg_id='$reg_id'");
           $count=mysql_num_rows($sql);
           if($count==0)
           {
            header('location:changepassword.php');
           }
           if($count==1)
           {
            header('location:welcome.php');
           }

       }


       $sql1=mysql_query("select * from admin where reg_id='$reg_id' and password='$password' ");
       $count1=mysql_num_rows($sql1);
       if($count1==1)
       {
           $x=mysql_fetch_array($sql1);
            $reg_id=$x['reg_id'];
            session_start();
            $_SESSION['login_user']=$reg_id;
             header('location:welcome_admin.php');
       }
       else
       {
       	$sql2=mysql_query("select * from guest where g_id='$reg_id' and pwd='$password'");
		$count2=mysql_num_rows($sql2);
		if($count2==1){
			$x=mysql_fetch_array($sql2);
			$gid=$x['g_id'];
			session_start();
            $_SESSION['guest_user']=$gid;
             header('location:welcome_guest.php');
		}

		else{
			$error='<i class="ion-alert"></i> Invalid login credentials';
		}


       }

   }

?>
