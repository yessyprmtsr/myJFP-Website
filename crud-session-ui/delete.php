<?php
// include database connection file
// include_once("connection.php");

// // Get id from URL to delete that user
// $id = $_GET['id'];

// // Delete user row from table based on given id
// $result = mysqli_query($mysqli, "DELETE FROM booking WHERE id=$id");

// // After delete redirect to Home, so that latest user list will be displayed.
// header("Location:index.php");

// if (isset($_GET['delete'])){
//     $id = $_GET['delete'];
//     $mysqli->query("DELETE FROM booking WHERE id=$id") or die($mysqli->error());
//  }
 
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


if (isset($_GET['id'])) {
	$id = $_GET['id'];
	mysqli_query($conn, "DELETE FROM booking WHERE id=$id");
	$_SESSION['message'] = "Event Deleted Successfully!"; 
	header('location: index.php');
}

 
?>