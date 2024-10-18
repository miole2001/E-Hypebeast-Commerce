<?php

include('connection.php');

// Function to calculate percentage rating
function calculatePercentageRating($totalRatings) {
    return ($totalRatings / 5) * 100;
}

$select_products = mysqli_query($connforMyOnlineDb, "SELECT p.*, AVG(r.rate) AS average_rating FROM `product` p LEFT JOIN `e_hype_ratings` r ON p.id = r.item_id GROUP BY p.id");

if (mysqli_num_rows($select_products) > 0) {
    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
        // Calculate the percentage of star rating
        $star_percentage = calculatePercentageRating($fetch_product['average_rating']);
?>

        <form action="" method="post">
            <div class="box">
                <img src="../images/product-image/<?php echo $fetch_product['image']; ?>" alt="">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <div class="price"><?php echo $fetch_product['item_name']; ?></div>
                <div class="price">₱<?php echo $fetch_product['price']; ?></div>
                <div class="rating">
                    <?php
                    // Display star rating
                    $stars = round($star_percentage / 100); // Convert percentage to stars
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $stars) {
                            echo '<span class="fa fa-star checked"></span>';
                        } else {
                            echo '<span class="fa fa-star"></span>';
                        }
                    }
                    ?>
                </div>
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['item_name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                <a href="view_details.php?id=<?php echo $fetch_product['id']; ?>" class="btn btn-primary">View Details</a>
            </div>
        </form>

<?php
    };
};
?>

