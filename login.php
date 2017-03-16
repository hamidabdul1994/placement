<?php
include'config.php';
$error='';
if(isset($_POST['login']))
   {
     echo "entry...";
        $smartcard_no=mysql_real_escape_string($_POST['smartcard_no']);
        $password=mysql_real_escape_string($_POST['password']);
        $sql=mysql_query("select * from user where smartcard_no=$smartcard_no and password='$password' and valid=1") or die(mysql_error());
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
		else{
			$error='<i class="ion-alert"></i> Invalid login credentials or admin is not validate you yet';
		}
   }

?>
