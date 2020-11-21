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
<?php include 'connection.php'; ?>
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="justify-center row">
                <div class="col-sm-12">
                    <div class="bradcam_text text-left">
                        <h3>Edit Booking PickUp Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php    
      $conn= mysqli_query($connection,"select * from booking");
			while($conn = mysqli_fetch_array($conn)){
        
				?>    
       <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
              <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-action">
                          Sending Details
                        </div>
                        <div class="card-content">
                        <form action="connection.php" method="post">
                         	<div class="col s12">
								  <div class="row">
									<div class="input-field col s6">
									  <input id="icon_prefix" type="text"  name="resi_number" class="validate">
                                      <label for="icon_prefix">RESI Number</label>
									</div>
									<div class="input-field col s6">
									  <input id="icon_telephone" type="tel" name="product_id" class="validate">
									  <label for="icon_telephone">Product ID</label>
									</div>
								  </div>
                                </div>
								
								<div class="col s12">
								  <div class="row">
									<div class="input-field col s6">
									  <input id="user_id" type="text"   name="user_id" class="validate">
									  <label for="email" data-error="wrong" data-success="right">User ID</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="status" type="text"   name="status" class="validate">
                                        <label for="textarea1">Status Pengiriman</label>
                                        </div>
                                            
                                        </div>
                                    </div>
								
                            <div class="col s12">
							  <div class="row">
								<div class="input-field col s12">
                                <input id="status" type="text"   name="current_location" class="validate">
								  <label for="textarea1">Current Sending Location</label>
								</div>
							  </div>
                            </div> 

                            <div class="col s12">
							  <div class="row">
								<div class="input-field col s12">
                               <button type="submit"  class="waves-effect waves-light btn btn-block">Submit</button>
								</div>
							  </div>
                            </div> 
                            
                        </form>
 
        <div class="clearBoth"></div>
        </div>
        </div>
        </div>
        <?php 

        }

        ?>    
        </div>
    </section>
 
















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