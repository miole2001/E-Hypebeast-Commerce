<?php
 include('../connection.php');
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Products.xls");



// Check connection
if ($connforMyOnlineDb->connect_error) {
    die("Connection failed: " . $connforMyOnlineDb->connect_error);
}

// Fetch data from your database table
$sql = "SELECT * FROM product";
$result = $connforMyOnlineDb->query($sql);

// Output data in Excel format
if ($result->num_rows > 0) {
    // Output Excel headers
    echo "id\t item id\t image\t product name\t price\t brand\t product type\t seller name\n"; // Adjust column names accordingly

    // Output data rows
    while($row = $result->fetch_assoc()) {
        echo $row["id"] . "\t" . 
        $row["item_id"] . "\t" . 
        $row["image"] . "\t" . 
        $row["item_name"] . "\t" . 
        $row["price"] . "\t" .
        $row["brand"] . "\t" . 
        $row["item_type"] . "\t" . 
        $row["seller_type"] . "\n"; // Adjust column names accordingly
    }
} else {
    echo "0 results";
}
$connforMyOnlineDb->close();
?>
