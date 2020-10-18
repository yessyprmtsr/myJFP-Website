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
    <?php
    if(isset($_POST['namaPengirim'])){
    $namaPengirim = $_POST['namaPengirim'];
    $phonePengirim = $_POST['phonePengirim'];
    $namaBarang = $_POST['namaBarang'];
    $jenisBarang = $_POST['jenisBarang'];
    $beratBarang = $_POST['beratBarang'];
    $jenisService = $_POST['jenisService'];
    $tanggalAntar = $_POST['tanggalAntar'];
    $waktuAntar = $_POST['waktuAntar'];
    $bayar = $_POST['bayar'];
    $alamatPengirim = $_POST['alamatPengirim'];
    $namaPenerima = $_POST['namaPenerima'];
    $phonePenerima = $_POST['phonePenerima'];
    $alamatPenerima = $_POST['alamatPenerima'];
    } else {
        header('Location: pemesanan.php');
    }
    ?>
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
                        <h3>History PickUp Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sample-text-area">
        <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">RESI Number</th>
      <th scope="col">Nama Pengirim</th>
      <th scope="col">Nomor Telefon Pengirim</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Berat Barang</th>
      <th scope="col">Total Bayar</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <th scope="row">
        <?php
          echo(rand());
        ?>
      </th>
      <td><?= $namaPengirim?> </td>
      <td><?= $phonePengirim?></td>
      <td><?= $namaBarang?></td>
      <td><?= $jenisBarang?></td>
      <td><?= $beratBarang?></td>
      <td>20000</td>
      <td>
      <li class="list-inline-item">
			<button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="modal" data-target="#exampleModal" data-placement="top" title="Detail"><i class="fa fa-eye"></i></button>
		    <button class="btn btn-info btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
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
            <?= $namaPengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Barang:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Jenis Barang:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Berat Barang:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Jenis Service:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
            <?= $phonePengirim?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </td>
    </tbody>
</table>
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
        <script>
            $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Detail Booking')
            modal.find('.modal-body input').val(recipient)
            })
        </script>
</body>
</html>