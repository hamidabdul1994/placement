<?php 
include'config.php';

if(isset($_POST['submit']))
   {
        $stname=$_POST['stname'];
        $faname=$_POST['faname'];
        $moname=$_POST['moname'];
        $reg_id=$_POST['reg_id'];
        $smart_card=$_POST['smart_card'];
    $smart_card = strtoupper($smart_card);
        $dob=$_POST['dob'];
        $st_mobile=$_POST['st_mobile'];
        $pa_mobile=$_POST['pa_mobile'];
        $r_number=$_POST['r_number'];
        $division=$_POST['division'];
        $branch=$_POST['branch'];
        $emailid=$_POST['emailid'];
        $gender=$_POST['gender'];
        $sql=mysql_query("select * from student_details where reg_id='$reg_id'");
	    $count=mysql_num_rows($sql);
	    if($count==0)
        {
        mysql_query("insert into student_details set stname='$stname',faname='$faname',moname='$moname',reg_id='$reg_id',smart_card='$smart_card',dob='$dob',st_mobile='$st_mobile',pa_mobile='$pa_mobile',r_number='$r_number',division='$division',branch='$branch',emailid='$emailid',gender='$gender'");
       
          mysql_query("insert into resume set reg_id='$reg_id'");  
            
       }
    header('location:resume_details.php');
   }

?>
