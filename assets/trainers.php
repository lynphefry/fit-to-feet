<?php include_once 'db.php';

$trainers = [];
$result = mysqli_query($conn, "SELECT * FROM trainers ORDER BY id");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $trainers[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Trainers | FEET TO FIT</title>

  <!-- Bootstrap -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS -->

  <link rel="stylesheet" href="style.css">

</head>

<body>

<!-- NAVBAR -->

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

<!-- TRAINERS -->

<div class="container py-5">

  <h1 class="text-center mb-5">
    OUR TRAINERS
  </h1>

  <div class="row g-4">
    <?php if (!empty($trainers)): ?>
        <?php foreach ($trainers as $trainer): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card-box">
                    <img src="<?= htmlspecialchars($trainer['image']) ?>"
                         class="trainer-img"
                         alt="<?= htmlspecialchars($trainer['name']) ?>">

                    <h3 class="mt-3">
                        <?= htmlspecialchars($trainer['name']) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($trainer['role']) ?>
                    </p>

                    <p>
                        <?= nl2br(htmlspecialchars($trainer['bio'])) ?>
                    </p>

                    <a href="contact.php"
                       class="btn-yellow">
                        Book Now
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="col-12">
            <div class="card-box text-center">
                <p>No trainers are available at the moment.</p>
            </div>
        </div>
    <?php endif; ?>
  </div>
</html>