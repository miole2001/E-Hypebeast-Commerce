<?php 
include('../adminHeader.php');
session_start();

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE user_type = 'HypeBeast user'";
$result = $connforMyOnlineDb->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    die('User not found.');
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Update the user's data
    $sql = "UPDATE user SET fname='$name', sex='$sex', age='$age', email='$email', address='$address', username='$username', pass ='$password' WHERE id=$id";

	$result = $connforMyOnlineDb->query($sql);

	if ($result) { ?>
		<script>
			swal({
				title: "Update!",
				text: "Update User info. successful!",
				icon: "success",
				button: "OK",
			});
			window.location = 'update_user.php';
		</script>
	<?php } else {
		echo "Error updating record: " . $connforMyOnlineDb->error;
	}
}

$connforMyOnlineDb->close();
?>



<div class="col-xl-4 mt-5 mx-auto" style="width: 800px">
	<div class="card text-white mb-4" style="background-color: #3D5E8C">
		<div class="card-header text-center">
			<h2>Update User</h2>
		</div>
		<div class="card-body text-center" style="background-color: #9BB7D4">
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="POST">

						<div class="form-group mt-3">
							<div>
							<?php if (!empty($user['image'])) : ?>
                                <img src="../images/user-image/<?php echo $user['image']; ?>" alt="Image" class="img-thumbnail" width="300">
                            <?php endif; ?>
							</div>
						</div>

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
								<input type="text" class="form-control border border-info" id="age" name="age" value="<?php echo $user['age']; ?>" >
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Address</label>
							<div>
								<input type="text" class="form-control border border-info" id="address" name="address" value="<?php echo $user['address']; ?>" >
							</div>
						</div>


						<div class="form-group mt-3">
							<label>Email</label>
							<div class="cal-icon">
								<input type="email" class="form-control border border-info" id="email" name="email" value="<?php echo $user['email']; ?>" autocomplete="off" >
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
							<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-4" style="background-color: #27272A">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>
