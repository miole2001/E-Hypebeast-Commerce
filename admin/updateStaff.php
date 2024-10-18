<?php
include('../adminHeader.php');

session_start();


$id = $_GET['id'];

$sql = "SELECT * FROM staff WHERE id = $id";
$result = $connforMyOnlineDb->query($sql);

if ($result->num_rows > 0) {
	$user = $result->fetch_assoc();
} else {
	die('User not found.');
}

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$sex = $_POST['sex'];
    $job = $_POST['job'];

	// Update the user's data
	$sql = "UPDATE staff SET full_name='$name', sex='$sex', job_type='$job' WHERE id = $id";
	$result = $connforMyOnlineDb->query($sql);

	if ($result) { ?>
		<script>
			swal({
				title: "Update!",
				text: "Update Staff info. successful!",
				icon: "success",
				button: "OK",
			});
			window.location = 'all-staff.php';

		</script>
	<?php } else {
		echo "Error updating record: " . $connforMyOnlineDb->error;
	}
}

$connforMyOnlineDb->close();
?>


<!--=====  Container  =====-->

<div class="col-xl-4 mt-5 mx-auto" style="width: 800px">
	<div class="card text-white mb-4">
		<div class="card-header text-center" style="background-color: #3D5E8C">
			<h2>Staff</h2>
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
							<label>Full Name</label>
							<div>
								<input type="text" class="form-control border border-info" id="name" name="name" value="<?php echo $user['full_name']; ?>">
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
							<label>Job Type</label>
							<select class="form-control border border-info" id="job" name="job" >
								<option value="Manager" <?php if ($user['job_type'] === 'Manager') echo 'selected'; ?>>Manager</option>
								<option value="Product Manager" <?php if ($user['job_type'] === 'Product Manager') echo 'selected'; ?>>Product Manager</option>
								<option value="Security" <?php if ($user['job_type'] === 'Security') echo 'selected'; ?>>Security</option>
								<option value="Accountant" <?php if ($user['job_type'] === 'Accountant') echo 'selected'; ?>>Accountant</option>
								<option value="Costumer Support" <?php if ($user['job_type'] === 'Costumer Support') echo 'selected'; ?>>Costumer Support</option>
							</select>
						</div>

						<div class="text-center">
							<button type="submit" name="submit" id="submit" class="btn btn-lg mt-4 text-white" style="background-color: #27272A">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>
