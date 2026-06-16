<?php include_once 'db.php';

$testimonials = [];
$result = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $testimonials[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Testimonials | FEET TO FIT</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav>

<a href="../index.php">Home</a>

<a href="trainers.php">Trainers</a>

<a href="classes.php">Classes</a>

<a href="schedule.php">Schedule</a>

<a href="membership.php">Membership</a>

<a href="testimonials.php">Testimonials</a>

<a href="contact.php">Contact</a>

<a href="login.php">Login</a>

</nav>

<div class="container py-5">

<h1 class="text-center mb-5">
TESTIMONIALS
</h1>

<div class="row g-4">
    <?php if (!empty($testimonials)): ?>
        <?php foreach ($testimonials as $testimonial): ?>
            <div class="col-lg-4">
                <div class="card-box">
                    <h3><?= htmlspecialchars($testimonial['name']) ?></h3>
                    <img src="<?= htmlspecialchars($testimonial['image']) ?>" alt="<?= htmlspecialchars($testimonial['name']) ?> testimonial photo">
                    <p>
                        <?= nl2br(htmlspecialchars($testimonial['message'])) ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12">
            <div class="card-box text-center">
                <p>No testimonials are available right now.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

</div>

</body>

</html>