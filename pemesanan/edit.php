<?php
include "koneksi.php";
if(isset($_POST['submit'])){
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
        if($jenisService == "OKE"){
            $oke = 12000 ;
            $totalPrice = $beratBarang*$oke;
        } else if ($jenisService == "YES"){
            $yes = 20000;
            $totalPrice = $beratBarang*$yes;
        } else if ($jenisService == "REGULER"){
            $reg = 18000;
            $totalPrice = $beratBarang*$reg;
        }
    $query = mysqli_query($koneksi,"update tb_pemesanan set namaPengirim=$namaPengirim,phonePengirim=$phonePengirim,namaBarang=$namaBarang,jenisBarang=$jenisBarang, beratBarang=$beratBarang, jenisService=$jenisService, tanggalAntar=$tanggalAntar, waktuAntar=$waktuAntar, bayar=$bayar, alamatPengirim=$alamatPengirim, namaPenerima=$namaPenerima, phonePenerima=$phonePenerima, alamatPenerima=$alamatPenerima, totalPrice=$totalPrice");
    if ($query > 0){
        echo "<script>alert('Mahasiswa baru telah disimpan'); window.location.href='tampil.php'</script>";
    } else {
        echo "<script>alert('Gagal Disimpan');</script>";
    }
}

?>