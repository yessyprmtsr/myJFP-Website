<?php
include "conn.php";
if(isset($_POST['submit'])){
    $resinumber = $_POST['resinumber'];
    $sendername = $_POST['sendername'];
    $senderphone = $_POST['senderphone'];
    $iduser = $_POST['iduser'];
    $idbarang = $_POST['idbarang'];    
    $jenisService = $_POST['jenisService'];
    $tanggalAntar = $_POST['tanggalAntar'];
    $waktuAntar = $_POST['waktuAntar'];
    $status = $_POST['statusid'];
    $totalbayar = $_POST['totalbayar'];
    $trackingid = $_POST['trackingid'];
    $recepientname = $_POST['recepientname'];
    $recepientphone = $_POST['recepientphone'];
    $addresspenerima = $_POST['addresspenerima']; 
    $query = mysqli_query($koneksi,"UPDATE customer SET 
            resinumber = '$resinumber',
            sendername ='$sendername',
            senderphone ='$senderphone',
            iduser = '$iduser',
            idbarang = '$idbarang',
            jenisService =' $jenisService',
            tanggalAntar = '$tanggalAntar',
            waktuAntar = '$waktuAntar',
            statusid = '$status',
            totalbayar = '$totalbayar',
            trackingid = '$trackingid',
            recepientname = '$recepientname',
            recepientphone = '$recepientphone',
            addresspenerima = '$addresspenerima'
            WHERE resinumber = '$resinumber' ");
    if ($query > 0){
        echo "<script>alert('Update telah dilakukan'); document.location= 'history.php' </script>";
    } else {
        echo "<script>alert('Gagal Disimpan');</script>";
    }
}

?>