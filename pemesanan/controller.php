<?php
$koneksi = mysqli_connect('localhost','root','','db_myjfp');

function create($data){
    global $koneksi;
    $nama_pengirim = $data['nama_pengirim'];
    $nomor_telefon_pengirim = $data['nomor_telefon_pengirim'];
    $nama_barang = $data['nama_barang'];
    $jenis_barang = $data['jenis_barang'];
    $berat_barang = $data['berat_barang'];
    $jenis_service = $data['jenis_service'];
    $tanggal_pesan = $data['tanggal_pesan'];
    $waktu_pesan = $data['waktu_pesan'];
    $metode_pembayaran = $data['metode_pembayaran'];
    $gambar = upload();
    $alamat_pengirim = $data['alamat_pengirim'];
    $nama_penerima = $data['nama_penerima'];
    $nomor_telefon_penerima = $data['nomor_telefon_penerima'];
    $alamat_penerima = $data['alamat_penerima'];
    $total_bayar = $data['total_bayar'];
    $status = $data['status'];
    $query = "INSERT INTO pemesanan_barang VALUES('','$nama_pengirim',' $nomor_telefon_pengirim','$nama_barang','$jenis_barang','$berat_barang','$alamat_pengirim','$jenis_service','$tanggal_pesan','$waktu_pesan','$metode_pembayaran','$gambar','$nama_penerima',' $nomor_telefon_penerima',' $alamat_penerima ', '$total_bayar','$status')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
    }
function upload(){
        $extensi = ['jpg','jpeg','png'];
        $filename = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $extpath = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($extpath, $extensi)){
            echo "<script> alert('Extensi Gagal'); </script>";
        return false;
        }
        move_uploaded_file($_FILES['gambar']['tmp_name'],'assets/images/'. $filename);
        return $filename;
    }
function read($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $datas = [];
    while($data = mysqli_fetch_assoc($result)){
        $datas[] = $data;
    }
    return $datas;
}
function delete($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM pemesanan_barang WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}
function edit($data){
    global $koneksi;
    $id = $data['id'];
    $nama_pengirim = $data['nama_pengirim'];
    $nomor_telefon_pengirim = $data['nomor_telefon_pengirim'];
    $nama_barang = $data['nama_barang'];
    $jenis_barang = $data['jenis_barang'];
    $berat_barang = $data['berat_barang'];
    $jenis_service = $data['jenis_service'];
    $tanggal_pesan = $data['tanggal_pesan'];
    $waktu_pesan = $data['waktu_pesan'];
    $metode_pembayaran = $data['metode_pembayaran'];
    $oldGambar = $data["oldGambar"];
    //cek gambar
    //4 tidak ada gambar
    if($_FILES['gambar']['error'] === 4){
        $gambar = $oldGambar;
    } else {
        $gambar = upload();
    }
    $alamat_pengirim = $data['alamat_pengirim'];
    $nama_penerima = $data['nama_penerima'];
    $nomor_telefon_penerima = $data['nomor_telefon_penerima'];
    $alamat_penerima = $data['alamat_penerima'];
    $total_bayar = $data['total_bayar'];
    $status = $data['status'];
    $query = "UPDATE pemesanan_barang SET 
    nama_pengirim = '$nama_pengirim',
    nomor_telefon_pengirim = '$nomor_telefon_pengirim',
    nama_barang = '$nama_barang',
    jenis_barang = '$jenis_barang',
    berat_barang = '$berat_barang',
    jenis_service = '$jenis_service',
    tanggal_pesan = '$tanggal_pesan',
    waktu_pesan = '$waktu_pesan',
    metode_pembayaran = '$metode_pembayaran',
    alamat_pengirim = '$alamat_pengirim',
    nama_penerima = '$nama_penerima',
    nomor_telefon_penerima = '$nomor_telefon_penerima',
    waktu_pesan = '$waktu_pesan',
    metode_pembayaran = '$metode_pembayaran',
    gambar = '$gambar',
    alamat_penerima = '$alamat_penerima',
    total_bayar = '$total_bayar',
    status = '$status'
    WHERE id = '$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function registrasi($data){
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
    $password = $data["password"];
    $password2 = $data["password2"];

    if($password !== $password2)
    {
        echo "<script> alert('Password Tidak sama');
        </script>";
        return false;
    }
    //enkripsi
    $password = password_hash($password, PASSWORD_DEFAULT);
    //insert
    mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password')");
    return mysqli_affected_rows($koneksi);
}
?>