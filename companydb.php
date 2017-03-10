<?php
 include'config.php';
require_once'session_admin.php';


if(isset($_POST['register']))
   {
$reg_id=$_SESSION['login_user']; 
    
    $cname=$_POST['cname'];
    $ccode=$_POST['ccode'];
    $criteria=$_POST['criteria'];
    $deadline=$_POST['deadline'];
    
       
        
    
        $sql=mysql_query("select * from company where c_id='$c_id'");
	    $count=mysql_num_rows($sql);
	    if($count==0)
        {
        mysql_query("insert into company set cname='$cname',ccode='$ccode',criteria='$criteria',deadline='$deadline'");
      
            mysql_error();
           
          
       }
    header('location:welcome_admin.php');   
   }

?>
