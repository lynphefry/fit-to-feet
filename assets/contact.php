<?php
include_once 'db.php';

$sent = false;
$errors = [];
$name = $email = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['contactName'] ?? '');
    $email = trim($_POST['contactEmail'] ?? '');
    $message = trim($_POST['contactMessage'] ?? '');

    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }
    if ($message === '') {
        $errors[] = 'Message is required.';
    }

    if (empty($errors)) {
        $stmt = mysqli_prepare($conn, "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $message);
            if (mysqli_stmt_execute($stmt)) {
                $sent = true;
                $name = $email = $message = '';
            } else {
                $errors[] = 'Unable to send message right now.';
            }
            mysqli_stmt_close($stmt);
        } else {
            $errors[] = 'Database error: ' . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact | FEET TO FIT</title>

<!-- Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

<!-- CONTACT SECTION -->

<div class="container py-5">

<h1 class="text-center mb-5">
CONTACT US
</h1>

<div class="row justify-content-center">

<div class="col-lg-6">

<?php if ($sent): ?>
    <div class="alert alert-success">✅ Message sent successfully.</div>
<?php endif; ?>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="post" action="contact.php" class="card-box">

<!-- NAME -->

<div class="mb-3">

<label>Name</label>

<input type="text"
name="contactName"
value="<?php echo htmlspecialchars($name); ?>"
class="form-control"
placeholder="Enter your name"
required>

</div>

<!-- EMAIL -->

<div class="mb-3">

<label>Email</label>

<input type="email"
name="contactEmail"
value="<?php echo htmlspecialchars($email); ?>"
class="form-control"
placeholder="Enter your email"
required>

</div>

<!-- MESSAGE -->

<div class="mb-3">

<label>Message</label>

<textarea name="contactMessage" class="form-control"
rows="5"
placeholder="Write your message"
required><?php echo htmlspecialchars($message); ?></textarea>

</div>

<!-- BUTTON -->

<button type="submit" class="btn-yellow">
Send Message
</button>

</form>

</div>

</div>

</div>

</body>

</html>