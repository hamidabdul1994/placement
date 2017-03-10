<?php 
$gname='';$cname='';
$reg_id=$_SESSION['guest_user'];
$sql=mysql_query("select * from guest where g_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $gname=$x['gname'];
	$cname=$x['cname'];
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
              <img src="profile.png" class="user-image" alt="User Image">
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="admin.png" class="img-circle" alt="User Image">

                <p>
                   <?php echo $gname ?><br/>
                   <small><?php echo $cname ?></small>
                  
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
     
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
        <ul class="sidebar-menu">
        <li class="header" style=" font-size: 20px; color: white;"><p>MAIN NAVIGATION</p></li>
        <li class="treeview">
          <a href="welcome_guest.php">
            <i class="fa fa-search"></i>
            <span>Search</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          </li>
           <li class="treeview">
          <a href="changepassword_guest.php">
            <i class="fa ion-android-settings"></i>
            <span>Change password</span>
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
