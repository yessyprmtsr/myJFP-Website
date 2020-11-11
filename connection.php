<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "customer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$resi_number= $_POST['resi_number'];
$product_id= $_POST['product_id'];
$user_id= $_POST['user_id'];
$status = $_POST['status'];
$current_location = $_POST['current_location'];



$sql = "INSERT INTO booking (resi_number, product_id , user_id, status, current_location)
VALUES ('$resi_number', '$product_id','$user_id','$status','$current_location')";

if (mysqli_query($conn, $sql)) {
   echo "<br/><h2><font color='green' style='font-size:15px;float:right'>New record created successfully !</font></h2>";
   header("Location: index.php");

} else {
   echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);

?>