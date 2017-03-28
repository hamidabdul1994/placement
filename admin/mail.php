<?php
include'../config.php';
require_once'session_admin.php';
$out='';
$to='';
$company='';
$sq=mysql_query("select * from company");
while ($a=mysql_fetch_array($sq)) {
	$company.='
	<option value="'.$a['c_id'].'">'.$a['cname'].' ('.$a['ccode'].')</option>
	';
}
$i=1;

$stname=$_GET['stname'];
if($stname!=''|| $stname!=null){
	$sql=mysql_query("select * from student_details where stname like '%$stname%' order by division,r_number ASC");
	$count=mysql_num_rows($sql);
	while ($s=mysql_fetch_array($sql)) {
		$x='';
		$placed='';
		$company_id=$s['c_id'];
		$c=mysql_fetch_array(mysql_query("select * from company where c_id=$company_id"));
		$placed=$c['cname'];
		$u_id=$s['u_id'];
		$to.=''.$u_id.';';
		$type=$s['type'];
		if($type=='hsc'){$x=mysql_fetch_array(mysql_query("select * from hscmark where u_id=$u_id"));}
		else{$x=mysql_fetch_array(mysql_query("select * from dipmarks where u_id=$u_id"));}
		$out.='
		<tr>
            <td>'.$i.'</td>
            <td>'.$u_id.'</td>
            <td>'.$s['stname'].'</td>
            <td>'.$x['degreepointer'].'</td>
            <td>'.$x['hscpercentage'].'</td>
             <td>'.$x['sscpercentage'].'</td>
            <td>'.$s['branch'].'</td>
            <td>'.$s['division'].'</td>
            <td>'.$s['r_number'].'</td>
            <td>'.$s['type'].'</td>
            <td>'.$placed.'</td>
        </tr>
		';
        $i++;
	}
}
else{
	$tt=0;
	$gt=0;
	$st_type='';
	$st_gender='';
	$ssc=$_GET['sscpercentage'];
	$hsc=$_GET['hscpercentage'];
	$degree0=$_GET['degree'];
	$degree1=$_GET['degree1'];
	$sem3onward=$_GET['sem3onward'];
	$sem3onward1=$_GET['sem3onward1'];
	$livekt=$_GET['livekt'];
	$isplaced=$_GET['isplaced'];
	$isdefaulter=$_GET['isdefaulter'];
	$passyear=$_GET['passyear'];
	$diplomapercentage=$_GET['diplomapercentage'];
	$drop=$_GET['drop'];
	$deadkt=$_GET['deadkt'];
	$attempts=$_GET['attempts'];


	$branch=$_GET['branch'];
	$type=$_GET['type'];
	$gender=$_GET['gender'];
	foreach ($type as $t) {
		$tt=$tt+1;
			if($tt==1){
				$st_type=$t;
			}
			else{
				$tt=0;
			}
	}
	foreach ($gender as $g) {
		$gt=$gt+1;
		if($gt==1){
				$st_gender=$g;
			}
			else{
				$gt=0;
			}
	}
	foreach ($branch as $b) {
		$sq='';
		if($gt==1 && $tt==0)
		{
			$sq=mysql_query("select * from student_details where gender='$st_gender' and branch='$b' and passyear='$passyear' and defaulter='$isdefaulter'");
		}
		if($gt==0 && $tt==1)
		{
			$sq=mysql_query("select * from student_details where type='$st_type' and branch='$b' and passyear='$passyear'  and defaulter='$isdefaulter'");
		}
		if($gt==1 && $tt==1)
		{
			$sq=mysql_query("select * from student_details where type='$st_type' and gender='$st_gender' and branch='$b' and passyear='$passyear'  and defaulter='$isdefaulter'");
		}
		if($gt==0 && $tt==0)
		{
			$sq=mysql_query("select * from student_details where branch='$b' and passyear='$passyear' and defaulter='$isdefaulter'");
		}

		$count=mysql_num_rows($sq);
		if($count>0){

			while ($v=mysql_fetch_array($sq)) {
				$u_id=$v['u_id'];
				$type=$v['type'];
				if($type=="hsc"){
					$sql=mysql_query("select * from hscmark where u_id=$u_id and sscpercentage>='$ssc' and hscpercentage>='$hsc' and (degreepointer BETWEEN ".$degree0." AND ".$degree1.") and drops<='$drop' and livekt<='$livekt' and deadkt<='$deadkt' and attempts<='$attempts'   ");
				}
				if($type=="diploma"){
					$sql=mysql_query("select * from dipmarks where u_id=$u_id and sscpercentage>='$ssc' and diplomapercentage>='$diplomapercentage' and (degreepointer BETWEEN ".$sem3onward." AND ".$sem3onward1.") and drops<='$drop' and livekt<='$livekt' and deadkt<='$deadkt' and attempts<='$attempts' ");
				}
				$co=mysql_num_rows($sql);

				if($co==1){
					 if($isplaced!="b"){
					 	$sq1=mysql_query("select * from student_details where u_id=$u_id and placed='$isplaced'");
					 	$c=mysql_num_rows($sq1);

					 	if($c==1){
					 		while ($s=mysql_fetch_array($sq1)) {

								$u_id=$s['u_id'];
								$to.=''.$u_id.';';
								$x='';
								$placed='';
								$company_id=$s['c_id'];
								$c=mysql_fetch_array(mysql_query("select * from company where c_id=$company_id"));
								$placed=$c['cname'];
								$type=$s['type'];
								$hscpercent='';
								if($type=='hsc'){$x=mysql_fetch_array(mysql_query("select * from hscmark where u_id='$u_id'"));
									$hscpercent=$x['hscpercentage'];
								}
								else{
									$x=mysql_fetch_array(mysql_query("select * from dipmarks where u_id='$u_id'"));
									$hscpercent=$x['diplomapercentage'];
								}
								$out.='
								<tr>
									<td>'.$i.'</td>
						            <td>'.$u_id.'</td>
						            <td>'.$s['stname'].'</td>
						            <td>'.$x['degreepointer'].'</td>
						            <td>'.$hscpercent.'</td>
						            <td>'.$x['sscpercentage'].'</td>
						            <td>'.$s['branch'].'</td>
						            <td>'.$s['division'].'</td>
						            <td>'.$s['r_number'].'</td>
						            <td>'.$s['type'].'</td>
						            <td>'.$placed.'</td>
						        </tr>
								';
								$i++;
							}
					 	}

					 }
					 else{
					 	$sq1=mysql_query("select * from student_details where u_id=$u_id");
							$c=mysql_num_rows($sq1);
						 	if($c==1){
						 		while ($s=mysql_fetch_array($sq1)) {
									$u_id=$s['u_id'];
									$to.=''.$u_id.';';
									$x='';
                                    $placed='';
                                    $company_id=$s['c_id'];
                                    $c=mysql_fetch_array(mysql_query("select * from company where c_id=$company_id"));
                                    $placed=$c['cname'];

									$type=$s['type'];
									$hscpercent='';
									if($type=='hsc'){$x=mysql_fetch_array(mysql_query("select * from hscmark where u_id=$u_id"));$hscpercent=$x['hscpercentage'];}
									else{$x=mysql_fetch_array(mysql_query("select * from dipmarks where u_id=$u_id"));$hscpercent=$x['diplomapercentage'];}
									$out.='
									<tr>
									<td>'.$i.'</td>
							            <td>'.$u_id.'</td>
							            <td>'.$s['stname'].'</td>
							            <td>'.$x['degreepointer'].'</td>
						           		 <td>'.$hscpercent.'</td>
						           		  <td>'.$x['sscpercentage'].'</td>
							            <td>'.$s['branch'].'</td>
							            <td>'.$s['division'].'</td>
							            <td>'.$s['r_number'].'</td>
							            <td>'.$s['type'].'</td>
                                        <td>'.$placed.'</td>
							        </tr>
									';
									$i++;
								}
						 	}
					 }

				}
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MHSSCE Student list</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../plugins/datatables/extra/buttons.dataTables.min.css"/>

<style>
.box-header:hover{cursor: pointer}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header_admin.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Send Mail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                	<label>To</label>
                	<input type="text" name="to" class="form-control" id="to" value="<?php echo $to ?>"/>
                </div>

                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                	<th>Sr no.</th>
                  	<th>u_id</th>
                	<th>name</th>
                	<th>degree pointer</th>
                	<th>hsc/diploma</th>
                	<th>ssc</th>
                	<th>branch</th>
                	<th>division</th>
                	<th>roll no</th>
                	<th>type</th>
                	<th>placed</th>
                </tr>
                </thead>
                <tbody>
                <?php echo $out ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>SR no.</th>
                  <th>u_id</th>
                	<th>name</th>
                	<th>degree pointer</th>
                	<th>hsc/diploma</th>
                	<th>ssc</th>
                	<th>branch</th>
                	<th>division</th>
                	<th>roll no</th>
                	<th>type</th>
                	<th>placed</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
                <div class="form-group">
                	<label>Subject</label>
                	<input type="text" name="subject" class="form-control" id="sub"/>
                </div>
                <div class="form-group">
                	<label>Company Registration</label>
                		<select class="form-control" id="company">
                			<option value="">None</option>
                			<?php echo $company ?>
                		</select>
                </div>
                <div class="form-group">
                	<label>Message</label>
                	<textarea name="message" class="form-control" id="message" rows="6"></textarea>
                </div>
               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success" id="sent">Send</button>
                  <button class="btn btn-info "><i class="ion-android-download"></i> Save List</button>
                <div class="callout callout-success" id="success" style="margin-top: 20px;display: none">
                <h4>Message sent.</h4>
              </div>
              </div>
          </div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

<?php
include '../footer.php';
 ?>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<script src="../plugins/datatables/extra/buttons.flash.min.js"></script>
<script src="../plugins/datatables/extra/buttons.html5.min.js"></script>
<script src="../plugins/datatables/extra/buttons.print.min.js"></script>
<script src="../plugins/datatables/extra/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables/extra/jszip.min.js"></script>
<script src="../plugins/datatables/extra/pdfmake.min.js"></script>
<script src="../plugins/datatables/extra/vfs_fonts.js"></script>

<!-- Page Script -->
<script>
$(document).ready(function(){
	$("#sent").click(function(){
		$.ajax({
			type:"POST",
			url:"send_mail.php",
			data:{"to":$('#to').val(),"subject":$("#sub").val(),"message":$("#message").val(),"company":$("#company").val()},
			cache:false,
			success:function(){
				$("#to").val('');
				$("#sub").val('');
				$("#message").val('');
				$("html, body").animate({ scrollTop: $(document).height() }, 500);
				$("#success").fadeIn();

			}
		})
	})
	$("#example1").DataTable({
		 dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
	});
})
</script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
