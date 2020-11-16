<?php
session_start();
//untuk session
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'controller.php';
if(isset($_POST["submit"])){
if(create($_POST) > 0){
    echo "
        <script>
        alert('Data telah ditambahkan!');
        </script>
    ";
    header("location:riwayatpemesanan.php");
}else{
    echo "
    <script>
    alert('Data Gagal Ditambahkan!');
    </script>
    ";
}
}
if(isset($_POST['count'])){
    $jenis_service = $_POST['jenis_service'];
    $berat_barang = $_POST['berat_barang'];
    if($jenis_service == 'OKE'){
        $total_bayar = $berat_barang*15000;
      } else if($jenis_service == 'YES'){
        $total_bayar = $berat_barang*20000;
      } else if($jenis_service == 'REGULER'){
        $total_bayar = $berat_barang*18000;
      } else {
        echo 'No Input';
      }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="manifest" href="site.webmanifest"> -->
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../assetscustomer/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assetscustomer/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assetscustomer/css/magnific-popup.css">
    <link rel="stylesheet" href="../assetscustomer/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assetscustomer/css/themify-icons.css">
    <link rel="stylesheet" href="../assetscustomer/css/nice-select.css">
    <link rel="stylesheet" href="../assetscustomer/css/flaticon.css">
    <link rel="stylesheet" href="../assetscustomer/css/gijgo.css">
    <link rel="stylesheet" href="../assetscustomer/css/animate.css">
    <link rel="stylesheet" href="../assetscustomer/css/slicknav.css">
    <link rel="stylesheet" href="../assetscustomer/css/style.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title> Booking Pick Up Delivery</title>
</head>
<body>
<nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">my<span>JFP</span></a></div>
            <ul class="menu">
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="pemesanan.php">Booking</a></li>
                <li><a href="services.html">Services</a></li>
                <?php
                if ( $_SESSION ["login"] == false )
                {
                ?>
                 <li><a href="login.php">Login</a></li>
                <?php
                }
                ?>
                <?php
                if ( $_SESSION ["login"] == true )
                {
                ?>
                <li><a href="riwayatpemesanan.php">Booking History</a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php
                }
                ?>
            </ul>
            <!-- <ul class="menu2">
                <li><a href="login.html">LogIn</a></li> <span>|</span>
                 <li><a href="login.html">SignUp</a></li>
            </ul> -->
        </div>
    </nav>

    <!-- home section -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome to myJFP</div>
                <div class="text-2">Your Satisfaction</div>
                <div class="text-3">Is our<span> Priority</span></div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login" style="padding-bottom: 100px;">Booking Delivery Pick Up</div>
            <!-- <div class="title signup">Welcom! SignUp</div> -->
        </div>
        <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-lg-6">
        <h1>Data Pengirim</h1>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pengirim</label>
        <input type="text" name="nama_pengirim" class="form-control" id="exampleFormControlInput1"  >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="nomor_telefon_pengirim" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Jenis Barang</label>
        <input type="text" name="jenis_barang" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Berat Barang (kg)</label>
        <input type="decimal" name="berat_barang" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Pengirim</label>
            <textarea name="alamat_pengirim" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Service</label>
            <select name="jenis_service" class="form-control" id="exampleFormControlSelect1">
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
				<input type="date" class="form-control" name="tanggal_pesan">
                </div>
                <div class="col-lg-6">
                <label for="inputZip">Jam</label>
				<input type="time" class="form-control" name="waktu_pesan">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Metode Pembayaran</label>
            <select onchange="yesnoCheck(this);" name="metode_pembayaran" class="form-control" id="exampleFormControlSelect1">
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
            <option value="Tunai">Tunai di Penerima</option>
            </select>
        </div>
        <div id="ifYes" style="display: none;"class="form-group">
        <label for="exampleFormControlInput1">Bukti Transfer</label>
        <input type="file" name="gambar" class="form-control" id="exampleFormControlInput1" >
        </div>
        </div>
        <div class="col-lg-6">
        <h1>Data Penerima</h1>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Penerima</label>
        <input type="text" name="nama_penerima" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="nomor_telefon_penerima" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Penerima</label>
            <textarea name="alamat_penerima" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="hidden" name="status" class="form-control" id="exampleFormControlInput1" value="pending" >
        <div class="card">
        <div class="card-header">
            Notes
        </div>
        <div class="card-body">
            <h5 class="card-title">TOTAL</h5>
            <input type="number" name="total_bayar" value="<?= $total_bayar?>" class="form-control" id="exampleFormControlInput1" >
            <br>
            <button type="submit" name="count" style="margin-left: 200px" class="boxed-btn3-line"> Count
        </div>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" value="Booking" style="margin-left: 200px" class="boxed-btn3-line">
        </div>
        </div>
        </div>
        </form>
        </div>
        </form>

     </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript"> </script>
        <script>
        function yesnoCheck(that) {
        if (that.value == "Transfer") {
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
}
    </script>
</script>
    <script src="assetscustomer/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assetscustomer/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assetscustomer/js/popper.min.js"></script>
        <script src="assetscustomer/js/bootstrap.min.js"></script>
        <script src="assetscustomer/js/owl.carousel.min.js"></script>
        <script src="assetscustomer/js/isotope.pkgd.min.js"></script>
        <script src="assetscustomer/js/ajax-form.js"></script>
        <script src="assetscustomer/js/waypoints.min.js"></script>
        <script src="assetscustomer/js/jquery.counterup.min.js"></script>
        <script src="assetscustomer/js/imagesloaded.pkgd.min.js"></script>
        <script src="assetscustomer/js/scrollIt.js"></script>
        <script src="assetscustomer/js/jquery.scrollUp.min.js"></script>
        <script src="assetscustomer/js/wow.min.js"></script>
        <script src="assetscustomer/js/nice-select.min.js"></script>
        <script src="assetscustomer/js/jquery.slicknav.min.js"></script>
        <script src="assetscustomer/js/jquery.magnific-popup.min.js"></script>
        <script src="assetscustomer/js/plugins.js"></script>
        <script src="assetscustomer/js/gijgo.min.js"></script>
</body>
</html>