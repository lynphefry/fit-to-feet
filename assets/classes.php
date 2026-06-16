<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Classes | FEET TO FIT</title>

<!-- Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<!-- Font Awesome -->

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- CSS -->

<link rel="stylesheet"
href="style.css">

</head>

<body>

<!-- NAVBAR -->

<nav>

<a href="../index.php">Home</a>

<a href="trainers.php">Trainers</a>

<a href="classes.php">Classes</a>

<a href="schedule.php">Schedule</a>

<a href="membership.php">Membership</a>

<a href="shop.php">Shop</a>

<a href="testimonials.php">Testimonials</a>

<a href="contact.php">Contact</a>

<a href="login.php">Login</a>

</nav>

<!-- HERO SECTION -->

<section class="hero py-5">

<div class="container text-center">

<h1 class="mb-4">
OUR FITNESS CLASSES
</h1>

<p class="lead text-light">
Train with professionals and achieve your goals faster.
</p>

</div>

</section>

<!-- CLASSES SECTION -->

<div class="container py-5">

<div class="row g-4">

<!-- YOGA -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="OIP%20(8).webp"
class="trainer-img mb-3"
alt="Yoga">

<i class="fas fa-spa fa-3x text-success mb-3"></i>

<h3>Yoga</h3>

<p>
Improve flexibility, posture,
balance, and mental relaxation.
</p>

<p>
🕒 6:00 AM - 7:30 AM
</p>

<p>
👨 Trainer: Sarah
</p>

<button class="btn-yellow book-btn"
onclick="bookClass(this, 'Yoga')">

Book Class

</button>

</div>

</div>

<!-- BOXING -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="trainer%204.webp"
class="trainer-img mb-3"
alt="Boxing">

<i class="fas fa-dumbbell fa-3x text-success mb-3"></i>

<h3>Boxing</h3>

<p>
Professional boxing and
strength training sessions.
</p>

<p>
🕒 10:00 AM - 12:00 PM
</p>

<p>
👨 Trainer: BENJI
</p>

<button class="btn-yellow book-btn"
onclick="bookClass(this, 'Boxing')">

Book Class

</button>

</div>

</div>

<!-- CARDIO -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="oya.jpg"
class="trainer-img mb-3"
alt="Cardio">

<i class="fas fa-heartbeat fa-3x text-success mb-3"></i>

<h3>Cardio</h3>

<p>
High intensity fat burning
and endurance workouts.
</p>

<p>
🕒 5:00 PM - 6:30 PM
</p>

<p>
👨 Trainer: Mercy
</p>

<button class="btn-yellow book-btn"
onclick="bookClass(this, 'Cardio')">

Book Class

</button>

</div>

</div>

<!-- CROSSFIT -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="trainer%203.jpg"
class="trainer-img mb-3"
alt="Crossfit">

<i class="fas fa-fire fa-3x text-success mb-3"></i>

<h3>CrossFit</h3>

<p>
Full body strength and
conditioning workouts.
</p>

<p>
🕒 1:00 PM - 2:30 PM
</p>

<p>
👨 Trainer: JOHN
</p>

<button class="btn-yellow book-btn"
onclick="bookClass(this, 'CrossFit')">

Book Class

</button>

</div>

</div>

<!-- ZUMBA -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="zumba%202.png"
class="trainer-img mb-3"
alt="Zumba">

<i class="fas fa-music fa-3x text-success mb-3"></i>

<h3>Zumba</h3>

<p>
Dance fitness workouts
for fun and calorie burning.
</p>

<p>
🕒 4:00 PM - 5:00 PM
</p>

<p>
👩 Trainer: AMELIA
</p>

<button class="btn-yellow book-btn"
onclick="bookClass(this, 'Zumba')">

Book Class

</button>

</div>

</div>

<!-- STRENGTH -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="tire.jpg"
class="trainer-img mb-3"
alt="Strength Training">

<i class="fas fa-dumbbell fa-3x text-success mb-3"></i>

<h3>Strength Training</h3>

<p>
Build muscle and increase
overall body strength.
</p>

<p>
🕒 7:00 PM - 8:30 PM
</p>

<p>
👨 Trainer: ANDY
</p>

<button class="btn-yellow book-btn"
onclick="bookClass(this, 'Strength Training')">

Book Class

</button>

</div>

</div>

</div>

</div>

<!-- BENEFITS -->

<section class="py-5">

<div class="container">

<h2 class="text-center mb-5">
WHY JOIN OUR CLASSES?
</h2>

<div class="row text-center">

<div class="col-md-3">

<h4 class="text-success">
✔ Certified Trainers
</h4>

</div>

<div class="col-md-3">

<h4 class="text-success">
✔ Modern Equipment
</h4>

</div>

<div class="col-md-3">

<h4 class="text-success">
✔ Flexible Schedule
</h4>

</div>

<div class="col-md-3">

<h4 class="text-success">
✔ Healthy Lifestyle
</h4>

</div>

</div>

</div>

</section>

<!-- SCRIPT -->

<script>

function bookClass(button, className){
    // Disable the button
    button.disabled = true;
    
    // Change button text and style
    button.innerHTML = "✓ Booked";
    button.style.background = "#00c853";
    button.style.cursor = "not-allowed";
    button.style.opacity = "0.7";
}

</script>

</body>

</html>
