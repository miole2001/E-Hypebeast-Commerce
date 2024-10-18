<header class="header">

   <div class="flex">

      <a href="#" class="logo">E-HypeBeast</a>

      <nav class="navbar">
         <!-- <a href="#">Categories</a> -->
         <a href="#" onclick="logout()">Logout</a>
         <a href="logs.php">Logs</a>
         <a href="products.php">view products</a>
         <a href="profile.php">My profile</a>

      </nav>

      <?php
      
      $select_rows = mysqli_query($connforMyOnlineDb, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

   <script>
    function logout() {
        swal({
            title: "Are you sure?",
            text: "You will be logged out",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willLogout) => {
            if (willLogout) {
                window.location.href = "../logout.php";
            }
        });
    }
</script>

</header>