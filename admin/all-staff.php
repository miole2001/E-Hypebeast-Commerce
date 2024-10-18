<?php include('../adminHeader.php');
?>

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center ">
						<div class="col ">
							<div class="mt-4">
								<h1 class="card-title float-left mt-2 text-center">STAFF LIST</h1>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-4 mt-3">

					<div class="card-header">
						<i class="fas fa-table me-1"></i>
						DataTable Example
					</div>
					<div class="card-body">
						<table id="datatablesSimple">
							<thead>
								<tr>
									<th>#</th>
									<th>Image</th>
									<th>Full Name</th>
									<th>Sex</th>
									<th>Documents</th>
									<th>Job Type</th>
									<th>actions</th>
								</tr>
							</thead>
							<?php
							if (isset($_GET['delete_id'])) {
								$delete_id = $_GET['delete_id'];
								// Prepare statement to avoid SQL injection
								$stmt = $connforMyOnlineDb->prepare("DELETE FROM staff WHERE id = ?");
								$stmt->bind_param("i", $delete_id); // "i" for integer type
								$result = $stmt->execute();

								if ($result) {
									echo "<script type='text/javascript'>
											swal({
												title: 'Delete Successful!',
												text: 'Staff deleted successfully!',
												icon: 'success',
												button: 'OK',
											}).then(() => {
												window.location = 'all-staff.php';
											});
										</script>";
								} else {
									echo "<script type='text/javascript'>
											swal({
												title: 'Delete Unsuccessful',
												text: 'There was an error deleting the Staff.',
												icon: 'error',
												button: 'OK',
											}).then(() => {
												window.location = 'all-staff.php';
											});
										</script>";
									}
								$stmt->close();
							}


							$sql = "SELECT * FROM staff ORDER BY id DESC"; // Assuming you have an 'id' field for each user
							$result = $connforMyOnlineDb->query($sql);
							$connforMyOnlineDb->query("SET @num := 0");
							$connforMyOnlineDb->query("UPDATE staff SET id = @num := @num + 1");

							if ($result->num_rows > 0) {

								$count = 1;

								while ($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>" . $count . "</td>";
									echo "<td><img src='../images/user-image/" . $row['image'] . "' alt='user Image' class='user-image' style='width: 100px;'></td>";
									echo "<td>" . $row['full_name'] . "</td>";
									echo "<td>" . $row['sex'] . "</td>";
									echo "<td>" . $row['documents'] . "</td>";
									echo "<td>" . $row['job_type'] . "</td>";
									echo "<td>";
									echo "<button class='btn btn-delete btn-danger' onclick='confirmDelete(" . $row['id'] . ")'>Delete</button>";
									echo "<a href='updateStaff.php?id=" . $row['id'] . "' class='btn btn-update btn-primary'>Update</a> ";
									echo "</td>";
									echo "</tr>";

									$count++;
								}
							} else {
								echo "<tr><td colspan='8' class='text-center text-danger'>No results found</td></tr>";
							}
							$connforMyOnlineDb->close();

							?>

						<script>
							function confirmDelete(id) {
								swal({
										title: "Are you sure?",
										text: "Once deleted, you will not be able to recover this Staff Info.!",
										icon: "warning",
										buttons: true,
										dangerMode: true,
									})
									.then((willDelete) => {
										if (willDelete) {
											window.location = '?delete_id=' + id;
										} else {
											swal("Your Staff Info. is safe!");
										}
									});
							}
						</script>

						</table>
					</div>
				</div>
			</div>
		</div>

	</main>
	<?php include('../includes/script.php'); ?>

	<?php include('../includes/footer.php'); ?>