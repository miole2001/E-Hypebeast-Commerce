<?php 
session_start();

$id = $_SESSION['id'];
include('connection.php');

$sql = "SELECT * FROM user WHERE user_type = 'HypeBeast user'";
$result = $connforMyOnlineDb->query($sql);

if ($result->num_rows > 0) {
	$users = $result->fetch_assoc();
} else {
	die('User not found.');
}
$base_url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/E-Hypebeast-Commerce/';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard - HypeBeast User</title>
        <link href="<?= $base_url?>css/style.min.css" rel="stylesheet" />
        <link href="<?= $base_url?>css/styles.css" rel="stylesheet" />
        <script src="<?= $base_url?>js/all.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand" style="background-color: #3D5E8C">

        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-white" href="<?= $base_url?>admin/admin.php">E-HypeBeast</a>

        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>

    <div id="layoutSidenav">



        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #3D5E8C">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading text-white">CATEGORIES</div>

                        <a class="nav-link " href="<?= $base_url?>products/products.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            All Products
                        </a>


                        <a class="nav-link " href="<?= $base_url?>user/sneakers.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Sneakers
                        </a>

                        <a class="nav-link " href="<?= $base_url?>user/hoodies.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Hoodies
                        </a>

                        <a class="nav-link " href="<?= $base_url?>user/figurines.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Figurines
                        </a>

                        <a class="nav-link " href="<?= $base_url?>user/bags.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Bags
                        </a>

                        <a class="nav-link " href="<?= $base_url?>user/wallets.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Wallets
                        </a>

                        <a class="nav-link " href="<?= $base_url?>user/watches.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Watches
                        </a>

                        <a class="nav-link " href="<?= $base_url?>user/cargo.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Cargo Pants
                        </a>


                        <div class="sb-sidenav-menu-heading text-white">MY ACCOUNT</div>

                        <a class="nav-link " href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            My profile
                        </a>

                        <a class="nav-link " href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Update My Profile
                        </a>

                        <a class="nav-link " href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            My Logs
                        </a>

                        <a class="nav-link " href="<?= $base_url?>logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
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
