<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id_init = 10;
$empName = $_POST['name'];
$empPassword = $_POST['password'];
$empEmail = $_POST['email'];
$empCountry = $_POST['groups'];
$id = $id_init + 1;
$sql = "INSERT INTO emp_list_1 (`Id`,`Name`, `Password`, `Email`, `Country`) VALUES ($id,'$empName', '$empPassword', '$empEmail', '$empCountry')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>