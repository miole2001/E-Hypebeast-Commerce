<?php include('../adminHeader.php'); ?>

        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card mb-4" style="background-color: #9BB7D4">
                        <div class="card-body text-center">
                            <h3>Total Number of Users </h3>
                            <?php

                            $query = "SELECT * FROM user WHERE user_type = 'HypeBeast user' ";
                            $run_query = mysqli_query($connforMyOnlineDb, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' . $row . '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                            <a class="small text-white stretched-link" href="all-user.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card mb-4" style="background-color: #9BB7D4">
                        <div class="card-body text-center">
                            <h3>Total Number of Sellers </h3>
                            <?php

                            $query = "SELECT * FROM user WHERE pass = '1234' ";
                            $run_query = mysqli_query($connforMyOnlineDb, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' . $row . '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                            <a class="small text-white stretched-link" href="all-seller.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card mb-4" style="background-color: #9BB7D4">
                        <div class="card-body text-center">
                            <h3>Total Number of Products </h3>
                            <?php

                            $query = "SELECT * FROM product";
                            $run_query = mysqli_query($connforMyOnlineDb, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' . $row . '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                            <a class="small text-white stretched-link" href="all-product.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card mb-4" style="background-color: #9BB7D4">
                        <div class="card-body text-center">
                            <h3>Total Number of Staffs </h3>
                            <?php

                            $query = "SELECT * FROM staff";
                            $run_query = mysqli_query($connforMyOnlineDb, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' . $row . '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                            <a class="small text-white stretched-link" href="all-staff.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card mb-4" style="background-color: #9BB7D4">
                        <div class="card-body text-center">
                            <h3>Pending Payments </h3>
                            <?php

                            $query = "SELECT * FROM `order`";
                            $run_query = mysqli_query($connforMyOnlineDb, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' . $row . '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                            <a class="small text-white stretched-link" href="pendingPayment.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6 mt-4">
                    <div class="card mb-4" style="background-color: #9BB7D4">
                        <div class="card-body text-center">
                            <h3>Approved Payments</h3>
                            <?php

                            $query = "SELECT * FROM approved_order";
                            $run_query = mysqli_query($connforMyOnlineDb, $query);

                            $row = mysqli_num_rows($run_query);

                            echo '<h1>' . $row . '</h1>'
                            ?>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                            <a class="small text-white stretched-link" href="completePayment.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>