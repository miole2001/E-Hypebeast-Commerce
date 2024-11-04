<?php
include('../sellerHeader.php');

if (isset($_POST['submit'])) {

	$product = $_POST['product_id'];
	$image = $_POST['image'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$brand = $_POST['brand_name'];
	$type = $_POST['product_type'];
	$seller = $_POST['sellerType'];

	$sql = "INSERT INTO product (item_id, item_name, image, price, brand, item_type, seller_type) VALUES ('$product', '$name', '$image', '$price', '$brand', '$type', '$seller')";

	$result = $connforMyOnlineDb->query($sql);

	if ($result) { ?>
		<script>
			swal({
				title: "Added!",
				text: "Product added successfully!",
				icon: "success",
				button: "OK",
			});
		</script>
	<?php }
	 
	
}
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">PRODUCT TYPE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Select Your Product Type</li>
    </ol>
    <div class="row">
	
	<!-- Sneakers Section -->
    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4"  style="background-color: #9BB7D4">
            <div class="card-body text-center">
                <h3 class="text-black">SNEAKER</h3>
				<img src="<?= $base_url?>images/product-image/shoes.gif" alt="shoes" style="width:300px; height: 200px;">

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C">
                <!-- Button trigger modal -->
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#shoesModal" style="background-color: #27272A">
                View Details
                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>  
            </div>
        </div>
    </div>
        
<!-- Modal for shoes-->
	<div class="modal fade" id="shoesModal" tabindex="-1" aria-labelledby="shoesModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="shoesModalLabel">Add New Sneakers</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
    			<div class="modal-body">
        			<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<label>Brand Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="shoes">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
    			</div>
    		</div>
  		</div>
	</div>

<!-- Hoodies Section -->

    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4"  style="background-color: #9BB7D4";>
            <div class="card-body text-center">
            	<h3  class="text-black">HOODIES</h3>
				<img src="<?= $base_url?>images/image/hoodie.gif" alt="hoodie" style="width:300px; height: 200px;">

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C";>
                <!-- Button trigger modal -->
        	    <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#upperModal" style="background-color: #27272A";>
                	View Details
                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>  
            </div>
        </div>
    </div>

<!-- Modal for Hoodies-->
	<div class="modal fade" id="upperModal" tabindex="-1" aria-labelledby="upperModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
    		<div class="modal-header">
        		<h5 class="modal-title" id="upperModalLabel">Add New Hoodie</h5>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    		</div>
    			<div class="modal-body">
        			<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<label>Brand Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="hoodie">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
    			</div>
   			 </div>
  		</div>
	</div>

<!-- Figurines Section -->

    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4" style="background-color: #9BB7D4";>
            <div class="card-body text-center">
                <h3>FIGURINES</h3>
				<img src="<?= $base_url?>images/image/figurine.jpg" alt="figurine" style="width:300px; height: 200px;">
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C";>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#figurinesModal" style="background-color: #27272A";>
        	        View Details

                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

        <!-- Modal for Figurines-->
	<div class="modal fade" id="figurinesModal" tabindex="-1" aria-labelledby="figurinesModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="figurinesModalLabel">Add New Figurines</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
    			<div class="modal-body">
        			<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<label>Brand Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="figurine">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
    			</div>
    		</div>
  		</div>
	</div>

<!-- Bags Section -->

    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4" style="background-color: #9BB7D4";>
            <div class="card-body text-center">
                <h3>BAGS</h3>
				<img src="<?= $base_url?>images/image/bags.jpg" alt="bags" style="width:300px; height: 200px;">

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C";>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#bagsModal" style="background-color: #27272A";>
                    View Details
                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

<!-- Modal for Bags-->

	<div class="modal fade" id="bagsModal" tabindex="-1" aria-labelledby="bagsModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
    		<div class="modal-header">
        		<h5 class="modal-title" id="bagsModalLabel">Add New Bags</h5>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    		</div>
    			<div class="modal-body">
        			<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<label>Brand Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="bag">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
    			</div>
    		</div>
  		</div>
	</div>

<!-- wellets Section -->

    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4" style="background-color: #9BB7D4";>
            <div class="card-body text-center">
                <h3>WALLETS</h3>
				<img src="<?= $base_url?>images/image/wallet.jpg" alt="wallet" style="width:300px; height: 200px;">

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C";>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#walletsModal" style="background-color: #27272A";>
                    View Details
                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

<!-- Modal for Wallets-->

	<div class="modal fade" id="walletsModal" tabindex="-1" aria-labelledby="walletsModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="walletsModalLabel">Add New Wallets</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<label>Brand Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="wallet">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Watches Section -->

    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4" style="background-color: #9BB7D4";>
            <div class="card-body text-center">
                <h3>WATCHES</h3>
				<img src="<?= $base_url?>images/image/watch.jpg" alt="watch" style="width:300px; height: 200px;">

            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C";>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#watchesModal" style="background-color: #27272A";>
        	        View Details
                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

<!-- Modal for Watches-->

	<div class="modal fade" id="watchesModal" tabindex="-1" aria-labelledby="watchesModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="watchesModalLabel">Add New Watches</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<label>Brand Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="watch">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Cargo Pants Section -->

    <div class="col-xl-4 col-md-6 mt-4">
        <div class="card mb-4" style="background-color: #9BB7D4";>
            <div class="card-body text-center">
                <h3>CARGO PANTS</h3>
	            <img src="<?= $base_url?>images/image/cargo.jpg" alt="cargo" style="width:300px; height: 200px;">
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #3D5E8C";>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#lowerModal" style="background-color: #27272A";>
                	View Details
                </button>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

<!-- Modal for Cargo Pants-->

	<div class="modal fade" id="lowerModal" tabindex="-1" aria-labelledby="lowerModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="lowerModalLabel">Add New Cargo Pants</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="productType.php" method="POST">
								<div class="form-group mt-3">
									<label>Product ID</label>
									<div>
										<input type="text" class="form-control border border-primary" id="product_id" name="product_id" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Upload Image</label>
									<div>
										<input type="file" class="form-control border border-primary" id="image" name="image" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Product Name</label>
									<div>
										<input type="text" class="form-control border border-primary" id="name" name="name" autocomplete="off" required>
									</div>
								</div>
								<div class="form-group mt-3">
									<label>Price</label>
									<div>
										<input type="number" class="form-control border border-primary" id="price" name="price" autocomplete="off" required>
									</div>
								</div>

								<div class="form-group mt-3">
								<label>Brand Name</label>
								<div>
									<input type="text" class="form-control border border-primary" id="brand_name" name="brand_name" autocomplete="off" required>
								</div>
							</div>

								<div class="form-group mt-3">
									<input type="hidden" id="product_type" name="product_type" value="cargo">
								</div>

								<div class="form-group">
									<input type="hidden" id="sellerType" name="sellerType" value="seller">
								</div>

								<div class="modal-footer">
									<button type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
									<button type="submit" name="submit" id="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('../includes/footer.php'); ?>
<?php include('../includes/script.php'); ?>