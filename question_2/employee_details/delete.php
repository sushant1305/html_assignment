<?php
$conn=mysqli_connect("localhost", "root", "", "employee_details");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$id = $_GET['id'];

$sql = "DELETE FROM emp_list_1 WHERE Name='".$id."' ";
mysqli_query($conn,$sql);

mysqli_close($conn);
header("Location: view_db.php");
?>