<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Transaction Goods.php</title>
</head>

<body>
    <?php
        
        $idbarang = $_POST['idbarang'];
        $sendername = $_POST['sendername'];
        $recepientname= $_POST['recepientname'];
        $namabarang = $_POST['namabarang'];
        $jenisbarang = $_POST['jenisbarang'];
        $beratbarang = $_POST['beratbarang'];
    
    ?>
    <div class="container-sm-12 col-lg-6 col-md-4">
        <h2 style="text-align: center;">Transaction Goods</h2>
        <fieldset>
            <table class="table">
                <tr>
                    <td>Id Barang: </td>
                    <td><?= $idbarang?> </td>
                </tr>
                <tr>
                    <td>Sender Name: </td>
                    <td><?= $sendername?> </td>
                </tr>
                <tr>
                    <td>Recepient Name: </td>
                    <td><?= $recepientname?> </td>
                </tr>
                <tr>
                    <td>Nama Barang: </td>
                    <td><?= $namabarang?> </td>
                </tr>
                <tr>
                    <td> Jenis Barang: </td>
                    <td><?= $jenisbarang?> </td>
                </tr>
                <tr>
                    <td> Berat Barang: </td>
                    <td><?= $beratbarang?> </td>
                </tr>
            </table>
            <div style="text-align: center;">
                <a href="Management Goods Admin.php" class="btn btn-primary mb-2"> Back</a>
            </div>
        </fieldset>
    </div>
</body>

</html>