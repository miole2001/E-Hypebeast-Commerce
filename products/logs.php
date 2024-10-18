<?php include('../connection.php');
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/e-hypebeast/';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - HypeBeast User</title>
    <link href="<?= $base_url ?>css/style.min.css" rel="stylesheet" />
    <link href="<?= $base_url ?>css/styles.css" rel="stylesheet" />
    <script src="<?= $base_url ?>js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body class="sb-nav-fixed">

    <div class="page-wrapper"  style="background-color: #9BB7D4">
        <div class="content container-fluid">
        <?php include 'header.php'; ?>

            <div class="card mb-4 mt-5">
                <div class="card-body mt-4">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Activity</th>
                                <th>Time Stamp</th>
                            </tr>
                        </thead>
                        <?php

                        $sql = "SELECT * FROM logs WHERE user_type = 'HypeBeast user'"; // Assuming you have an 'id' field for each user
                        $result = $connforMyOnlineDb->query($sql);

                        if ($result->num_rows > 0) {

                            $count = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "</tr>";
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['action'] . "</td>";
                                echo "<td>" . $row['timestamp'] . "</td>";
                                echo "</tr>";

                                $count++;
                            }
                        } else {

                            echo "<tr><td colspan='4' class='text-center text-danger'>No results found</td></tr>"; // Updated colspan to match the number of <th> elements
                        }

                        $connforMyOnlineDb->close();
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; E-HypeBeast 2024</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>