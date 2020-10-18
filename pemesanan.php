<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="manifest" href="site.webmanifest"> -->
     <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assetscustomer/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetscustomer/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assetscustomer/css/magnific-popup.css">
    <link rel="stylesheet" href="assetscustomer/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetscustomer/css/themify-icons.css">
    <link rel="stylesheet" href="assetscustomer/css/nice-select.css">
    <link rel="stylesheet" href="assetscustomer/css/flaticon.css">
    <link rel="stylesheet" href="assetscustomer/css/gijgo.css">
    <link rel="stylesheet" href="assetscustomer/css/animate.css">
    <link rel="stylesheet" href="assetscustomer/css/slicknav.css">
    <link rel="stylesheet" href="assetscustomer/css/style.css">
    <title> Booking Pick Up Delivery</title>
</head>
<body>
<header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assetscustomer/img/logo_jne.png" alt="" width="200px" height="80px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> jne@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i> 0342-5567-1234</a></li>
                                    </ul>
                                </div>

                                <div class="book_btn d-none d-lg-block">
                                    <a class="boxed-btn3-line" href="#">LOGIN/REGISTER</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assetscustomer/img/logo_jne.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.html">home</a></li>
                                            <li><a  href="service.html">Services</a></li>
                                            <li><a href="contact.html">Career</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">Pick Up Delivery <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="pemesanan.php">Booking PickUp Delivery</a></li>
                                                    <li><a href="elements.html">My Booking History</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="justify-center row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Booking PickUp Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sample-text-area">
		<div class="container box_1170">
        <form action="riwayatpemesanan.php" method="post">
        <div class="row">
        <div class="col-lg-6">
        <h1>Data Pengirim</h1>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Pengirim</label>
        <input type="text" name="namaPengirim" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="phonePengirim" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama Barang</label>
        <input type="text" name="namaBarang" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Jenis Barang</label>
        <input type="text" name="jenisBarang" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Berat Barang</label>
        <input type="number" name="beratBarang" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Service</label>
            <select  name="jenisService" class="form-control" id="exampleFormControlSelect1">
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
				<input type="date" class="form-control" name="tanggalAntar">
                </div>
                <div class="col-lg-6">
                <label for="inputZip">Jam</label>
				<input type="time" class="form-control" name="waktuAntar">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Metode Pembayaran</label>
            <select name="bayar" class="form-control" id="exampleFormControlSelect1">
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
            <option value="Tunai">Tunai di Penerima</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Pengirim</label>
            <textarea name="alamatPengirim" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </div>
        <div class="col-lg-6">
        <h1>Data Penerima</h1>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" name="namaPenerima" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1">Nomor Telefon</label>
        <input type="number" name="phonePenerima" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat Penerima</label>
            <textarea name="alamatPenerima" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Booking" style="margin-left: 200px" class="boxed-btn3-line">
        </div>
        </div>
        </div>
        </form>
        </div>
    </section>
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