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

  <title>Data Peternakan</title>
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
      <span class="logo-lg"><b>Ternak</b>GIS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

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
            <li><a href="#"><i class="fa fa-circle-o"></i> Menu Satu</a></li>
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
          <div id="chartpertama">

            <script src="plugin_chart/canvasjs.min.js"></script>

            <div id="chartContainer" style="height: 200px; max-width: 300px; margin: 0px auto;"></div>
            <br>
            <div id="chartContainer1" style="padang-top:20px; height: 200px; max-width: 300px; margin: 0px auto;"></div>


          </div>

        </section>
      </div>


       <div class="panel panel-nfo">

         <div class="panel-head">
           <h2>Data Diagram</h2>

         </div>

         <div class="panel-body">
          <div id="chartContainerAll" style="margin-left:-100px;height: 300px; max-width: 800px; margin: 0px auto;"></div>
          <div id="chartContainerAll1" style="margin-left:-100px;height: 300px; max-width: 800px; margin: 0px auto;"></div>
         </div>

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
        poli1.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> PESISIR SELATAN</b> <br/><h4>Suhu (OC) Dt.Rendah</h4><table><th>Waktu (WIB)</th><th>Suhu</th><tr><td>7</td><td>26.5</td></tr><tr><td>10</td><td>32.4</td></tr><tr><td>13</td><td>35.1</td></tr><tr><td>16</td><td>33.5</td></tr><tr><td>19</td><td>28.9</td></tr></table><h4>THI DT Rendah</h4><table><th>Waktu (WIB)</th><th>THI</th><tr><td>7</td><td>76.7</td></tr><tr><td>10</td><td>83.7</td></tr><tr><td>13</td><td>85.8</td></tr><tr><td>16</td><td>84.8</td></tr><tr><td>19</td><td>76.7</td></tr></table>");

        }
      else if(argeojson.features[i].properties.nama_kab=='Lima Puluh Kota')
      {
        // console.log(argeojson.features[i].properties.gid);
        poli2=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli2.setStyle({fillColor: '#0000ff'});
        poli2.setStyle({fillOpacity: 8});
        poli2.setStyle({color: '#ff0000'});
          poli2.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> LIMA PULUH KOTA</b><br/><h4>Suhu (OC) Dt.Tinggi</h4><table><th> Waktu(WIB)</th><th>Suhu</th><tr><td>7</td><td>23.8</td></tr><tr><td>10</td><td>25.0</td></tr><tr><td>13</td><td>26.8</td></tr><tr><td>16</td><td>27.1</td></tr><tr><td>19</td><td>24.4</td></tr></table><h4>THI Dt.Tinggi</h4><table><th> Waktu(WIB)</th><th>THI</th><tr><td>7</td><td>72.3</td></tr><tr><td>10</td><td>73.7</td></tr><tr><td>13</td><td>75.9</td></tr><tr><td>16</td><td>76.3</td></tr><tr><td>19</td><td>73.3</td></tr></table>");

      }
      else {

        poli3=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli3.setStyle({fillColor: '#ff00e1'});
        poli3.setStyle({fillOpacity: 8});
        poli3.setStyle({color: '#ff0000'});
            poli3.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> PADANG</b> <br/><h4>Suhu (OC) Dt.Rendah</h4><table><th>Waktu (WIB)</th><th>Suhu</th><tr><td>7</td><td>26.6</td></tr><tr><td>10</td><td>29.8</td></tr><tr><td>13</td><td>32.3</td></tr><tr><td>16</td><td>31.7</td></tr><tr><td>19</td><td>29.4</td></tr></table><h4>THI DT Rendah</h4><table><th>Waktu (WIB)</th><th>THI</th><tr><td>7</td><td>72.6</td></tr><tr><td>10</td><td>80.3</td></tr><tr><td>13</td><td>82.3</td></tr><tr><td>16</td><td>81.6</td></tr><tr><td>19</td><td>79.4</td></tr></table>");


        }
}
// Menampilkan data diagram masing-masing daerah yang didigitasi


function chartall()
{

  	var chart = new CanvasJS.Chart("chartContainerAll", {
  	title:{
  		text: "Data Populasi Sapi Potong 2005-2014"
  	},
  	axisY:[{
  		title: "Populasi (Ekor)",
  		lineColor: "#C24642",
  		tickColor: "#C24642",
  		labelFontColor: "#C24642",
  		titleFontColor: "#C24642",
  		suffix: "k"
  	},
  	{

  	}],
  	axisY2: {

  	},
  	toolTip: {
  		shared: true
  	},
  	legend: {
  		cursor: "pointer",
  		itemclick: toggleDataSeries
  	},
  	data: [{
  		type: "line",
  		name: "Padang",
  		color: "#369EAD",
  		showInLegend: true,
  		axisYIndex: 1,
  		dataPoints: [
  			{ x: 2005, y: 23.064 },
  			{ x: 2006, y: 26.442 },
  			{ x: 2007, y: 26.574 },
  			{ x: 2008, y: 27.966 },
  			{ x: 2009, y: 29.338 },
  			{ x: 2010, y: 29.643 },
  			{ x: 2011, y: 14.002 },
  			{ x: 2012, y: 14.994 },
  			{ x: 2013, y: 19.902 },
  			{ x: 2014, y: 20.300 }
  		]
  	},
  	{
  		type: "line",
  		name: "Pesisir Selatan",
  		color: "#C24642",
  		axisYIndex: 0,
  		showInLegend: true,
  		dataPoints: [
  			{ x: 2005, y: 79.422 },
  			{ x: 2006, y: 82.396 },
  			{ x: 2007, y: 84.198 },
  			{ x: 2008, y: 89.995 },
  			{ x: 2009, y: 91.778 },
  			{ x: 2010, y: 94.218 },
  			{ x: 2011, y: 77.383 },
  			{ x: 2012, y: 78.998 },
  			{ x: 2013, y: 79.266 },
  			{ x: 2014, y: 81.644 }

  		]
  	},
  	{
  		type: "line",
  		name: "Lima Puluh Kota",
  		color: "#7F6084",
  		axisYType: "secondary",
  		showInLegend: true,
  		dataPoints: [
  			{ x: 2005, y: 52.382 },
  			{ x: 2006, y: 57.306 },
  			{ x: 2007, y: 56.416 },
  			{ x: 2008, y: 61.735 },
  			{ x: 2009, y: 63.214 },
  			{ x: 2010, y: 66.232 },
  			{ x: 2011, y: 33.278 },
  			{ x: 2012, y: 33.978 },
  			{ x: 2013, y: 32.958 },
  			{ x: 2014, y: 34.833 }

  		]
  	}]
  });
  chart.render();

  function toggleDataSeries(e) {
  	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
  		e.dataSeries.visible = false;
  	} else {
  		e.dataSeries.visible = true;
  	}
  	e.chart.render();
  }


  var chart1 = new CanvasJS.Chart("chartContainerAll1", {
  title:{
    text: "Data Pemotongan Sapi Potong 2005-2014"
  },
  axisY:[{
    title: "Pemotongan (Ekor)",
    lineColor: "#C24642",
    tickColor: "#C24642",
    labelFontColor: "#C24642",
    titleFontColor: "#C24642",
    suffix: "k"
  },
  {

  }],
  axisY2: {

  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    itemclick: toggleDataSeries
  },
  data: [{
    type: "line",
    name: "Padang",
    color: "#369EAD",
    showInLegend: true,
    axisYIndex: 1,
    dataPoints: [
      { x: 2005, y: 14.971 },
      { x: 2006, y: 4.888 },
      { x: 2007, y: 19.469 },
      { x: 2008, y: 21.220 },
      { x: 2009, y: 21.986 },
      { x: 2010, y: 18.203 },
      { x: 2011, y: 14.567 },
      { x: 2012, y: 15.765 },
      { x: 2013, y: 18.902 },
      { x: 2014, y: 19.493 }
    ]
  },
  {
    type: "line",
    name: "Pesisir Selatan",
    color: "#C24642",
    axisYIndex: 0,
    showInLegend: true,
    dataPoints: [
      { x: 2005, y: 6.073 },
      { x: 2006, y: 16.688 },
      { x: 2007, y: 6.256 },
      { x: 2008, y: 7.946 },
      { x: 2009, y: 6.476 },
      { x: 2010, y: 6.635 },
      { x: 2011, y: 5.532 },
      { x: 2012, y: 5.993 },
      { x: 2013, y: 6.945 },
      { x: 2014, y: 7.160 }

    ]
  },
  {
    type: "line",
    name: "Lima Puluh Kota",
    color: "#7F6084",
    axisYType: "secondary",
    showInLegend: true,
    dataPoints: [
      { x: 2005, y: 3.663 },
      { x: 2006, y: 11.019 },
      { x: 2007, y: 4.137 },
      { x: 2008, y: 4.655 },
      { x: 2009, y: 4.270 },
      { x: 2010, y: 5.750 },
      { x: 2011, y: 4.255 },
      { x: 2012, y: 4.761 },
      { x: 2013, y: 4.816 },
      { x: 2014, y: 4.960 }

    ]
  }]
  });
  chart1.render();

  function toggleDataSeries(e) {
  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  e.chart.render();
  }


}

function chartpadang()
{

  var hapus= document.getElementById("chartContainerAll").value="";
  var hapus1= document.getElementById("chartContainerAll1").value="";

  var chart = new CanvasJS.Chart("chartContainer", {
  	animationEnabled: true,
  	theme: "light2",
  	title:{
  		text: "Populasi Sapi Potong 2005-2014"
  	},
  	axisY:{
  		includeZero: false
  	},
  	data: [{
  		type: "line",
  		dataPoints: [
  			{ y: 23.064 },
  			{ y: 26.442},
  			{ y: 26.574 },
  			{ y: 27.966 },
  			{ y: 29.338 },
  			{ y: 29.643 , indexLabel: "highest",markerColor: "red", markerType: "triangle" },
  			{ y: 14.002 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
  			{ y: 14.994 },
  			{ y: 19.902 },
  			{ y: 20.300 }
  		]
  	}]
  });
  chart.render();




  var chart1 = new CanvasJS.Chart("chartContainer1", {
  	animationEnabled: true,
  	theme: "light2",
  	title:{
  		text: "Pemotongan Ternak Sapi Potong 2005-2014"
  	},
  	axisY:{
  		includeZero: false
  	},
  	data: [{
  		type: "line",
  		dataPoints: [
  			{ y: 14.971 },
  			{ y: 4.888 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
  			{ y: 19.469 },
  			{ y: 21.220 },
  			{ y: 21.986 , indexLabel: "highest",markerColor: "red", markerType: "triangle" },
  			{ y: 18.203 },
  			{ y: 14.567 },
  			{ y: 15.765 },
  			{ y: 18.902 },
  			{ y: 19.493 }
  		]
  	}]
  });
  chart1.render();


}

function chartlimapuluh()
{


    var hapus= document.getElementById("chartContainerAll").value="";
    var hapus1= document.getElementById("chartContainerAll1").value="";


    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Populasi Sapi Potong 2005-2014"
    	},
    	axisY:{
    		includeZero: false
    	},
    	data: [{
    		type: "line",
    		dataPoints: [
    			{ y: 52.382 },
    			{ y: 57.306},
    			{ y: 56.416 },
    			{ y: 61.735 },
    			{ y: 63.214 },
    			{ y: 66.232, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
    			{ y: 33.278 },
    			{ y: 33.978 },
    			{ y: 32.958 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
    			{ y: 34.833 }
    		]
    	}]
    });
    chart.render();




    var chart1 = new CanvasJS.Chart("chartContainer1", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Pemotongan Ternak Sapi Potong 2005-2014"
    	},
    	axisY:{
    		includeZero: false
    	},
    	data: [{
    		type: "line",
    		dataPoints: [
    			{ y: 3.663  , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
    			{ y: 11.019, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
    			{ y: 4.137 },
    			{ y: 4.655 },
    			{ y: 4.270 },
    			{ y: 5.750 },
    			{ y: 4.255 },
    			{ y: 4.761 },
    			{ y: 4.816 },
    			{ y: 4.960 }
    		]
    	}]
    });
    chart1.render();



}

function chartpesisir()
{



    var hapus= document.getElementById("chartContainerAll").value="";
    var hapus1= document.getElementById("chartContainerAll1").value="";



    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Populasi Sapi Potong 2005-2014"
    	},
    	axisY:{
    		includeZero: false
    	},
    	data: [{
    		type: "line",
    		dataPoints: [
    			{ y: 79.422 },
    			{ y: 82.396},
    			{ y: 84.198},
    			{ y: 89.995 },
    			{ y: 91.778 },
    			{ y: 94.218 , indexLabel: "highest",markerColor: "red", markerType: "triangle" },
    			{ y: 77.383 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
    			{ y: 78.998 },
    			{ y: 79.266 },
    			{ y: 81.644 }
    		]
    	}]
    });
    chart.render();




    var chart1 = new CanvasJS.Chart("chartContainer1", {
    	animationEnabled: true,
    	theme: "light2",
    	title:{
    		text: "Pemotongan Ternak Sapi Potong 2005-2014"
    	},
    	axisY:{
    		includeZero: false
    	},
    	data: [{
    		type: "line",
    		dataPoints: [
    			{ y: 6.073 },
    			{ y: 16.688 , indexLabel: "highest",markerColor: "red", markerType: "triangle"},
    			{ y: 6.256 },
    			{ y: 7.964 },
    			{ y: 6.476 },
    			{ y: 6.635 },
    			{ y: 5.532 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross"},
    			{ y: 5.993 },
    			{ y: 6.945  },
    			{ y: 7.160 }
    		]
    	}]
    });
    chart1.render();



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
chartpadang();
// Tampilkan Wilayah Padang Saja
for(var i = 0; i < argeojson.features.length; i++){
if (argeojson.features[i].properties.nama_kab=='Padang' )
{

// console.log(argeojson.features[i].properties.gid);
poli3=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
poli3.setStyle({fillColor: '#ff00e1'});
poli3.setStyle({fillOpacity: 8});
poli3.setStyle({color: '#ff0000'});
poli3.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> PADANG</b> <br/><h4>Suhu (OC) Dt.Rendah</h4><table><th>Waktu (WIB)</th><th>Suhu</th><tr><td>7</td><td>26.6</td></tr><tr><td>10</td><td>29.8</td></tr><tr><td>13</td><td>32.3</td></tr><tr><td>16</td><td>31.7</td></tr><tr><td>19</td><td>29.4</td></tr></table><h4>THI DT Rendah</h4><table><th>Waktu (WIB)</th><th>THI</th><tr><td>7</td><td>72.6</td></tr><tr><td>10</td><td>80.3</td></tr><tr><td>13</td><td>82.3</td></tr><tr><td>16</td><td>81.6</td></tr><tr><td>19</td><td>79.4</td></tr></table>");

}

}


}


function pesisir()
{
  remove();
  chartpesisir();
  // Tampilkan wilayah PESISIR
  for(var i = 0; i < argeojson.features.length; i++){
  if (argeojson.features[i].properties.nama_kab=='Pesisir selatan' )
  {

  poli1=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
  poli1.setStyle({fillColor: '#000000'});
  poli1.setStyle({fillOpacity: 8});
  poli1.setStyle({color: '#ff0000'});
  poli1.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> PESISIR SELATAN</b> <br/><h4>Suhu (OC) Dt.Rendah</h4><table><th>Waktu (WIB)</th><th>Suhu</th><tr><td>7</td><td>26.5</td></tr><tr><td>10</td><td>32.4</td></tr><tr><td>13</td><td>35.1</td></tr><tr><td>16</td><td>33.5</td></tr><tr><td>19</td><td>28.9</td></tr></table><h4>THI DT Rendah</h4><table><th>Waktu (WIB)</th><th>THI</th><tr><td>7</td><td>76.7</td></tr><tr><td>10</td><td>83.7</td></tr><tr><td>13</td><td>85.8</td></tr><tr><td>16</td><td>84.8</td></tr><tr><td>19</td><td>76.7</td></tr></table>");


  }
}
}

function limapuluh()
{
  remove();
  chartlimapuluh();
  for(var i = 0; i < argeojson.features.length; i++){
  if (argeojson.features[i].properties.nama_kab=='Lima Puluh Kota' )
  {

    poli2=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
    poli2.setStyle({fillColor: '#0000ff'});
    poli2.setStyle({fillOpacity: 8});
    poli2.setStyle({color: '#ff0000'});
    poli2.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> LIMA PULUH KOTA</b><br/><h4>Suhu (OC) Dt.Tinggi</h4><table><th> Waktu(WIB)</th><th>Suhu</th><tr><td>7</td><td>23.8</td></tr><tr><td>10</td><td>25.0</td></tr><tr><td>13</td><td>26.8</td></tr><tr><td>16</td><td>27.1</td></tr><tr><td>19</td><td>24.4</td></tr></table><h4>THI Dt.Tinggi</h4><table><th> Waktu(WIB)</th><th>THI</th><tr><td>7</td><td>72.3</td></tr><tr><td>10</td><td>73.7</td></tr><tr><td>13</td><td>75.9</td></tr><tr><td>16</td><td>76.3</td></tr><tr><td>19</td><td>73.3</td></tr></table>");


 }
}
}

function showall()
{
  chartall();
  remove();

  for(var i = 0; i < argeojson.features.length; i++){

          if (argeojson.features[i].properties.nama_kab=='Pesisir selatan' )
          {

          // console.log(argeojson.features[i].properties.gid);
          poli1=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
          poli1.setStyle({fillColor: '#000000'});
          poli1.setStyle({fillOpacity: 8});
          poli1.setStyle({color: '#ff0000'});
          poli1.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> PESISIR SELATAN</b> <br/><h4>Suhu (OC) Dt.Rendah</h4><table><th>Waktu (WIB)</th><th>Suhu</th><tr><td>7</td><td>26.5</td></tr><tr><td>10</td><td>32.4</td></tr><tr><td>13</td><td>35.1</td></tr><tr><td>16</td><td>33.5</td></tr><tr><td>19</td><td>28.9</td></tr></table><h4>THI DT Rendah</h4><table><th>Waktu (WIB)</th><th>THI</th><tr><td>7</td><td>76.7</td></tr><tr><td>10</td><td>83.7</td></tr><tr><td>13</td><td>85.8</td></tr><tr><td>16</td><td>84.8</td></tr><tr><td>19</td><td>76.7</td></tr></table>");

          }
        else if(argeojson.features[i].properties.nama_kab=='Lima Puluh Kota')
        {
          // console.log(argeojson.features[i].properties.gid);
          poli2=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
          poli2.setStyle({fillColor: '#0000ff'});
          poli2.setStyle({fillOpacity: 8});
          poli2.setStyle({color: '#ff0000'});
                  poli2.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> LIMA PULUH KOTA</b><br/><h4>Suhu (OC) Dt.Tinggi</h4><table><th> Waktu(WIB)</th><th>Suhu</th><tr><td>7</td><td>23.8</td></tr><tr><td>10</td><td>25.0</td></tr><tr><td>13</td><td>26.8</td></tr><tr><td>16</td><td>27.1</td></tr><tr><td>19</td><td>24.4</td></tr></table><h4>THI Dt.Tinggi</h4><table><th> Waktu(WIB)</th><th>THI</th><tr><td>7</td><td>72.3</td></tr><tr><td>10</td><td>73.7</td></tr><tr><td>13</td><td>75.9</td></tr><tr><td>16</td><td>76.3</td></tr><tr><td>19</td><td>73.3</td></tr></table>");
        }
        else {

          poli3=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
          poli3.setStyle({fillColor: '#ff00e1'});
          poli3.setStyle({fillOpacity: 8});
          poli3.setStyle({color: '#ff0000'});
                poli3.bindPopup("<h3><b>Info Lingkungan!</b></h3><b> PADANG</b> <br/><h4>Suhu (OC) Dt.Rendah</h4><table><th>Waktu (WIB)</th><th>Suhu</th><tr><td>7</td><td>26.6</td></tr><tr><td>10</td><td>29.8</td></tr><tr><td>13</td><td>32.3</td></tr><tr><td>16</td><td>31.7</td></tr><tr><td>19</td><td>29.4</td></tr></table><h4>THI DT Rendah</h4><table><th>Waktu (WIB)</th><th>THI</th><tr><td>7</td><td>72.6</td></tr><tr><td>10</td><td>80.3</td></tr><tr><td>13</td><td>82.3</td></tr><tr><td>16</td><td>81.6</td></tr><tr><td>19</td><td>79.4</td></tr></table>");

        }
  }

}



</script>


<script>




</script>
</body>
</html>
