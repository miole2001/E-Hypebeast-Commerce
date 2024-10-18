<?php
session_start();

$id = $_SESSION['id'];
include('connection.php');

$sql = "SELECT * FROM user WHERE user_type = 'HypeBeast admin'";
$result = $connforMyOnlineDb->query($sql);

if ($result->num_rows > 0) {
    $users = $result->fetch_assoc();
} else {
    die('User not found.');
}
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/E-Hypebeast-Commerce/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard - HypeBeast Admin</title>
    <link href="<?= $base_url ?>css/style.min.css" rel="stylesheet" />
    <link href="<?= $base_url ?>css/styles.css" rel="stylesheet" />
    <script src="<?= $base_url ?>js/all.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<script>
    function logout() {
        swal({
                title: "Are you sure?",
                text: "You will be logged out",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willLogout) => {
                if (willLogout) {
                    window.location.href = "<?= $base_url ?>logout.php";
                }
            });
    }
</script>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand" style="background-color: #3D5E8C">

        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-white" href="<?= $base_url ?>admin/admin.php">E-Hypebeast-Commerce</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
    </nav>

    <div id="layoutSidenav">



        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #3D5E8C">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <!-- DASHBOARD -->
                        <a class="nav-link " href="<?= $base_url ?>admin/admin.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="<?= $base_url ?>xml/export.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-file-export"></i></div>
                            Export Data
                        </a>

                        <a class="nav-link" href="<?= $base_url ?>xml/import.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-file-import"></i></div>
                            Import Data
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-users"></i></i></div>
                            Accounts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= $base_url ?>admin/all-user.php">User Account Information</a>
                                <a class="nav-link" href="<?= $base_url ?>admin/all-seller.php">Seller Account Information</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-credit-card"></i></div>
                            Payment Information
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="payment" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= $base_url ?>admin/pendingPayment.php">Pending Payment</a>
                                <a class="nav-link" href="<?= $base_url ?>admin/completePayment.php">Complete Payment</a>
                            </nav>
                        </div>

                        <a class="nav-link" href="<?= $base_url ?>admin/all-staff.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-user-tie"></i></div>
                            Staff Information
                        </a>

                        <a class="nav-link" href="<?= $base_url ?>admin/all-product.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-box"></i></div>
                            Product List
                        </a>

                        <!-- <a class="nav-link" href="admin/rating.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-star"></i></div>
                            Product Rating
                        </a> -->

                        <a class="nav-link" href="<?= $base_url ?>admin/jobs.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-plus-circle"></i></div>
                            Add Jobs
                        </a>

                        <a class="nav-link" href="<?= $base_url ?>logs/Logs.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-file-alt"></i></div>
                            Logs
                        </a>

                        </a>
                        <!-- Logout Link -->
                        <a class="nav-link" onclick="logout()">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-right-from-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="medium text-white">Logged in as:</div>
                    <h3 class="text-white"><?php echo $users['fname'] ?></h3>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>