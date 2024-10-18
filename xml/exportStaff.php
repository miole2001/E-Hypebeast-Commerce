<?php
 include('../connection.php');
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Staffs.xls");



// Check connection
if ($connforMyOnlineDb->connect_error) {
    die("Connection failed: " . $connforMyOnlineDb->connect_error);
}

// Fetch data from your database table
$sql = "SELECT * FROM staff";
$result = $connforMyOnlineDb->query($sql);

// Output data in Excel format
if ($result->num_rows > 0) {
    // Output Excel headers
    echo "id\t image\t name\t sex\t email\t number\t documents\t job type\n"; // Adjust column names accordingly

    // Output data rows
    while($row = $result->fetch_assoc()) {
        echo $row["id"] . "\t" . 
        $row["image"] . "\t" . 
        $row["full_name"] . "\t" . 
        $row["sex"] . "\t" . 
        $row["email"] . "\t" . 
        $row["number"] . "\t" . 
        $row["documents"] . "\t" . 
        $row["job_type"] . "\n"; // Adjust column names accordingly
    }
} else {
    echo "0 results";
}
$connforMyOnlineDb->close();
?>
