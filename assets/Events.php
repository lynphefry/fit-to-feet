<?php include_once 'db.php';

$events = [];
$result = mysqli_query($conn, "SELECT * FROM events ORDER BY event_date, id");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }
}
?>
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
<?php if (!empty($events)): ?>
    <?php foreach ($events as $event): ?>
        <div class="col-lg-4 col-md-6">
            <div class="card-box text-center h-100">
                <img src="<?= htmlspecialchars($event['image']) ?>"
                     class="trainer-img mb-3"
                     alt="<?= htmlspecialchars($event['title']) ?>">

                <h3><?= htmlspecialchars($event['title']) ?></h3>

                <p><?= nl2br(htmlspecialchars($event['description'])) ?></p>

                <p>
                    📅 <?= htmlspecialchars(date('F j, Y', strtotime($event['event_date']))) ?>
                </p>

                <p>
                    ⏰ <?= htmlspecialchars($event['event_time']) ?>
                </p>

                <p>
                    📍 <?= htmlspecialchars($event['location']) ?>
                </p>

                <button class="btn-yellow"
                        onclick="joinEvent('<?= addslashes(htmlspecialchars($event['title'])) ?>')">
                    Join Event
                </button>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="col-12">
        <div class="card-box text-center">
            <p class="mb-0">No upcoming events are available right now. Please check back soon.</p>
        </div>
    </div>
<?php endif; ?>
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
