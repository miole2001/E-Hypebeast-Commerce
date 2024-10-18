<?php
 include('../connection.php');
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Consumer_accounts.xls");



// Check connection
if ($connforMyOnlineDb->connect_error) {
    die("Connection failed: " . $connforMyOnlineDb->connect_error);
}

// Fetch data from your database table
$sql = "SELECT * FROM user WHERE user_type = 'HypeBeast user'";
$result = $connforMyOnlineDb->query($sql);

// Output data in Excel format
if ($result->num_rows > 0) {
    // Output Excel headers
    echo "id\t image\t name\t sex\t age\t email\t number\t address\t username\t password\n"; // Adjust column names accordingly

    // Output data rows
    while($row = $result->fetch_assoc()) {
        echo $row["id"] . "\t" . 
        $row["image"] . "\t" . 
        $row["fname"] . "\t" . 
        $row["sex"] . "\t" . 
        $row["age"] . "\t" .
        $row["email"] . "\t" . 
        $row["number"] . "\t" . 
        $row["address"] . "\t" . 
        $row["username"] . "\t" .  
        $row["pass"] . "\n"; // Adjust column names accordingly
    }
} else {
    echo "0 results";
}
$connforMyOnlineDb->close();
?>
