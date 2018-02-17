<?php

include "proses/pr_getdata.php";


 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>

   <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
  integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
  crossorigin=""></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>

<style>
  #mapid { height: 600px; }
</style>

  <title>AdminLTE 2 | Dashboard</title>
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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
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
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu Utama</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Menu Satu</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Menu Dua</a></li>
          </ul>
        </li>


        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Pilih Lokasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a onclick="showall()" href="#"><i class="fa fa-circle-o"></i> Semua Lokasi</a></li>
            <li><a onclick="padang()" href="#"><i class="fa fa-circle-o"></i> Padang</a></li>
            <li><a onclick="pesisir()"href="#"><i class="fa fa-circle-o"></i> Pesisir Selatan</a></li>
            <li><a onclick="limapuluh()" href="#"><i class="fa fa-circle-o"></i> Lima Puluh Kota</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">

        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-8 connectedSortable">
          <div id="mapid" class="">

          </div>



        </section>

        <section class="col-lg-4">

        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
<script>
var mymap = L.map('mapid').setView([-0.924186, 100.425691], 8);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqOXNxdHF4bjBzb2czM2p6cmVzZzBwcXgifQ.l38Ez-rF1XCin25iUIynoQ'
}).addTo(mymap);

// Menampilkan hasil digitasi
var argeojson = <?php echo json_encode($hasil) ?>;
// L.geoJSON(argeojson).addTo(mymap);

var poli1;
var poli2;
var poli3;
console.log(argeojson);
for(var i = 0; i < argeojson.features.length; i++){

        if (argeojson.features[i].properties.nama_kab=='Pesisir selatan' )
        {

        // console.log(argeojson.features[i].properties.gid);
        poli1=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli1.setStyle({fillColor: '#000000'});
        poli1.setStyle({fillOpacity: 8});
        poli1.setStyle({color: '#ff0000'});
        poli1.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> PESISIR SELATAN</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");
      }
      else if(argeojson.features[i].properties.nama_kab=='Lima Puluh Kota')
      {
        // console.log(argeojson.features[i].properties.gid);
        poli2=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli2.setStyle({fillColor: '#0000ff'});
        poli2.setStyle({fillOpacity: 8});
        poli2.setStyle({color: '#ff0000'});
                poli2.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> LIMA PULUH KOTA</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");
      }
      else {

        poli3=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli3.setStyle({fillColor: '#ff00e1'});
        poli3.setStyle({fillOpacity: 8});
        poli3.setStyle({color: '#ff0000'});
              poli.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> PADANG</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");

      }
}

function remove()
{

    poli1.eachLayer(function (layer) {
      poli1.removeLayer(layer);
  });

  poli2.eachLayer(function (layer) {
    poli2.removeLayer(layer);
  });

  poli3.eachLayer(function (layer) {
    poli3.removeLayer(layer);
  });
}


function padang()
{

// Panggil Fungsi Remove terlebih Dahulu
remove();
// Tampilkan Wilayah Padang Saja
for(var i = 0; i < argeojson.features.length; i++){
if (argeojson.features[i].properties.nama_kab=='Padang' )
{

// console.log(argeojson.features[i].properties.gid);
poli3=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
poli3.setStyle({fillColor: '#ff00e1'});
poli3.setStyle({fillOpacity: 8});
poli3.setStyle({color: '#ff0000'});
      poli.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> PADANG</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");
}

}


}


function pesisir()
{
  remove();
  // Tampilkan wilayah PESISIR
  for(var i = 0; i < argeojson.features.length; i++){
  if (argeojson.features[i].properties.nama_kab=='Pesisir selatan' )
  {

  poli1=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
  poli1.setStyle({fillColor: '#000000'});
  poli1.setStyle({fillOpacity: 8});
  poli1.setStyle({color: '#ff0000'});
  poli1.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> PESISIR SELATAN</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");

 }
}
}

function limapuluh()
{
  remove();
  for(var i = 0; i < argeojson.features.length; i++){
  if (argeojson.features[i].properties.nama_kab=='Lima Puluh Kota' )
  {

    poli2=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
    poli2.setStyle({fillColor: '#0000ff'});
    poli2.setStyle({fillOpacity: 8});
    poli2.setStyle({color: '#ff0000'});
            poli2.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> LIMA PULUH KOTA</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");

 }
}
}

function showall()
{
  remove();

  for(var i = 0; i < argeojson.features.length; i++){

          if (argeojson.features[i].properties.nama_kab=='Pesisir selatan' )
          {

          // console.log(argeojson.features[i].properties.gid);
          poli1=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
          poli1.setStyle({fillColor: '#000000'});
          poli1.setStyle({fillOpacity: 8});
          poli1.setStyle({color: '#ff0000'});
          poli1.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> PESISIR SELATAN</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");
        }
        else if(argeojson.features[i].properties.nama_kab=='Lima Puluh Kota')
        {
          // console.log(argeojson.features[i].properties.gid);
          poli2=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
          poli2.setStyle({fillColor: '#0000ff'});
          poli2.setStyle({fillOpacity: 8});
          poli2.setStyle({color: '#ff0000'});
                  poli2.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> LIMA PULUH KOTA</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");
        }
        else {

          poli3=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
          poli3.setStyle({fillColor: '#ff00e1'});
          poli3.setStyle({fillOpacity: 8});
          poli3.setStyle({color: '#ff0000'});
                poli.bindPopup("<h3><b>Info Ternak!</b></h3><br>Disini Info Seputar Ternak<br/><b> PADANG</b> <br/><div class='box'><div class='box-header with-border'><h3 class='box-title'>Bordered Table</h3></div><div class='box-body'><table class='table table-bordered'><tr><th style='width: 10px'>#</th><th>Task</th><th>Progress</th><th style='width: 40px'>Label</th></tr><tr><td>1.</td><td>Update software</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-danger' style='width: 55%'></div></div></td><td><span class='badge bg-red'>55%</span></td></tr><tr><td>2.</td><td>Clean database</td><td><div class='progress progress-xs'><div class='progress-bar progress-bar-yellow' style='width: 70%'></div></div></td><td><span class='badge bg-yellow'>70%</span></td></tr><tr><td>3.</td><td>Cron job running</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-primary' style='width:30%'></div></div></td><td><span class='badge bg-light-blue'>30%</span></td></tr><tr><td>4.</td><td>Fix and squish bugs</td><td><div class='progress progress-xs progress-striped active'><div class='progress-bar progress-bar-success' style='width: 90%'></div></div></td><td><span class='badge bg-green'>90%</span></td></tr></table></div><div class='box-footer clearfix'><ul class='pagination pagination-sm no-margin pull-right'><li><a href='#'>&laquo;</a></li><li><a href='#'>1</a></li><li><a href='#'>2</a></li><li><a href='#'>3</a></li><li><a href='#'>&raquo;</a></li></ul></div></div>");

        }
  }

}
</script>
</body>
</html>
