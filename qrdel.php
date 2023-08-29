<?php
$conn = new mysqli("localhost", "root","","chhaya");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM booking WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>