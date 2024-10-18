<?php include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $image = $_POST["image"];
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $sex = $_POST["sex"];
    $age = $_POST["age"];
    $username = $_POST["Username"];
    $address = $_POST["Address"];
    $pass = $_POST["Password"];
    $cpass = $_POST["Confirm_Password"];
    $type = $_POST["user_type"];


    if ($pass === $cpass) {

        $register = "INSERT INTO user (image, fname, email, sex, age, username, address, pass, user_type) 
                VALUES ('$image','$name','$email','$sex','$age','$username','$address','$pass','$type')";

        $result = mysqli_query($connforMyOnlineDb, $register);
        header("Location: login.php");
    } else {

        echo " <script> alert('password does not match'); </script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>
<body>
    <!--=====  Register Form   =====-->
    <div class="container">
        <div class="side-image">
            <img src="images/jordan.gif">
        </div>
        <form action="register.php" method="POST" class="login">
            <h1>Register to Hypebeast</h1>
            <p>Enter your details below</p>
            <input type="text" placeholder="Full Name" name="Name" autocomplete="off" required>
            <input type="email" placeholder="Email" name="Email" autocomplete="off" required>
			<select class="login" id="sex" name="sex" required>
				<option value="" disabled selected>Select</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Gmail">Gmail</option>
			</select>
            <input type="number" placeholder="age" name="age" autocomplete="off" required>
            <input type="text" placeholder="Username" name="Username" autocomplete="off" required>
            <input type="text" placeholder="Address" name="Address" autocomplete="off" required>
            <input type="password" placeholder="Password" name="Password" autocomplete="off" required>
            <input type="password" placeholder="Confirm Password" name="Confirm_Password" autocomplete="off" required>
			<input type="hidden" id="user_type" name="user_type" value="HypeBeast user">

            <div class="create">
                <button>Register</button>
            </div>
            <div class="Add_account">
                <p>I have an account <a href="login.php">Log In</a></p>
            </div>
        </form>
    </div>
</body>
</html>