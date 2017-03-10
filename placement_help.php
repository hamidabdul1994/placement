<?php
include'config.php';
require_once'session.php';
$reg_id=$_SESSION['login_user'];
$sql=mysql_query("select * from user where reg_id='$reg_id'");
while($x=mysql_fetch_array($sql)){
    $name=$x['uname'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sakec Placement | Placement Help</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href=" plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href=" plugins/iCheck/flat/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('header.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Companies

      </h1>
      <ol class="breadcrumb">
        <li><a href="welcome.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Of Companies</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked" id="cmp">
                <li class="active" id="tcs"><a href="#"> Tata Consultancy Services(TCS)</a></li>
                <li id="lt"><a href="#"> Larsen And Turbo(L&T)</a></li>
                <li id="mu"><a href="#"> MuSigma</a></li>
                <li id="di"><a href="#"> DirectI </a></li>
                <li id="gep"><a href="#"> GEP</a></li>
                <li id="vis"><a href="#"> Vistaar</a></li>
                <li id="ig"><a href="#"> Igate(Capgemini)</a></li>
                <li id="bms"><a href="#"> Book My Show(BMS)</a></li>
                <li id="mir"><a href="#"> Mirraw</a></li>
                <li id="sca"><a href="#"> Scalearc</a></li>
                <li id="tao"><a href="#"> TAO</a></li>
                <li id="mind"><a href="#"> Mindcraft</a></li>
                <li id="atos"><a href="#"> ATOS</a></li>
                <li id="emp"><a href="#"> E-Emphasys</a></li>
                <li id="all"><a href="#"> Allerin</a></li>
                <li id="qk"><a href="#"> QualityKiosk</a></li>
                <li id="rav"><a href="#"> Rave technologies</a></li>
                <li id="amd"><a href="#"> Amdocs</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border" id="info">

            </div>
            <!-- /.box-header -->

          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <?php
		include 'footer.php';
		 ?>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src=" plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src=" bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src=" plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=" plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/app.min.js"></script>
<!-- iCheck -->
<script src=" plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
$(document).ready(function(){
    $('#cmp>li').click(function(){
        var id=$(this).attr('id');
        $("#cmp>li").removeClass('active');
        $(this).addClass('active');
        $("#info").empty();
        if(id=="lt"){$('#info').append('<h3 class="box-title">Larsen And Turbo(L&T)</h3><h4><p>Larsen & Toubro Limited, also known as L&T, is an Indian multinational conglomerate headquartered in Mumbai,Maharashtra, India. It was founded by Danish engineers taking refuge in India, as well as an Indian financing partner.] The company has business interests in engineering, construction, manufacturing goods, information technology, and financial services, and also has an office in the Middle East and other parts of Asia.Founder: Soren Kristian Toubro Henning Holck-Larsen.</p><p>Company Link:<a href="http://www.larsentoubro.com/" target="_blank">L&T</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Group discussion<br>3. Paragraph Writing<br>4. Technical Interview and HR Interview<br>References for lnt placement papers:<br><a href =" http://placement.freshersworld.com/lnt-infotech-question-papers-and-answers/331400004491" target="_blank">1.Freshersworld</a><br><a href =" http://www.indiabix.com/placement-papers/l-t/3874" target="_blank">2.Indiabix Placement Papers</a></p>');}
        if(id=="tcs"){$('#info').append('<h3 class="box-title">Tata Consultancy Services(TCS)</h3><h4><p>Tata Consultancy Services (TCS) is a global leader in IT services, digital and business solutions that partners with its clients to simplify, strengthen and transform their businesses. We ensure the highest levels of certainty and satisfaction through a deep-set commitment to our clients, comprehensive industry expertise and a global network of innovation and delivery centers.TCS has been recognized by Brand Finance as one of the Big 4 Global IT Services Brands. Our continued industry-leading growth is a testament to the certainty our clients experience every day.</p><p>Company Link:<a href="http://www.tcs.com/Pages/default.aspx" target="_blank">TCS</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview<br>References for tcs placement papers:<br><a href =" http://www.campusgate.co.in/2014/07/tcs-latest-placement-papers.html" target="_blank">1.CampusGate</a><br><a href =" http://www.indiabix.com/placement-papers/tcs/" target="_blank">2.Indiabix Placement Papers</a></p>');}
        if(id=="mu"){$('#info').append('<h3 class="box-title">MuSigma</h3><h4><p>Analytics and data-driven decision making have been well recognized as a distinctive competitive advantage in a world of Big Data and increasing business complexity. However, organizations are challenged with scaling the use of analytics and making it an integral part of all business decisions. Mu Sigma addresses this critical need and enables organizations to institutionalize analytics and Decision Sciences in a sustainable manner. We work with market leading organizations across multiple industry verticals solving high impact business problems in key horizontals such as Marketing, Risk and Supply Chain. We provide our clients with a holistic ecosystem of proprietary technology platforms, processes and people, which scales the use of our unique interdisciplinary approach to Decision Sciences. We believe that leveraging data effectively to enable Decision Support requires a combination of Data Engineering, Data Sciences and Decision Sciences.</p><p>Company Link:<a href="http://www.mu-sigma.com/" target="_blank">MUSIGMA</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview<br>References for musigma placement papers:<br><a href ="http://placement.freshersworld.com/mu-sigma-question-papers-and-answers/331400004502" target="_blank">1.Freshersworld</a><br><a href ="http://www.mu-sigma.com/muapt/" target="_blank">2.MuApt</a></p>');}
        if(id=="di"){$('#info').append('<h3 class="box-title">DirectI</h3><h4><p>•	Established in 1998<br>• 1000+ employees<br>• 25+ Internet Software Products for a Global audience<br>• 1,000,000+ Customers and 50,000+ channel partners<br>Directi is a group of Businesses, that develop innovative mass-market Web Products serving millions of Customers worldwide.The combined Product Portfolio of various Directi businesses includes - Communication and Collaboration apps, Social Networking software, Instant messaging, Context Analysis Engines, Antispam and Antivirus Solutions, Large scale Billing and Provisioning platforms, Traffic Monetization Solutions, Online Advertising Solutions, DNS Management Products, Linux and Windows Server Management Software, Web Hosting Control Panels and much more.</p><p>Company Link:<a href=" http://www.directi.com/" target="_blank">DIRECTI</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview<br>References for directi placement papers:<br><a href ="https://www.codechef.com/" target="_blank">1.Codechef</a><br><a href ="http://placement.freshersworld.com/directi-question-papers/candidate-experiences/33131647" target="_blank">2.Freshersworld</a></p>');}
        if(id=="gep"){$('#info').append('<h3 class="box-title">Global e-Procure</h3><h4><p>GEP is a diverse, creative team of people passionate about procurement. We invest ourselves entirely in our client’s success, creating strong collaborative relationships that deliver extraordinary value year after year.We deliver practical, effective services and software that enable procurement leaders to maximize their impact on business operations, strategy and financial performance.That’s just some of the things that we do in our quest to build a beautiful company, enjoy the journey and make a difference. Read more about our mission and vision here.Our clients include market global leaders with far-flung international operations, Fortune 500 and Global 2000 enterprises, leading government and public institutions.<br> Like us, they’ll tell you – Saving is Believing.</p><p>Company Link:<a href="http://www.gep.com/" target="_blank">GEP</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview <br>3. Management and HR Interview</p>');}
        if(id=="vis"){$('#info').append('<h3 class="box-title">Vistaar</h3><h4><p>Vistaar is the leading provider of pricing software for sales, marketing and finance. Vistaar’s pricing software enables companies to achieve pricing best practices through price analytics, price optimization, price list management, and deal management. Vistaar works with the best companies in the world to transform pricing operations into a strategic advantage. For these companies, Vistaar pricing software drives measurable price and margin improvements that deliver profitable growth and maximum shareholder value. <br>Vistaar was founded in 2001 by Sandy Tungare<br>Vistaar provides analytical and planning software for product marketing, product management, pricing, and sales groups.  Our software helps companies implement a data driven approach to price management.</p><p>Company Link:<a href="http://www.vistaar.com/" target="_blank">VISTAAR</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="ig"){$('#info').append('<h3 class="box-title">IGate(Capgemini)</h3><h4><p>IGATE is an IT services company, headquartered in Bridgewater, New Jersey. The firm operates in North America, Asia, Europe, Japan and Australia, providing technology consultancy and services. The firm has over 70 offices and customer delivery centers in North America, Europe, Asia and Australia. Its parent company is capgemini.</p><p>Company Link:<a href="https://www.capgemini.com/" target="_blank">CAPGEMINI</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview<br>References for igate placement papers:<br><a href ="http://www.indiabix.com/placement-papers/igate/3713" target="_blank">1.Indiabix</a><br><a href ="http://www.careerride.com/view.aspx?id=1011" target="_blank">2.Careerride</a></p>');}
        if(id=="bms"){$('#info').append('<h3 class="box-title">Book My Show</h3><h4><p>BookMyShow is India’s biggest online movie and events ticketing brand. The website caters to ticket sales for movies, plays, concerts and sporting events via the online platform. Launched in 1999, it is headquartered in Mumbai, Maharashtra</p><p>Company Link:<a href="http://in.bookmyshow.com/careers/" target="_blank">BMS</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="mir"){$('#info').append('<h3 class="box-title">Mirraw</h3><h4><p>Mirraw India’s largest ethnic store –With over 1 lac listed products, 3 million and counting customers worldwide, our mission is to bring the world’s best ethnic designs to your doorstep. Based out of Fort, Mumbai, Mirraw brings handpicked designs in ethnic jewellery, apparels, accessories & more. Founded by Shailesh Jain &Anup Nair in 2011, our products make our customers look incredible. With a great fan following in India, US & Europe, Mirraw is focused on ethnic wear and has plans to dominate this space in the coming years.</p><p>Company Link:<a href="http://www.mirraw.com" target="_blank">MIRRAW</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Test<br>3. Technical Interview and HR Interview</p>');}
        if(id=="sca"){$('#info').append('<h3 class="box-title">ScaleArc</h3><h4><p>Recently named one of only three Gartner Cool Vendors, ScaleArc is the leading provider of database load balancing software. Our software inserts transparently between applications and databases, creating an agile data tier that provides continuous availability and increased performance for all apps. Our customers also gain instant database scalability and a new level of real-time visibility for their application environments, both on prem and in the cloud.</p><p>Company Link:<a href=" http://www.scalearc.com/" target="_blank">SCALEARC</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Test<br>3. Technical Interview and HR Interview</p>');}
        if(id=="tao"){$('#info').append('<h3 class="box-title">Merilent Inc.</h3><h4><p> Merilent Inc.(TAO) helps Hedge Funds scale their businesses through a dedicated team, excellent processes and cutting-edge technologies. We deliver reliable and innovative software solutions to support the ongoing growth of the Hedge Funds.Founded : 2011.</p><p>Company Link:<a href="http://merilent.com" target="_blank">TAO</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Test<br>3. Technical Interview and HR Interview</p>');}
        if(id=="mind"){$('#info').append('<h3 class="box-title">Mindcraft</h3><h4><p>MindCraft is a Software Solutions and Services organization offering Integration Solutions, Business Intelligence Solutions and Software Infrastructure Management Services.  We  focus on Banking, Insurance, Financial Services and Pharmaceutical sectors, among others, where  we have consistently developed successful products and solution templates. MindCraft stands with its team to provide absolute commitment to its clients, and  this is proved by our highly successful alliances with IBM, Microsoft, Oracle and SAP. These strategic relationships have enabled MindCraft to provide proven technology solutions, to help enterprises attain higher levels of efficiency.</p><p>Company Link:<a href="http://mindcraft.in" target="_blank">MINDCRAFT</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Group Discussion<br>3. Technical Interview and HR Interview</p>');}
        if(id=="atos"){$('#info').append('<h3 class="box-title">ATOS</h3><h4><p>Atos SE (Societas Europaea) is a leader in digital services with pro forma annual revenue of circa € 12 billion and circa 100,000 employees in 72 countries. Serving a global client base, the Group provides Consulting & Systems Integration services, Managed Services & BPO, Cloud operations, Big Data & Cyber-security solutions, as well as transactional services through Worldline, the European leader in the payments and transactional services industry. With its deep technology expertise and industry knowledge, the Group works with clients across different business sectors: Defense, Financial Services, Health, Manufacturing, Media, Utilities, Public sector, Retail, Telecommunications, and Transportation.Atos is focused on business technology that powers progress and helps organizations to create their firm of the future. The Group is the Worldwide Information Technology Partner for the Olympic & Paralympic Games and is listed on the Euronext Paris market. Atos operates under the brands Atos, Atos Consulting, Atos Worldgrid, Bull, Canopy, Unify and Worldline.</p><p>Company Link:<a href="http://atos.net/en-us/home.html" target="_blank">ATOS</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="emp"){$('#info').append('<h3 class="box-title">e-Emphasys</h3><h4><p> e-Emphasys Technologies is a global IT solutions company dedicated to helping Equipment Dealers and Rental companies achieve profitable growth.e-Emphasys solutions provide the functionality, scalability and flexibility to address today’s and tomorrow’s business challenges, while empowering enterprises for even greater success. We’re proud that our strategic eXtend solutions and services enable companies to improve performance, increase efficiency and build a sustainable competitive advantage. Customers who have implemented eXtend typically experience significant benefits - including to their bottom-lines. We’re pleased to be a partner in the long-term success of our customers.</p><p>Company Link:<a href="http://www.e-emphasys.com/" target="_blank">e-EMPHASYS</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="all"){$('#info').append('<h3 class="box-title">Allerin</h3><h4><p>Allerin is a premier Ruby on Rails developer; we are at the forefront of providing database services for your IT needs using a range of languages including Java, Ruby on Rails and others.We have expert executives in the popular and advanced database platforms.</p><p>Company Link:<a href="https://www.allerin.com/" target="_blank">ALLERIN</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="qk"){$('#info').append('<h3 class="box-title">QualityKiosk</h3><h4><p>Founded in 2000 by graduates of IIT Kanpur in Mumbai, QualityKiosk has grown into 500+ employee organization servicing more than 50 of the Fortune 100 of India and 18 of the Fortune 500 companies of the globe.We are one of the largest independent software testing houses and have global footprint in Middle-East, APAC and USA.QualityKiosk has complete focus on quality management and testing combined with deep expertise in the development lifecycle. This enables us to provide practical services that help customers improve the way they build and deploy applications. We cover customer’s entire gamut of Quality Assurance across the application lifecycle right from the Requirements stage to Post Go live.QualityKiosk dedicated line of businesses i.e. Functional Testing, Performance Engineering and APM helps you to accelerate application transformation by empowering application teams to plan, build, test and sustain for the release of applications, components, and services with fewer delays and better quality.</p><p>Company Link:<a href="http://www.qualitykiosk.com/" target="_blank">QUALITYKIOSK</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="rav"){$('#info').append('<h3 class="box-title">Rave Technologies</h3><h4><p>From its inception, Rave Technologies – a pure play Software Product Engineering Services Provider, has earned a reputation for delighting its customers by consistently surpassing expectations and helping them deliver robust, market ready software products that meet the highest standards of engineering and user experience.As a one stop service provider for Software product organizations, Rave provides services to fulfil all the requirements ranging from defining or optimizing architecture, product migration, robust development, testing (including automated, manual, performance, regression, and load) and Usability engineering.Rave Technologies is distinguished by its unwavering commitment to deliver value by focusing on grooming efficient and talented personnel, innovation, technology strengths and quality practices.Over past decades Rave has delivered over 265 product releases & successfully built 10 EDCs in the domains of Publishing, Pharma, Healthcare, Retail, Insurance, Finance, Mortgage, HR, Workforce Management, Business Intelligence and Content Management.</p><p>Company Link:<a href="https://www.rave-tech.com/" target="_blank">RAVE TECHNOLOGIES</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview</p>');}
        if(id=="amd"){$('#info').append('<h3 class="box-title">Amdocs</h3><h4><p>Amdocs is the market leader in customer experience software solutions and services for the world’s largest communications, entertainment and media service providers. Its portfolio powers The New World of Customer Experience™, where a wide array of innovative and personalized services are delivered seamlessly to end users, regardless of device or network. For more than 30 years, Amdocs solutions, which include BSS, OSS, network control and optimization, coupled with our professional and managed services, have accelerated business value for its customers by streamlining complex operating environments, reducing costs and speeding time to market for new products and services. Amdocs and its more than 24,000 employees serve customers in over 90 countries. Listed on the NASDAQ Global Select Market, Amdocs had revenue of $3.6 billion in fiscal 2015.</p><p>Company Link:<a href="http://www.amdocs.com/pages/homepage.aspx" target="_blank">AMDOCS</a><br>Placement Process:<br> 1. Aptitude Test<br>2. Technical Interview and HR Interview<br>References for amdocs placement papers:<br><a href ="http://www.indiabix.com/placement-papers/amdocs/6103" target="_blank">1.Indiabix</a><br><a href ="http://www.careerride.com/post/amdocs-placement-paper-interview-experience-exam-pattern-13.aspx" target="_blank">2.Careerride</a></p>');}

    })
})
</script>
<!-- AdminLTE for demo purposes -->
<script src=" dist/js/demo.js"></script>
</body>
</html>
