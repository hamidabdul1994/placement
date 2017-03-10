<?php
 include'config.php';
require_once'session.php';


if(isset($_POST['submit']))
   {
$reg_id=$_SESSION['login_user'];       
    
        $sscmarks=$_POST['sscmarks'];
        $sscoutoff=$_POST['sscoutoff'];
        $sscpercentage=(($sscmarks)/($sscoutoff)*100); 
    $sscpercentage=sprintf('%0.2f', $sscpercentage);
        $year1marks=$_POST['year1marks'];
        $year1outoff=$_POST['year1outoff'];
        $year2marks=$_POST['year2marks'];
        $year2outoff=$_POST['year2outoff'];
        $year3marks=$_POST['year3marks'];
        $year3outoff=$_POST['year3outoff'];
        $totaldmarks=(($year1marks)+($year2marks)+($year3marks));
        $totaldoutoff=(($year1outoff)+($year2outoff)+($year3outoff));
        $diplomapercentage=(($totaldmarks)/($totaldoutoff)*100);
    $diplomapercentage=sprintf('%0.2f', $diplomapercentage);
        $sem3marks=$_POST['sem3marks'];
        $sem3outoff=$_POST['sem3outoff'];
        $sem4marks=$_POST['sem4marks'];
        $sem4outoff=$_POST['sem4outoff'];
        $sem5marks=$_POST['sem5marks'];
        $sem5outoff=$_POST['sem5outoff'];
        $sem6marks=$_POST['sem6marks'];
        $sem6outoff=$_POST['sem6outoff'];
        $sem7marks=$_POST['sem7marks'];
        $sem7outoff=$_POST['sem7outoff'];
        $sem8marks=$_POST['sem8marks'];
        $sem8outoff=$_POST['sem8outoff'];
        $py1=$_POST['py1'];
        $py2=$_POST['py2'];
        $py3=$_POST['py3'];
        $sy=$_POST['sy'];
    $totalmarks=(($sem3marks)+($sem4marks)+($sem5marks)+($sem6marks)+($sem7marks)+($sem8marks));
    $totaloutoff=(($sem3outoff)+($sem4outoff)+($sem5outoff)+($sem6outoff)+($sem7outoff)+($sem8outoff));
    $degreepointer=(($totalmarks)/($totaloutoff));
    $degreepointer=sprintf('%0.2f', $degreepointer);
        $livekt=$_POST['livekt'];
        $deadkt=$_POST['deadkt'];
        $attempts=$_POST['attempts'];
        $drops=(($py3-$sy)-3);   
        $sql=mysql_query("select * from dipmarks where reg_id='$reg_id'");
	    $count=mysql_num_rows($sql);
	    if($count==0)
        {
        mysql_query("insert into dipmarks set sscmarks='$sscmarks',sscoutoff='$sscoutoff',sscpercentage='$sscpercentage',year1marks='$year1marks',year1outoff='$year1outoff',year2marks='$year2marks',year2outoff='$year2outoff',year3marks='$year3marks',year3outoff='$year3outoff',totaldmarks='$totaldmarks',totaldoutoff='$totaldoutoff',diplomapercentage='$diplomapercentage',sem3marks='$sem3marks',sem3outoff='$sem3outoff',sem4marks='$sem4marks',sem4outoff='$sem4outoff',sem5marks='$sem5marks',sem5outoff='$sem5outoff',sem6marks='$sem6marks',sem6outoff='$sem6outoff',sem7marks='$sem7marks',sem7outoff='$sem7outoff',sem8marks='$sem8marks',sem8outoff='$sem8outoff',py1='$py1',py2='$py2',py3='$py3',sy='$sy',totalmarks='$totalmarks',totaloutoff='$totaloutoff',degreepointer='$degreepointer',livekt='$livekt',deadkt='$deadkt',attempts='$attempts',reg_id='$reg_id'");
       
             
       }
   header('location:welcome.php');
      }

?>
