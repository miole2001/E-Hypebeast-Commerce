<?php include('../adminHeader.php'); ?>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center ">
                <div class="col ">
                    <div class="mt-4">
                        <h1 class="card-title float-left mt-2 text-center">APPROVED PAYMENTS</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4 mt-3">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Payment Method</th>
                            <th>Address</th>
                            <th>Total Products</th>
                            <th>Total Payment</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        session_start();
                        include('../connection.php');

                        $sql = "SELECT * FROM `approved_order` ORDER BY id DESC"; // Corrected SQL query
                        $result = $connforMyOnlineDb->query($sql);

                        if ($result->num_rows > 0) {
                            $count = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['number'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['method'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['total_products'] . "</td>";
                                echo "<td>" . $row['total_price'] . "</td>";
                                echo "</tr>";
                                $count++;
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center text-danger'>No results found</td></tr>"; // Updated colspan to match the number of <th> elements
                        }
                        $connforMyOnlineDb->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>