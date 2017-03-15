<?php
include'config.php';
session_start();
if(isset($_POST['submit']))
   {
     $u_id=$_SESSION['login_user'];

     $sql=mysql_query("select * from user where u_id='$u_id'");
     while($x=mysql_fetch_array($sql)){
         $name=$x['uname'];
         $smartcard_no=$x['smartcard_no'];
     }
        $stname=$_POST['stname'];
        $faname=$_POST['faname'];
        $moname=$_POST['moname'];
        // $u_id=$_POST['u_id'];
        $smart_card=$smartcard_no;//$_POST['smart_card'];
        $smart_card = strtoupper($smart_card);
        $dob=$_POST['dob'];
        $st_mobile=$_POST['st_mobile'];
        $pa_mobile=$_POST['pa_mobile'];
        $r_number=$_POST['r_number'];
        $division=$_POST['division'];
        $branch=$_POST['branch'];
        $emailid=$_POST['emailid'];
        $gender=$_POST['gender'];
        echo "$u_id ::Value :: $smartcard_no";
        $sql=mysql_query("select * from student_details where u_id='$u_id'");
	    $count=mysql_num_rows($sql);
	    if($count==0)
        {
        mysql_query("insert into student_details set stname='$stname',faname='$faname',moname='$moname',u_id='$u_id',smart_card='$smart_card',dob='$dob',st_mobile='$st_mobile',pa_mobile='$pa_mobile',r_number='$r_number',division='$division',branch='$branch',emailid='$emailid',gender='$gender'") or die(mysql_error());
        mysql_query("insert into resume set u_id='$u_id'");
       }
    header('location:resume_details.php');
   }

?>
