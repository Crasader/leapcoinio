

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Leapcoin.io</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>


            <link rel="stylesheet" href="modal.css">
            <link rel="stylesheet" href="sidebaring.css">


   


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CO</b>IN</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LEAP</b>COIN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
           
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
           
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/goldleap.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Leapcoin.io</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/goldleap.png" class="img-circle" alt="User Image">
                    <p style="font-size: 12px"><?php if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                            
                            
                      }else{
                       
                      }?></p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Login</a>
                </div>
                <div class="pull-right">
                  <a href="login.php" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="img/goldleap.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="font-size: 12px"><?php if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                            
                            
                      }else{
                       
                      }?></p>
          <p><a href="#"><i class="fa fa-circle text-success"></i> Online</a></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">LEAPCOIN.IO/DASHBO</li>

       <li>
          <a href="sign3.php">
            <i class="fa fa-home"></i> <span class="sidebaring">Home</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


          <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span class="sidebaring">Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="ico.php">
            <i class="fa fa-th"></i> <span class="sidebaring">ICO</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        
        <li>
          <a href="wallets.php">
            <i class="fa fa-th"></i> <span class="sidebaring">Wallet</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green" ><b style="font-size: 16px;">New</b></small>
            </span>
          </a>
        </li>


        <li>
          <a href="exchange.php">
            <i class="fa fa-pie-chart"></i> <span class="sidebaring">Exchange</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


         <li>
          <a href="transaction.php">
            <i class="fa fa-laptop"></i> <span class="sidebaring">Transaction</span>
            <span class="pull-right-container">
                            <small class="label pull-right bg-green" ><b style="font-size: 16px;">New</b></small>

            </span>
          </a>
        </li>

        <li>
          <a href="network.php">
            <i class="fa fa-share-alt-square"></i> <span class="sidebaring">Network</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


      
        <li>
          <a href="security.php">
            <i class="fa fa-unlock"></i> <span class="sidebaring">Security</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"><b style="font-size: 16px;">Low</b></small>
            </span>
          </a>
        </li>

        <li>
          <a href="support.php">
            <i class="fa  fa-hand-spock-o"></i> <span class="sidebaring">Support</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li>
          <a href="login.php">
            <i class="fa  fa-reply-all"></i> <span class="sidebaring">Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="col-md-3 col-xs-12 col-sm-12">
            
              <h2 style="font-family: sans-serif;">Dashboard</h2>

           
        </div>

         <div class="col-md-3 col-xs-12 col-sm-12">
            
                            <div class="btcwdgt-price"  bw-theme="light"></div>

           
        </div>

         <div class="col-md-3 col-xs-12 col-sm-12">
            
          <div class="btcwdgt-price"  bw-theme="light" bw-cash="true"></div>

           
        </div>

         <div class="col-md-3 col-xs-12 col-sm-12">
            
              <div class="btcwdgt-price" bw-theme="light" bw-cur="eur"></div>

           
        </div>



         
    </section><hr/>
    <!-- /.content -->

    <div class="row" style="margin-top: 100px;">
      
    </div>

        <div class="container">
                 <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="box box-solid" style="background-color: grey;">
            <!-- /.box-header -->
            <div class="box-body" style="background-color: grey;">
              <p><img src="img/goldleap.png" style="height: 112px;"><b style="padding-left: 30px; font-size: 15px;">Loading.....................</b></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


                                     


     
        <!-- ./col -->
      </div>
        </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>
function myFunction1() {
  var copyText = document.getElementById("myInput1");
  copyText.select();
  document.execCommand("Copy");
  
}
</script>

<script>
function myFunction2() {
  var copyText = document.getElementById("myInput2");
  copyText.select();
  document.execCommand("Copy");
  
}
</script>

<script>
function myFunction3() {
  var copyText = document.getElementById("myInput3");
  copyText.select();
  document.execCommand("Copy");
  
}
</script>

<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>

    <script type="text/javascript" src="modal.js"></script> 

        <script type="text/javascript" src="modal2.js"></script> 

                <script type="text/javascript" src="modal3.js"></script> 




<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
