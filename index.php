

<?php
include_once 'assets/db.php';
$name = $_POST['name'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>FEET TO FIT</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="assets\style.css">

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

  <div class="container">

    <a class="navbar-brand" href="#">
      FEET TO FIT
    </a>

    <button class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navMenu"
      aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navMenu">

      <ul class="navbar-nav align-items-center">

        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets/trainers.php">Trainers</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets/classes.php">Classes</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="assets/Events.php">Events</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets\schedule.php">Schedule</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets/membership.php">Membership</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets/testimonials.php">Testimonials</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="assets/contact.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="assets/shop.php">Shop</a>
         </li>

        <li class="nav-item">
          <a class="btn-yellow ms-3"
          href="assets/login.php">
            Login
          </a>
        </li>

      </ul>

    </div>

  </div>

</nav>

<!-- HERO SECTION -->

<section class="hero">

  <div class="container">

    <div class="row align-items-center">

      <!-- TEXT -->

      <div class="col-lg-6 hero-text">

        <h1>
          TRAIN HARD <br>
          <span>STAY STRONG</span>
        </h1>

        <p>
          Connect with professional trainers and transform
          your body with FEET TO FIT GYM.
        </p>

        <p class="text- fw-bold">
          Build Strength • Burn Fat • Stay Fit
        </p>

        <div class="mt-4">

          <a href="assets/membership.php"
          class="btn-yellow me-3">
            Join Now
          </a>

          <a href="assets/schedule.php"
          class="btn-outline-custom">
            View Schedule
          </a>

        </div>

      </div>

      <!-- IMAGE -->

      <div class="col-lg-6 text-center mt-5 mt-lg-0">

        <img src="assets/images/OIP%20(3).webp"
        alt="Gym Trainer"
        class="hero-image img-fluid">

      </div>

    </div>

  </div>

</section>
<!-- Bootstrap Carousel Start -->
<div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/black.jpg" class="d-block w-100" alt="Gym 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome to Feet To Fit Gym</h5>
        <p>Train Hard. Stay Strong.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/adapt-2_0-seamless-sports-bra-cherry-brown-womens-2_60f6e7b2.jpg" class="d-block w-100" alt="Gym 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Modern Equipment</h5>
        <p>State-of-the-art fitness machines.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/woman.webp" class="d-block w-100" alt="Gym 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Expert Trainers</h5>
        <p>Guidance from certified professionals.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Bootstrap Carousel End -->
<!-- FEATURES -->

<section class="features">

  <div class="container">

    <div class="row text-center">

      <!-- CARD 1 -->

      <div class="col-md-4 mb-4">

        <div class="feature-card">

          <i class="fas fa-dumbbell"></i>

          <h3>Modern Equipment</h3>

          <p>
            Train using advanced fitness equipment
            for better performance.
          </p>

        </div>

      </div>

      <!-- CARD 2 -->

      <div class="col-md-4 mb-4">

        <div class="feature-card">

          <i class="fas fa-user-friends"></i>

          <h3>Expert Trainers</h3>

          <p>
            Get guidance from certified and
            experienced gym trainers.
          </p>

        </div>

      </div>

      <!-- CARD 3 -->

      <div class="col-md-4 mb-4">

        <div class="feature-card">

          <i class="fas fa-heartbeat"></i>

          <h3>Healthy Lifestyle</h3>

          <p>
            Improve your health, confidence,
            and strength every day.
          </p>

        </div>

      </div>

    </div>

  </div>

</section>



<footer>

  <div class="container">

    <h3>
      FEET TO FIT GYM
    </h3>

    <p>
      Train Hard • Stay Strong • Stay Healthy
    </p>

<div class="social-icons">
  <a href="https://facebook.com/yourpage" target="_blank" rel="noopener" title="Visit our Facebook page">
    <i class="fab fa-facebook"></i>
  </a>
  <a href="https://instagram.com/yourprofile" target="_blank" rel="noopener" title="Visit our Instagram profile">
    <i class="fab fa-instagram"></i>
  </a>
  <a href="https://twitter.com/yourprofile" target="_blank" rel="noopener" title="Visit our Twitter profile">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="https://tiktok.com/@yourprofile" target="_blank" rel="noopener" title="Visit our TikTok profile">
    <i class="fab fa-tiktok"></i>
  </a>
</div>

    </div>

    <p class="mt-4">
      © 2026 Feet To Fit Gym. All Rights Reserved.
    </p>

  </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="assets/script.js"></script>

</body>
</html>
