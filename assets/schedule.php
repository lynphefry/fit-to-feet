<?php include_once 'db.php';

$schedule = [];
$result = mysqli_query($conn, "SELECT * FROM schedule ORDER BY id");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $schedule[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Schedule | FEET TO FIT</title>

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

<!-- HERO -->

<section class="py-5 text-center">

<div class="container">

<h1 class="mb-4">
CLASS SCHEDULE
</h1>

<p class="lead text-light">
Stay organized and never miss your fitness sessions.
</p>

</div>

</section>

<!-- SCHEDULE TABLE -->

<div class="container pb-5">

<div class="card-box p-4">

<div class="table-responsive">

<table class="table table-dark table-hover table-bordered align-middle text-center">

<thead class="table-success">

<tr>

<th>Day</th>

<th>
<i class="fas fa-sun"></i>
Morning
</th>

<th>
<i class="fas fa-cloud-sun"></i>
Afternoon
</th>

<th>
<i class="fas fa-moon"></i>
Evening
</th>

</tr>

</thead>

<tbody>
<?php if (!empty($schedule)): ?>
    <?php foreach ($schedule as $row): ?>
        <tr>
            <td class="fw-bold"><?= htmlspecialchars($row['day']) ?></td>
            <td>
                <?= nl2br(htmlspecialchars($row['morning'])) ?>
            </td>
            <td>
                <?= nl2br(htmlspecialchars($row['afternoon'])) ?>
            </td>
            <td>
                <?= nl2br(htmlspecialchars($row['evening'])) ?>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="4">No class schedule has been added yet.</td>
    </tr>
<?php endif; ?>
</tbody>

</table>

</div>

</div>

</div>

<!-- EXTRA INFO -->

<section class="pb-5">

<div class="container">

<div class="row g-4 text-center">

<!-- CARD 1 -->

<div class="col-md-4">

<div class="card-box">

<i class="fas fa-user-check fa-3x text-success mb-3"></i>

<h3>Professional Trainers</h3>

<p>
Train with certified and
experienced fitness coaches.
</p>

</div>

</div>

<!-- CARD 2 -->

<div class="col-md-4">

<div class="card-box">

<i class="fas fa-clock fa-3x text-success mb-3"></i>

<h3>Flexible Sessions</h3>

<p>
Morning, afternoon, and evening
sessions available.
</p>

</div>

</div>

<!-- CARD 3 -->

<div class="col-md-4">

<div class="card-box">

<i class="fas fa-heartbeat fa-3x text-success mb-3"></i>

<h3>Healthy Lifestyle</h3>

<p>
Improve your body strength,
fitness, and confidence.
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

</body>

</html>