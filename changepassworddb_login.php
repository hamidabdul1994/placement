<?php 
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];

if(isset($_POST['submit']))
   { 
    
        $sql=mysql_query("select * from student_details where reg_id='$reg_id'");
        $password=$_POST['password']; 
        mysql_query("update user set password='$password' where reg_id='$reg_id'");
            header('location:welcome.php');
         
   }

?>
