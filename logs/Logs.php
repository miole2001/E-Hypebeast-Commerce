<?php include('../adminHeader.php'); ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center ">
                        <div class="col ">
                            <div class="mt-4">
                                <h1 class="card-title float-left mt-2 text-center ">Logs</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mt-5">
                    <div class="card-body mt-4">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
								    <th>#</th>
	    							<th>Username</th>
		    						<th>Activity</th>
			    					<th>Time Stamp</th>
				    				<th>Actions</th>
					    		</tr>
						    </thead>
								<?php

								if (isset($_GET['delete_id'])) {
									$delete_id = $_GET['delete_id'];
									// Prepare statement to avoid SQL injection
									$stmt = $connforMyOnlineDb->prepare("DELETE FROM logs WHERE id = ?");
									$stmt->bind_param("i", $delete_id); // "i" for integer type
									$result = $stmt->execute();

									if ($result) {
										echo "<script type='text/javascript'>
												swal({
													title: 'Delete Successful!',
													text: 'Log deleted successfully!',
													icon: 'success',
													button: 'OK',
												}).then(() => {
													window.location = 'Logs.php';
												});
											</script>";
									} else {
										echo "<script type='text/javascript'>
												swal({
													title: 'Delete Unsuccessful',
													text: 'There was an error deleting the Log.',
													icon: 'error',
													button: 'OK',
												}).then(() => {
													window.location = 'Logs.php';
												});
											</script>";
										}
									$stmt->close();
								}
                                
								$sql = "SELECT * FROM logs WHERE system_type = 'HypeBeast' ORDER BY id DESC"; // Assuming you have an 'id' field for each user
								$result = $connforMyOnlineDb->query($sql);

								if ($result->num_rows > 0) {
									
                                    $count = 1;
									while ($row = $result->fetch_assoc()) {
                                        echo "</tr>";
										echo "<td>" . $count . "</td>";
										echo "<td>" . $row['username'] . "</td>";
										echo "<td>" . $row['action'] . "</td>";
										echo "<td>" . $row['timestamp'] . "</td>";
										echo "<td>";
										echo "<button class='btn btn-delete btn-danger' onclick='confirmDelete(" . $row['id'] . ")'>Delete</button>";
										echo "</td>";
										echo "</tr>";

                                        $count++;
									}
								} else {
                                    
									echo "<tr><td colspan='8' class='text-center text-danger'>No results found</td></tr>"; // Updated colspan to match the number of <th> elements
								}

								$connforMyOnlineDb->close();
								?>

						<script>
							function confirmDelete(id) {
								swal({
										title: "Are you sure?",
										text: "Once deleted, you will not be able to recover this Log!",
										icon: "warning",
										buttons: true,
										dangerMode: true,
									})
									.then((willDelete) => {
										if (willDelete) {
											window.location = '?delete_id=' + id;
										} else {
											swal("Your Log is safe!");
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

<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>