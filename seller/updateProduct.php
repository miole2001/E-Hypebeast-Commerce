<?php
include('../sellerHeader.php');

session_start();


$id = $_GET['id'];

$sql = "SELECT * FROM product WHERE seller_type = 'seller'";
$result = $connforMyOnlineDb->query($sql);

if ($result->num_rows > 0) {
	$user = $result->fetch_assoc();
} else {
	die('User not found.');
}

if (isset($_POST['submit'])) {

	$product = $_POST['productId'];
	$name = $_POST['productName'];
	$price = $_POST['price'];
    $brand = $_POST['brandName'];

	// Update the user's data
	$sql = "UPDATE product SET item_id='$product', item_name='$name', price='$price', brand='$brand' WHERE id = $id";
	$result = $connforMyOnlineDb->query($sql);

	if ($result) { ?>
		<script>
			swal({
				title: "Update!",
				text: "Update product successful!",
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

<div class="col-xl-4 mt-5 mx-auto" style="width: 1000px">
	<div class="card text-white mb-4">
		<div class="card-header text-center" style="background-color: #3D5E8C">
			<h2>Product</h2>
		</div>
		<div class="card-body text-center" style="background-color: #9BB7D4">
			<div class="row">
				<div class="col-lg-12">
					<form action="" method="POST">

                        <div class="form-group mt-3">
							<div>
							<?php if (!empty($user['image'])) : ?>
                                <img src="../images/product-image/<?php echo $user['image']; ?>" alt="Image" class="img-thumbnail" width="300">
                            <?php endif; ?>
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Product ID</label>
							<div class="cal-icon">
								<input type="number" class="form-control border border-info" id="productId" name="productId" value="<?php echo $user['item_id']; ?>">
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Product Name</label>
							<div>
								<input type="text" class="form-control border border-info" id="productName" name="productName" value="<?php echo $user['item_name']; ?>">
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Price</label>
							<div class="cal-icon">
								<input type="number" class="form-control border border-info" id="price" name="price" value="<?php echo $user['price']; ?>">
							</div>
						</div>

						<div class="form-group mt-3">
							<label>Brand Name</label>
							<div>
								<input type="text" class="form-control border border-info" id="brandName" name="brandName" value="<?php echo $user['brand']; ?>" >
							</div>
						</div>

						<div class="text-center">
							<button type="submit" name="submit" id="submit" class="btn btn-lg mt-4 text-white"  style="background-color: #27272A">Update Product</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('../includes/script.php'); ?>
<?php include('../includes/footer.php'); ?>