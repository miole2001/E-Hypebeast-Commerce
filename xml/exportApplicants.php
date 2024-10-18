<?php
 include('../connection.php');
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Applicants.xls");



// Check connection
if ($connforMyOnlineDb->connect_error) {
    die("Connection failed: " . $connforMyOnlineDb->connect_error);
}

// Fetch data from your database table
$sql = "SELECT * FROM pending_applicants";
$result = $connforMyOnlineDb->query($sql);

// Output data in Excel format
if ($result->num_rows > 0) {
    // Output Excel headers
    echo "id\t image\t name\t sex\t email\t number\t documents\t job position\n"; // Adjust column names accordingly

    // Output data rows
    while($row = $result->fetch_assoc()) {
        echo $row["id"] . "\t" . 
        $row["image"] . "\t" . 
        $row["sex"] . "\t" . 
        $row["name"] . "\t" . 
        $row["email"] . "\t" . 
        $row["number"] . "\t" .
        $row["documents"] . "\t" . 
        $row["job_position"] . "\n"; // Adjust column names accordingly
    }
} else {
    echo "0 results";
}
$connforMyOnlineDb->close();
?>
