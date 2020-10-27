<?
include "koneksi.php";
$resi=$_GET['resi'];
$result = mysqli_query($koneksi, "DELETE FROM tb_pemesanan WHERE resi=$resi");
header("Location:riwayatpemesanan.php")
?>