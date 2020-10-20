<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Output_get.php</title>
</head>

<body>
    <?php
        
        $resi_number = $_POST['resi_number'];
        $product_id = $_POST['product_id'];
        $user_id= $_POST['user_id'];
        $status = $_POST['status'];
        $current_location = $_POST['current_location'];
    
    ?>
    <div class="container-sm-12 col-lg-6 col-md-4">
        <h2 style="text-align: center;">Sending Details</h2>
        <fieldset>
            <table class="table">
                <tr>
                    <td>RESI Number: </td>
                    <td><?= $resi_number?> </td>
                </tr>
                <tr>
                    <td>Product ID: </td>
                    <td><?= $product_id?> </td>
                </tr>
                <tr>
                    <td>User ID: </td>
                    <td><?= $user_id?> </td>
                </tr>
                <tr>
                    <td>Sending Status: </td>
                    <td><?= $status?> </td>
                </tr>
                <tr>
                    <td> Current Location: </td>
                    <td><?= $current_location?> </td>
                </tr>
            </table>
            <div style="text-align: center;">
                <a href="index.php" class="btn btn-primary mb-2"> Back</a>
            </div>
        </fieldset>
    </div>
</body>

</html>