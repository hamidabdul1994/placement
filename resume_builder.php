<?php
include'config.php';
require_once'session.php';
error_reporting(0);
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from student_details where reg_id='$reg_id'");
while ($a=mysql_fetch_array($sql)) {
	$stname=$a['stname'];
list($fname,$lname) = explode(" ",$stname);
	$mobile=$a['pa_mobile'];
	$email=$a['emailid'];
	$branch=$a['branch'];
	if($branch=="comp"){$branch="Computer Engineering";}
	$type=$a['type'];
	if($type=="hsc"){$type="HSC";}
	else{$type="Diploma";}	
	$dob=$a['dob'];
	$faname=ucfirst($a['faname']);
	$moname=ucfirst($a['moname']);
}

$sql=mysql_query("select * from resume where reg_id='$reg_id'");
while ($b=mysql_fetch_array($sql)) {
	$project=$b['project'];
	$miniproject=$b['miniproject'];
	$certification=$b['certification'];
	$address=$b['address'];
    $Hname=$b['Hname'];
    $sname=$b['sname'];
	$tech=$b['langu'];
	if($certification!="" || $certification!=null){
		$certification='
			<div class="section row">
                <h2 class="col">Certification</h2>
                <div class="section-text col-right">
                    <h3>'.$certification.'</h3>
                </div>
            </div>
		';
	}
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $stname ?> - Resume</title>
        <link rel="stylesheet" href="css/resume.css">
 <style>
 	#contact .section-text{width:74%}
 .btn {
 width:100%;
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Arial;
  color: #ffffff;
  font-size: 30px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}	
 </style>       
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <body style="font-family: sans-serif">
        <div class="page">
            <div class="section row">
                <div style="width: 75%;float:left">
                	<h1 class="col" style="width: 100%"><span style="font-weight:700"><?php echo $fname ?></span> <?php echo $lname ?></h1>
                	<div style="font-size: 14px" class="section row" id="contact">
                		<h2 class="col">Contact info</h2>
                		<div class="section-text col-right">
		                    <h3><span class="emph">Address</span></h3>
		                    <div class="row">
		                        <div class="col light"><?php echo $address ?></div>
		                    </div>
		                </div>
		                <div class="section-text col-right">
		                    <h3><span class="emph">Contact number</span></h3>
		                    <div class="row">
		                        <div class="col light"><?php echo $mobile ?></div>
		                    </div>
		                </div>
		                <div class="section-text col-right">
		                    <h3><span class="emph">Email id</span></h3>
		                    <div class="row">
		                        <div class="col light"><?php echo $email ?></div>
		                    </div>
		                </div>
                	</div>
              	</div>
                <div class="contact-info col-right" style="width: 25%;float: right">
                    <div style="width:200px;height:200px;border-style: dotted;float:right;text-align: center;color:#cdcdcd;line-height: 200px">
                    	Photo
                    </div>
                </div>
            </div>
            <div class="section row">
                <h2 class="col">Education</h2>
                <div class="section-text col-right">
                    <h3><span class="emph">Bachelor</span> in <?php echo $branch ?></h3>
                    <div class="row">
                        <div class="col light">Shah and Anchor Kutchhi Engineering college</div>
                        <div class="col-right light">2012 - 2016</div>
                    </div>
                </div>
                <div class="section-text col-right">
                    <h3><span class="emph">HSC</span></h3>
                    <div class="row">
                        <div class="col light"><?php echo $Hname ?></div>
                        <div class="col-right light	">2010 - 2012	</div>
                    </div>
                </div>
                 <div class="section-text col-right">
                    <h3><span class="emph">SSC</span></h3>
                    <div class="row">
                        <div class="col light"><?php echo $sname ?></div>
                        <div class="col-right light	"> 2009 - 2010	</div>
                    </div>
                </div>
            </div>
            
            <div class="section row">
                <h2 class="col">Projects</h2>
                <div class="section-text col-right">
                    <h3><?php echo $project ?></h3><h3><?php echo $miniproject ?></h3>
                </div>
            </div>
            <div class="section row">
                <h2 class="col">Technical skills</h2>
                <div class="section-text col-right">
                    <h3><?php echo $tech ?></h3>
                </div>
            </div>
            <?php echo $certification ?>
            <div class="section row">
                <h2 class="col">Personal Info</h2>
                	<div class="section-text col-right">
                    <div class="desc" style="color:#333">
                    	<b>Father name</b> : <?php echo $faname ?> <br/>
                    	<b>Mother name</b> : <?php echo $moname ?> <br/>
                    	<b>Marital status</b> : single <br/>
                    	<b>Date of birth</b> : <?php echo $dob ?> <br/>
                    	<b>Nationality</b> : Indian<br/>
                    	<b>Address</b> : <?php echo $address ?>
                    </div>
                </div>
            </div>
        </div>
        <button id="pr" class="btn" style="float: right">Print</button>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
$(document).ready(function(){
	$("#pr").click(function(){
		$("#pr").hide();
		window.print();
	});
})
</script>
    </body>
</html>