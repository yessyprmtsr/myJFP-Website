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
<?php include 'conn.php'; ?>
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
      $data = mysqli_query($koneksi,"select * from customer");
			while($d = mysqli_fetch_array($data)){
        
				?>    
    <section class="sample-text-area">
		<div class="container-md">
        <form action="edithistory.php" method="post">
        <div class="row">
        <div class="col-lg-6">
        <h3>Data Pengirim</h3>
        <br>
        <div class="form-group">
        <label for="exampleFormControlInput1">Resi Number</label>
        <input type="text" name="resinumber" value = "<?php echo $d['resinumber']; ?>" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pengirim</label>
        <input type="text" name="sendername" value = "<?php echo $d['sendername']; ?>" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">No Telepon</label>
        <input type="text" name="senderphone" value = "<?php echo $d['senderphone']; ?>" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">ID User</label>
        <input type="text" name="iduser" value = "<?php echo $d['iduser']; ?>"class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">ID Barang</label>
        <input type="text" name="idbarang" value = "<?php echo $d['idbarang']; ?>"class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Service</label>
            <select  name="jenisService" value = "<?php echo $d['jenisService']; ?>"class="form-control" id="exampleFormControlSelect1">
            <option value="OKE">OKE</option>
            <option value="YES">YES</option>
            <option value="REGULER">REGULER</option>
            </select>
        </div>
        <div class="form-group">
            <label>Waktu Delivery</label>
            <div class="row">
                <div class="col-lg-6">
                <label for="inputZip">Tanggal</label>
				<input type="date" class="form-control" name="tanggalAntar" value = "<?php echo $d['tanggalAntar']; ?>">
                </div>
                <div class="col-lg-6">
                <label for="inputZip">Jam</label>
				<input type="time" class="form-control" name="waktuAntar" value = "<?php echo $d['waktuAntar']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Payment Status</label>
            <input id="status" type="text" class="form-control" name ="statusid" value = "<?php echo $d['statusid']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Total Bayar</label>
            <input id="totalbayar" type="number" class="form-control" name ="totalbayar" value = "<?php echo $d['totalbayar']; ?>">
        </div>
        </div>
        <div class="col-lg-6">
        <h3>Data Penerima</h3>
        <br>
        <div class="form-group">
        <label for="trackingid">ID Tracking</label>
		<input id="trackingid" type="text" class="form-control" name ="trackingid" value = "<?php echo $d['trackingid']; ?>">
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" name="recepientname" value = "<?php echo $d['recepientname']; ?>" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="recepientphone"  value = "<?php echo $d['recepientphone']; ?>" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Penerima</label>
            <textarea name="addresspenerima" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $d['addresspenerima']; ?></textarea>
        </div>
        <div class="form-group">
        <input type="submit" name="submit" style="margin-left: 100px" class="btn btn-outline-primary">
        </div>
        </div>
        </div>
        </form>
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