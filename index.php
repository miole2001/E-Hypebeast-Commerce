<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./css/landingPage.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">E-HypeBeast</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./portfolio/index.php">About Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Carousel wrapper -->
<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="./images/landingpage/1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
        <div class="carousel-caption top-0 mt-5 d-flex flex-column justify-content-center align-items-center">
          <h1 class="display-1 fw-bolder text-capitalize">Discover the Latest Trends</h1>
          <p class="mt-4">"Stay ahead of the curve with our exclusive drops. Limited quantities available!"</p>
          <a class="btn btn-primary btn-lg mt-5 " href="login.php" role="button">Shop Now</a>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="./images/landingpage/3.jpeg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption top-0 mt-5 d-flex flex-column justify-content-center align-items-center">
          <p class="display-1 fw-bolder text-capitalize">Join the E-Hypebeast Community</p>
          <p class="mt-4">"Connect with fellow fashion enthusiasts and showcase your style. Tag us to be featured!"</p>
          <a class="btn btn-primary btn-lg mt-5" href="login.php" role="button">Get Inspired</a>
        </div>
      </div>
      <div class="carousel-item c-item">
        <img src="./images/landingpage/2.jpeg" class="d-block w-100 c-img" alt="Slide 3">
        <div class="carousel-caption top-0 mt-5 d-flex flex-column justify-content-center align-items-center">
          <p class="display-1 fw-bolder text-capitalize">Limited-Time Offers!</p>
          <p class="mt-4">Don’t miss out on our special promotions. Grab your favorites before they’re gone!</p>
          <a class="btn btn-primary btn-lg mt-5" href="login.php" role="button">Explore Deals</a>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- Carousel wrapper -->
</div>
</body>
</html>
