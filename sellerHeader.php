<?php
session_start();
include('connection.php');

$id = $_SESSION['id'];

//$insert = "SELECT * FROM user WHERE id = '$id'";

$sql = "SELECT * FROM user WHERE user_type = 'HypeBeast seller'";
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
    <title>Dashboard - HypeBeast Seller</title>
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

    <nav class="sb-topnav navbar navbar-expand " style="background-color: #3D5E8C">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-white" href="index.html">E-HypeBeast</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #3D5E8C">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- dashboard -->
                        <a class="nav-link" href="<?= $base_url ?>seller/seller.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-box"></i></div>
                            My Products
                        </a>
                        <a class="nav-link" href="<?= $base_url ?>seller/seller-info.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-user"></i></div>
                            My account Details
                        </a>
                        <a class="nav-link" href="<?= $base_url ?>seller/productType.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-plus"></i></div>
                            Add New Product
                        </a>
                        <a class="nav-link" href="<?= $base_url ?>logs/logsSeller1.php">
                            <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-file-alt"></i></div>
                            My logs
                        </a>
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