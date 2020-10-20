<!DOCTYPE html>
<html lang="en">
<head>
<title> Management Goods Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="manifest" href="site.webmanifest"> -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="target-free-admin-template/assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="target-free-admin-template/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="target-free-admin-template/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="target-free-admin-template/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="target-free-admin-template/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="target-free-admin-template/assets/js/Lightweight-Chart/cssCharts.css"> 
    
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html">
                <img src="assetscustomer/img/logo_jne.png" alt=""> 
                </a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>
            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>				
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b></b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.html" class="waves-effect waves-dark"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
             
                    <li>
                        <a href="form.html" class="active-menu waves-effect waves-dark"><i class="fa fa-edit"></i> Transaction </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Transaction
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Transaction</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>

<div class="input-field col s12">
   <label for="id">ID Barang</label>
<input id="id" type="text" class="form-control" name ="idbarang">

</div>
    </div>
    <div class="row">
<div class="input-field col s12">
  <label for="sender">Sender Name</label>
<input id="sender" type="text" class="form-control" name ="sendername">

</div>
    </div>
    <div class="row">
    <div class="input-field col s12">
      <label for="recepient">Recepient Name</label>
<input id="recepient" type="text" class="form-control" name ="recepientname">

</div>
    </div>
    <div class="row">
    <div class="input-field col s12">
      <label for="barang">Nama Barang</label>
<input id="barang" type="text" class="form-control" name ="namabarang">

<div class="input-field col s12">
   <label for="exampleFormControlSelect1">Jenis Barang</label>
 <select  name="jenisService" class="form-control" id="exampleFormControlSelect1">
 <option value="Electronics">Electronics</option>
<option value="Otomotif">Otomotif</option>
 <option value="Fashion">Fashion</option>
 <option value="Groceries">Groceries</option>
 <option value="Home">Home</option>
</select>                                       
</div>

</div>
    </div>
    <div class="row">
    <div class="input-field col s12">
      <label for="jenis">Berat Barang</label>
<input id="berat" type="text" class="form-control" name ="beratbarang">
</body>