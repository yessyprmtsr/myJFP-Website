<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    ?>
    <div class="container-sm">
        <h2 style="text-align:center;">Form Output (POST)</h2>
        <fieldset>
            <table class="table">
                <tr>
                    <td>First Name : </td>
                    <td><?= $first_name ?></td>
                </tr>
                <tr>
                    <td>Last Name : </td>
                    <td><?= $last_name ?></td>
                </tr>                <tr>
                    <td>Phone : </td>
                    <td><?= $phone ?></td>
                </tr>                
                <tr>
                    <td>Password : </td>
                    <td><?= $password ?></td>
                </tr>
                <tr>
                    <td>E-mail : </td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Type : </td>
                    <td><?= $type ?></td>
                </tr>
                               
            </table>
            <div style="text-align:center;">
                <a href="ManajemenUser_Form.php" class="btn btn-primary mb-2"> Return </a>
            </div>
        </fieldset>
    </div>
</body>
</html>