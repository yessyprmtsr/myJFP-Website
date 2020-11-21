
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Management transaction Admin</title>
	
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
				<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>   
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
  <li>
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>  
	   <!--/. NAV TOP  -->
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
        <?php
  include "conn.php";
?>
        <table border="1" width="700px">
      <tr>
      <th width="10%">Resi</th>
       <th width="10%">Sender Name</th>
       <th width="35%">ID User</th>
       <th>Service</th>
       <th width="20%">Action</th>
      </tr>
      <?php

      $sql=mysqli_query($koneksi, "SELECT * FROM customer");
      while ($data=mysqli_fetch_array($sql)) {
      ?>
       <tr>
        <td><?=$data['resinumber']?></td>
        <td><?=$data['sendername']?></td>
        <td><?=$data['iduser']?></td>
        <td><?=$data['jenisService']?></td>
        <td>
      <li class="list-inline-item">
            <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="modal" data-target="#exampleModal" data-placement="top" title="Detail"><i class="fa fa-eye"></i></button>
            <a href="edit.php?resinumber=<?=$data['resinumber']?>" class="btn btn-primary btn-sm rounded-0" type="button"   title="Edit"><i class="fa fa-pencil"></i></a>
            <a href="hapus.php?resinumber=<?=$data['resinumber']?>" onclick="return confirm('Are you sure?')" class="btn btn-primary btn-sm rounded-0" type="button"  data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
    </li>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Pengirim: </label>
            <?=  $data['sendername']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $data['senderphone']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Barang:</label>
            <?=$data['idbarang']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Jenis Service:</label>
            <?= $data['jenisService']?>
          </div>
          <div class="form-group">
          <label for="message-text" class="col-form-label">Waktu Pickup</label>
                <div class="row">
                <div class="col-lg-6">
                <label for="message-text" class="col-form-label">Tanggal Antar:</label>
                    <?= $data['tanggalAntar']?>
                </div>
                <div class="col-lg-6">
                <label for="message-text" class="col-form-label">Jam Antar: </label>
                    <?= $data['waktuAntar']?>
                </div>
                </div>
            </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Status:</label>
            <?= $data['statusid']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Penerima:</label>
            <?= $data['recepientname']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Penerima:</label>
            <?= $data['recepientphone']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat Penerima:</label>
            <?= $data['addresspenerima']?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Total Bayar:</label>
            <?= $data['totalbayar']?>
          </div>
      </div>
    </div>
  </div>
</div>
      </td>
       </tr>
      <?php 
      }
      ?>  
     </table>
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
    <script src="target-free-admin-template/assets/js/jquery-1.10.2.js"></script>	
	<!-- Bootstrap Js -->
    <script src="target-free-admin-template/assets/js/bootstrap.min.js"></script>	
	<script src="target-free-admin-template/assets/materialize/js/materialize.min.js"></script>	
    <!-- Metis Menu Js -->
    <script src="target-free-admin-template/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="target-free-admin-template/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="target-free-admin-template/assets/js/morris/morris.js"></script>	
	<script src="target-free-admin-template/assets/js/easypiechart.js"></script>
	<script src="target-free-admin-template/assets/js/easypiechart-data.js"></script>	
	 <script src="target-free-admin-template/assets/js/Lightweight-Chart/jquery.chart.js"></script>	
    <!-- Custom Js -->
    <script src="target-free-admin-template/assets/js/custom-scripts.js"></script> 
 

</body>

</html>
