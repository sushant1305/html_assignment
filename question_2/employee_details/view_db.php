<html>
<head>
    <style>
        table, th, td {
        border: 1px solid;
        }
    </style>
</head>

<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "employee_details");
 
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    // Attempt select query execution
    $sql = "SELECT * FROM emp_list_1";
    $delete_row = "DELETE FROM `emp_list_1` WHERE id=0";
    if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Name</th>";
                echo "<th>Password</th>";
                echo "<th>Email</th>";
                echo "<th>Country</th>";
                echo "<th>Delete</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Country'] . "</td>";
                echo "<td><a href=\"deleterow.php?id=".$row['Country']."\">delete</a></td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
?>

</body>
</html>