<?php
//jobs.php
include('../adminHeader.php');

if (isset($_POST['submit'])) {

	$position = $_POST['position'];
	$requirements = $_POST['requirements'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	$sql = "INSERT INTO job_lists (job_position, requirements, email, number) VALUES ('$position', '$requirements', '$email', '$number')";

	$result = $connforMyOnlineDb->query($sql);

	if ($result) { ?>
		<script>
			swal({
				title: "Added!",
				text: "Job added successfully!",
				icon: "success",
				button: "OK",
			});
		</script>
	<?php }
}
?>

<div class="col-xl-4 mt-5 mx-auto" style="width: 1000px">
	<div class="card text-white mb-4">
		<div class="card-header text-center" style="background-color: #3D5E8C">
			<h2>Add New Job</h2>
		</div>
		<div class="card-body text-center" style="background-color: #9BB7D4">
			<div class="row">
				<div class="col-lg-12">
					<form action="jobs.php" method="POST">

                        <div class="form-group mt-3">
						<label>Job Position</label>
							<select class="form-control border border-info" id="position" name="position" >
                                <option value="" disabled selected>Select</option>
								<option value="Rider">Rider</option>
								<option value="Manager">Manager</option>
                                <option value="Secretary">Secretary</option>
                                <option value="Product Sorter">Product Sorter</option>
                                <option value="Distributor">Distributor</option>
							</select>
						</div>

						<div class="form-group mt-4">
                            <label for="requirements">Requirements</label>
                            <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
                        </div>

						<div class="form-group mt-4">
							<label>Contact Email</label>
							<div class="cal-icon">
								<input type="email" class="form-control border border-info" id="email" name="email">
							</div>
						</div>

						<div class="form-group mt-4">
							<label>Contact Number</label>
							<div>
								<input type="number" class="form-control border border-info" id="number" name="number">
							</div>
						</div>

						<div class="text-center">
							<button type="submit" name="submit" id="submit" class="btn btn-lg mt-4 text-white"  style="background-color: #27272A">Add Job</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


</main>

<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>