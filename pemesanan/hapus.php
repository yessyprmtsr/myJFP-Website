<?php
require 'controller.php';
$id = $_GET["id"];
if(delete($id) > 0){
    echo "
    <script>
        alert('Data Succesfull deleted');
        document.location.href = 'riwayatpemesanan.php';
    </script>";
}else{
    echo "
    alert('Data failed deleted');
    <script>
        document.location.href = 'riwayatpemesanan.php';
    </script>";
}
?>