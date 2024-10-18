<?php
include('../sellerHeader.php');

session_start();


$id = $_SESSION['id'];
include('../connection.php');

$sql = "SELECT * FROM user WHERE user_type = 'HypeBeast seller'";
$result = $connforMyOnlineDb->query($sql);

if ($result->num_rows > 0) {
	$user = $result->fetch_assoc();
} else {
	die('User not found.');
}

if (isset($_POST['submit'])) {

	$fullname = $_POST['name'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$password = $_POST['password'];

	// Update the user's data
	$sql = "UPDATE user SET fname='$fullname', sex='$sex', age='$age', username='$username', email='$email', number='$number', address='$address', pass ='$password' WHERE user_type = 'HypeBeast seller'";
	$result = $connforMyOnlineDb->query($sql);

	if ($result) { ?>
		<script>
			swal({
				title: "Update!",
				text: "Update successful!",
				icon: "success",
				button: "OK",
			});
		</script>
	<?php } else {
		echo "Error updating record: " . $connforMyOnlineDb->error;
	}
}

$connforMyOnlineDb->close();
?>


<!--=====  Container  =====-->

<div class="col-xl-4 mt-5 mx-auto" style="width: 600px">
	<div class="card text-white mb-4">
		<div class="card-header text-center" style="background-color: #3D5E8C">
			<h2>My Profile</h2>
		</div>
		<div class="card-body text-center" style="background-color: #9BB7D4">
			<div class="row">
				<div class="col-lg-12">
					<form action="seller-info.php" method="POST">

						<div class="form-group mt-3">
							<label>Full name</label>
							<div class="cal-icon">
								<input type="text" class="form-control border border-info" id="name" name="name" value="<?php echo $user['fname']; ?>" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Sex</label>
							<select class="form-control border border-info" id="sex" name="sex" >
								<option value="male" <?php if ($user['sex'] === 'male') echo 'selected'; ?>>Male</option>
								<option value="female" <?php if ($user['sex'] === 'female') echo 'selected'; ?>>Female</option>
							</select>
						</div>

						<div class="form-group mt-3">
							<label>Age</label>
							<div>
								<input type="number" class="form-control border border-info" id="age" name="age" value="<?php echo $user['age']; ?>" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Email</label>
							<div class="cal-icon">
								<input type="email" class="form-control border border-info" id="email" name="email" value="<?php echo $user['email']; ?>" autocomplete="off" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Contact Number</label>
							<div>
								<input type="number" class="form-control border border-info" id="number" name="number" value="<?php echo $user['number']; ?>" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Address</label>
							<div>
								<input type="text" class="form-control border border-info" id="address" name="address" value="<?php echo $user['address']; ?>" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Username</label>
							<div>
								<input type="text" class="form-control border border-info" id="username" name="username" value="<?php echo $user['username']; ?>" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Password</label>
							<div>
								<input type="text" class="form-control border border-info" id="password" name="password" value="<?php echo $user['pass']; ?>" >
							</div>
						</div>
						<div class="text-center">
							<button type="submit" name="submit" id="submit" class="btn btn-lg mt-4 text-white"  style="background-color: #27272A">Update account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('../includes/script.php'); ?>
<?php include('../includes/footer.php'); ?>