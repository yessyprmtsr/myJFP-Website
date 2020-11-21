<?php
session_start();
//untuk session
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'controller.php';
//get data semua dulu
$pesan = read("SELECT * FROM pemesanan_barang");
if(isset($_POST["submit"])){
    if(edit($_POST) > 0){
        echo "
            <script>
            alert('Data telah diupdate!');
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
    <link rel="stylesheet" href="../style.css"> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title> History Booking Pick Up Delivery</title>
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
                <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
    <div class="container">
                <h1 style="margin-top: 20px;text-align:center">History Booking</h1>
        <table class="table table-hover">
    <thead>
    <tr>
      <th scope="col">ID Booking</th>
      <th scope="col">Nama Pengirim</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Berat Barang</th>
      <th scope="col">Total Bayar</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
    <?php 
                if($pesan < [0] ){
                    echo "
                    <tr>
                    <td>
                    No Booking Found
                    </td>
                    </tr>
                    ";
                }
    ?>
    <?php
            foreach($pesan as $data):
        ?>
        <tr>
            <td><?= $data["id"]; ?></td>
            <td><?= $data["nama_pengirim"]; ?></td>
            <td><?= $data["nama_barang"]; ?></td>
            <td><?= $data["berat_barang"]; ?> Kg</td>
            <td><?= $data["total_bayar"]; ?></td>
            <td><?= $data["status"]; ?></td>
            <td>
                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                <a href="ubah.php?id=<?= $data["id"]; ?>" class="btn btn-danger btn-sm"><i class="fa fa-pen"></i></a>
                <a href="hapus.php?id=<?= $data["id"]; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
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
                    <?= $data["nama_pengirim"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nomor Telefon Pengirim:</label>
                    <?= $data["nomor_telefon_pengirim"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Alamat Pengirim:</label>
                    <?= $data["alamat_pengirim"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nama Barang:</label>
                    <?= $data["nama_barang"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Jenis Barang:</label>
                    <?= $data["jenis_barang"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Berat Barang:</label>
                    <?= $data["berat_barang"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Jenis Service:</label>
                    <?= $data["jenis_service"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Tanggal Pesan:</label>
                    <?= $data["tanggal_pesan"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Waktu Pesan:</label>
                    <?= $data["waktu_pesan"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Metode Pembayaran:</label>
                    <?= $data["metode_pembayaran"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Bukti Pembayaran:</label>
                    <br>
                    <img src="assets/images/<?= $data["gambar"]; ?>" width="100" height="150">
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nama Penerima:</label>
                    <?= $data["nama_penerima"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nomor Telefon Penerima:</label>
                    <?= $data["nomor_telefon_penerima"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Alamat Penerima:</label>
                    <?= $data["alamat_penerima"]; ?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Total Bayar:</label>
                    <?= $data["total_bayar"]; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        </div>
        <?php
        endforeach;
        ?>
    </tbody>
                            <!-- modal edit -->
                        
</table>
</div>
</div>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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