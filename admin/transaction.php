<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Management transaction Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
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
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i
                            class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i
                            class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i
                            class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i
                            class="fa fa-user fa-fw"></i> <b></b> <i
                            class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.html" class="waves-effect waves-dark"><i class="fa fa-dashboard"></i>
                            Dashboard</a>
                    </li>
                    <li>
                        <a href="form.html" class="active-menu waves-effect waves-dark"><i class="fa fa-edit"></i>
                            Transaction </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
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
            <div id="page-inner">
                <div class="clearBoth"></div>
                <form class="col s12" action="historytransaction.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-action">
                                    Sender Data
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="Resi" type="text" class="form-control" name="resinumber">
                                            <label for="Resi">Resi Number</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="icon_prefix" type="text" class="form-control" name="sendername">
                                            <label for="icon_prefix">Nama Pengirim</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="icon_telephone" type="number" class="form-control"
                                                name="senderphone">
                                            <label for="icon_telephone">No Telepon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="user" type="text" class="form-control" name="iduser">
                                            <label for="user">ID User</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="barang" type="text" class="form-control" name="idbarang">
                                            <label for="barang">ID Barang</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="exampleFormControlSelect1">Jenis Service</label>
                                            <br>
                                            <br>
                                            <select name="jenisService" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option value="OKE">OKE</option>
                                                <option value="YES">YES</option>
                                                <option value="REGULER">REGULER</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="inputZip">Tanggal Ambil</label>
                                            <input type="date" class="form-control" name="tanggalAntar">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="inputZip">Jam</label>
                                            <input type="time" class="form-control" name="waktuAntar">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="status" type="text" class="form-control" name="status">
                                            <label for="status">Payment Status</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="totalbayar" type="number" class="form-control" name="totalbayar">
                                            <label for="totalbayar">Total Bayar (Rp)</label>
                                        </div>
                                    </div>
                                    <div class="clearBoth"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-action">
                                    Recepient Data
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="trackingid" type="text" class="form-control" name="trackingid">
                                            <label for="trackingid">ID Tracking</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col-lg-6">
                                                <input id="namapenerima" type="text" class="form-control"
                                                    name="recepientname">
                                                <label for="namapenerima">Nama Pengirim</label>
                                            </div>
                                            <div class="input-field col-lg-6">
                                                <input id="icon_telephone" type="number" class="form-control"
                                                    name="recepientphone">
                                                <label for="icon_telephone">No Telepon</label>
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="address" type="text" class="form-control" name="recepientname">
                                            <label for="address">Address</label>
                                        </div>
                                        <div class="input-field col-lg-6">
                                            <input type="submit" value="Save" style="margin-left: 275px"
                                                class="btn btn-outline-primary">
                                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (nested) -->
    </div>
    <!-- /.panel-body -->
    </div>
    <!-- /.col-lg-12 -->
    </div>
    <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/materialize/js/materialize.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>

</html>