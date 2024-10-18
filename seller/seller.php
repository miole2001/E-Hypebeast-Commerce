<?php include('../sellerHeader.php'); ?>

<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row align-items-center ">
				<div class="col ">
					<div class="mt-4">
						<h1 class="card-title float-left mt-2 text-center">PRODUCT LIST</h1>
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
							<th>ID</th>
							<th>Product ID</th>
							<th>Image</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Brand</th>
							<th>Product Type</th>
							<th>actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>ID</th>
							<th>Product ID</th>
							<th>Image</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Brand</th>
							<th>Product Type</th>
							<th>actions</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
						session_start();

						if (isset($_GET['delete_id'])) {
							$delete_id = $_GET['delete_id'];
							// Prepare statement to avoid SQL injection
							$stmt = $connforMyOnlineDb->prepare("DELETE FROM product WHERE id = ?");
							$stmt->bind_param("i", $delete_id); // "i" for integer type
							$result = $stmt->execute();

							if ($result) {
								echo "<script type='text/javascript'>
										swal({
											title: 'Delete Successful!',
											text: 'Product deleted successfully!',
											icon: 'success',
											button: 'OK',
										}).then(() => {
											window.location = 'seller.php';
										});
									</script>";
							} else {
								echo "<script type='text/javascript'>
										swal({
											title: 'Delete Unsuccessful',
											text: 'There was an error deleting the product.',
											icon: 'error',
											button: 'OK',
										}).then(() => {
											window.location = 'seller.php';
										});
									</script>";
							}
							$stmt->close();
						}

						$sql = "SELECT * FROM product WHERE seller_type = 'seller' ORDER BY id DESC";

						$result = $connforMyOnlineDb->query($sql);
						$connforMyOnlineDb->query("SET @num := 0");
						$connforMyOnlineDb->query("UPDATE product SET id = @num := @num + 1");

						if ($result->num_rows > 0) {

							$count = 1;
							while ($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $count . "</td>";
								echo "<td>" . $row['item_id'] . "</td>";
								echo "<td><img src='../images/product-image/" . $row['image'] . "' alt='Image' class='user-image' style='width: 70px;'></td>";
								echo "<td>" . $row['item_name'] . "</td>";
								echo "<td>" . $row['price'] . "</td>";
								echo "<td>" . $row['brand'] . "</td>";
								echo "<td>" . $row['item_type'] . "</td>";
								echo "<td>";
								echo "<button class='btn btn-delete btn-danger' onclick='confirmDelete(" . $row['id'] . ")'>Delete</button>";
								echo "<a href='updateProduct.php?id=" . $row['id'] . "' class='btn btn-update btn-primary'>Update</a> "; // The Update operation would typically be done on a separate page, hence we're using a link to navigate there.
								echo "</td>";
								echo "</tr>";
								$count++;
							}
						} else {
							echo "<tr><td colspan='8' class='text-center text-danger'>No results found</td></tr>";
						}
						$connforMyOnlineDb->close();

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	function confirmDelete(id) {
		swal({
				title: "Are you sure?",
				text: "Once deleted, you will not be able to recover this product!",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					window.location = '?delete_id=' + id;
				} else {
					swal("Your product is safe!");
				}
			});
	}
</script>
<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>