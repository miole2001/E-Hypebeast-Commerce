<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $sql = "SELECT * FROM user WHERE username = '$username' AND pass = '$password'";
    $result = mysqli_query($connforMyOnlineDb, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);

      // Log the login action
      $type = $row['user_type'];
      $userNAme = $row['username'];
      $activityType = 'Logged In';
      $systemType = 'HypeBeast';

      $logSql = "INSERT INTO logs (username, action, user_type, system_type) VALUES ('$userNAme', '$activityType', '$type', '$systemType')";
      mysqli_query($connforMyOnlineDb, $logSql);

        if ($row["user_type"] == "HypeBeast user") {
            $_SESSION['id'] = $row['id'];
            $_SESSION["username"] = $username;
            header("location:products/products.php");
        } elseif ($row["user_type"] == "HypeBeast admin") {
            $_SESSION["username"] = $username;
            header("location: admin/admin.php");
        } elseif ($row["user_type"] == "HypeBeast seller") {
            $_SESSION["username"] = $username;
            header("location:seller/seller.php");
        }
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Log In</title>
</head>
<body>
    <!--=====  Log In Form   =====-->
    <div class="container">
        <div class="side-image">
            <img src="images/jordan.gif">
        </div>
        <form action="login.php" method="POST" class="login">
                <h1>Log in to Hypebeast</h1>
                <p>Enter your details below</p>
                <input type="text" placeholder="Username" name="Username" autocomplete="off" required>
                <input type="password" placeholder="Password" name="Password" autocomplete="off" required>
                <div class="create">
                    <button>Log in</button>
                </div>
                <div class="Add_account">
                    <p>Not yet Registered? <a href="register.php">Register</a></p>
                </div>
        </form>
    </div>

    <script src="js/sweetAlert.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            <?php if (mysqli_num_rows($result) != 1): ?>
                swal({
                    title: "Oops!",
                    text: "Invalid username or password!",
                    icon: "error",
                    button: "OK"
                }).then(function() {
                    window.location = 'login.php';
                });
            <?php endif; ?>
        });
    </script>
</body>
</html>

