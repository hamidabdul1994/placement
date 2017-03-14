<?php
include'config.php';
$error='';
if(isset($_POST['login']))
   {
        $smartcard_no=mysql_real_escape_string($_POST['smartcard_no']);
        $password=mysql_real_escape_string($_POST['password']);
        $sql=mysql_query("select * from user where smartcard_no=$smartcard_no and password='$password' and valid=1");
        $count=mysql_num_rows($sql);
       if($count==1)
       {
             $x=mysql_fetch_array($sql);
            $u_id=$x['u_id'];
            session_start();
            $_SESSION['login_user']=$u_id;
           $sql=mysql_query("select * from student_details where u_id='$u_id'");
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
       $sql1=mysql_query("select * from admin where username='$smartcard_no ' and password='$password' ");
       $count1=mysql_num_rows($sql1);
       if($count1==1)
       {
           $x=mysql_fetch_array($sql1);
            $username=$x['username'];
            session_start();
            $_SESSION['login_user']=$username;
             header('location:welcome_admin.php');
       }
       else
       {
       	$sql2=mysql_query("select * from guest where g_id='$smartcard_no' and pwd='$password'");
		      $count2=mysql_num_rows($sql2);
		        if($count2==1){
			           $x=mysql_fetch_array($sql2);
			              $gid=$x['g_id'];
			              session_start();
                    $_SESSION['guest_user']=$gid;
                header('location:welcome_guest.php');
		}

		else{
			$error='<i class="ion-alert"></i> Invalid login credentials or admin is not validate you yet';
		}


       }

   }

?>
