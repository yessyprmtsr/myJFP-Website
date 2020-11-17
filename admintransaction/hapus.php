<?php
session_start();
//untuk session
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'conn.php';
$resinumber = $_GET['resinumber'];
mysqli_query($koneksi,"DELETE FROM customer WHERE resinumber='$resinumber'")or die(mysqli_error());

echo "<script>alert('Berhasil dihapus'); document.location= 'history.php' </script>";
?>