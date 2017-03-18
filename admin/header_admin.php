<?php
$gender='';
$u_id=$_SESSION['login_user'];
$sql=mysql_query("select * from student_details where u_id='$u_id'");
while($x=mysql_fetch_array($sql)){
    $gender=$x['gender'];
    $type=$x['type'];
    if($gender=="male"){$gender1='../male.png';}
    else{$gender1='female.png';}
    if($type=="hsc"){$type1='academic_hsc.php';}
    else{$type1='academic_diploma.php';}
}

?>
<header class="main-header">
    <!-- Logo -->
    <a href="welcome_admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>R</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Campus</b>Recruit</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="welcome.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../profile.png" class="user-image" alt="User Image">

            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../admin.png" class="img-circle" alt="User Image">

                <p>
                   -Webmaster
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="welcome_admin.php"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
        <li class="header" style=" font-size: 20px; color: white;"><p>MAIN NAVIGATION</p></li>
        <li class="treeview">
          <a href="search.php">
            <i class="fa fa-search"></i>
            <span>Search</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
           <li class="treeview">
          <a href="welcome_admin.php">
            <i class="fa fa-group"></i>
            <span>Company Student Details</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
            <li class="treeview">
          <a href="company.php">
            <i class="fa fa-briefcase"></i>
            <span>Company registration</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
            <li class="treeview">
          <a href="message.php">
            <i class="fa fa-envelope"></i>
            <span>Message</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
            <li class="treeview">
          <a href="guest_registration.php">
            <i class="fa  fa-registered"></i>
            <span>Guest registration</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
            <li class="treeview">
          <a href="defaulter.php">
            <i class="fa  fa-user"></i>
            <span>Defaulter</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>

            <li class="treeview">
          <a href="report.php">
            <i class="fa fa-pie-chart"></i>
            <span>Report generation</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
            <li class="treeview">
          <a href="logout.php">
            <i class="fa fa-share"></i>
            <span>Logout</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
        </ul>
    <!-- /.sidebar -->
  </aside>
