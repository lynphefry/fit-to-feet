<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Events | FEET TO FIT</title>

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

<a href="Events.php">Events</a>

<a href="testimonials.php">Testimonials</a>

<a href="contact.php">Contact</a>

<a href="login.php">Login</a>

</nav>

<!-- HERO -->

<section class="py-5 text-center">

<div class="container">

<h1 class="mb-4">
UPCOMING FITNESS EVENTS
</h1>

<p class="lead text-light">
Join exciting fitness activities,
competitions, and wellness experiences.
</p>

</div>

</section>

<!-- EVENTS SECTION -->

<section class="pb-5">

<div class="container">

<div class="row g-4">

<!-- EVENT 1 -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="bootcamp.webp"
class="trainer-img mb-3"
alt="Bootcamp">

<h3>Fitness Bootcamp</h3>

<p>
Outdoor high-intensity training
with professional trainers.
</p>

<p>
📅 June 15, 2026
</p>

<p>
⏰ 8:00 AM
</p>

<p>
📍 Nairobi Gym Arena
</p>

<button class="btn-yellow"
onclick="joinEvent('Fitness Bootcamp')">

Join Event

</button>

</div>

</div>

<!-- EVENT 2 -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="event%202.webp"
class="trainer-img mb-3"
alt="Zumba">

<h3>Zumba Party</h3>

<p>
Fun dance fitness sessions
with live DJ music.
</p>

<p>
📅 June 20, 2026
</p>

<p>
⏰ 5:00 PM
</p>

<p>
📍 FEET TO FIT Studio
</p>

<button class="btn-yellow"
onclick="joinEvent('Zumba Party')">

Join Event

</button>

</div>

</div>

<!-- EVENT 3 -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="OIP%20(18).webp"
class="trainer-img mb-3"
alt="Yoga">

<h3>Yoga Retreat</h3>

<p>
Meditation and yoga relaxation
experience for members.
</p>

<p>
📅 July 1, 2026
</p>

<p>
⏰ 7:00 AM
</p>

<p>
📍 Karura Forest
</p>

<button class="btn-yellow"
onclick="joinEvent('Yoga Retreat')">

Join Event

</button>

</div>

</div>

<!-- EVENT 4 -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="boxing-player-event.avif"
class="trainer-img mb-3"
alt="Boxing">

<h3>Boxing Championship</h3>

<p>
Competitive boxing challenge
for advanced trainees.
</p>

<p>
📅 July 10, 2026
</p>

<p>
⏰ 2:00 PM
</p>

<p>
📍 FEET TO FIT Arena
</p>

<button class="btn-yellow"
onclick="joinEvent('Boxing Championship')">

Join Event

</button>

</div>

</div>

<!-- EVENT 5 -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="uhuru%20park.webp"
class="trainer-img mb-3"
alt="Marathon">

<h3>Marathon Training</h3>

<p>
Endurance and marathon
preparation workshop.
</p>

<p>
📅 July 15, 2026
</p>

<p>
⏰ 6:00 AM
</p>

<p>
📍 Uhuru Park
</p>

<button class="btn-yellow"
onclick="joinEvent('Marathon Training')">

Join Event

</button>

</div>

</div>

<!-- EVENT 6 -->

<div class="col-lg-4 col-md-6">

<div class="card-box text-center h-100">

<img src="nutrition.webp"
class="trainer-img mb-3"
alt="Nutrition">

<h3>Nutrition Seminar</h3>

<p>
Learn healthy eating and
fitness nutrition strategies.
</p>

<p>
📅 July 20, 2026
</p>

<p>
⏰ 11:00 AM
</p>

<p>
📍 FEET TO FIT Hall
</p>

<button class="btn-yellow"
onclick="joinEvent('Nutrition Seminar')">

Join Event

</button>

</div>

</div>

</div>

<!-- EVENT MESSAGE -->

<div class="text-center mt-5">

<p id="eventMessage"></p>

</div>

</div>

</section>

<!-- BENEFITS -->

<section class="pb-5">

<div class="container">

<h2 class="text-center mb-5">
WHY ATTEND OUR EVENTS?
</h2>

<div class="row g-4 text-center">

<div class="col-md-3">

<div class="card-box">

<i class="fas fa-users fa-3x text-success mb-3"></i>

<h4>Meet Trainers</h4>

<p>
Connect with professional
fitness experts.
</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<i class="fas fa-heartbeat fa-3x text-success mb-3"></i>

<h4>Stay Healthy</h4>

<p>
Boost your fitness and
overall wellness.
</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<i class="fas fa-trophy fa-3x text-success mb-3"></i>

<h4>Competitions</h4>

<p>
Participate in fun gym
competitions and challenges.
</p>

</div>

</div>

<div class="col-md-3">

<div class="card-box">

<i class="fas fa-fire fa-3x text-success mb-3"></i>

<h4>Motivation</h4>

<p>
Stay inspired with fitness
community activities.
</p>

</div>

</div>

</div>

</div>

</section>

<!-- FOOTER -->

<footer class="text-center py-4">

<h3>
FEET TO FIT GYM
</h3>

<p>
Train Hard • Stay Strong • Stay Healthy
</p>

</footer>

<!-- SCRIPT -->

<script>

function joinEvent(eventName){

    const message =
    document.getElementById("eventMessage");

    message.innerHTML =
    "✅ You Successfully Joined " +
    eventName;

    message.style.color =
    "#00c853";

    message.style.fontWeight =
    "bold";

    message.style.fontSize =
    "22px";

}

</script>

</body>

</html>
