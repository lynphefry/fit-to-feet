<?php
include_once 'auth.php';
include 'db.php';

$submitted = false;
$errors = [];
$name = $email = $phone = $password = $plan = '';
$selectedClass = trim($_GET['class'] ?? '');

$createTableSql = "CREATE TABLE IF NOT EXISTS members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) DEFAULT '',
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) DEFAULT '',
    password VARCHAR(255) DEFAULT '',
    plan VARCHAR(50) DEFAULT '',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
mysqli_query($conn, $createTableSql);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['memberName'] ?? '');
    $email = trim($_POST['memberEmail'] ?? '');
    $phone = trim($_POST['memberPhone'] ?? '');
    $password = trim($_POST['memberPassword'] ?? '');
    $plan = trim($_POST['memberPlan'] ?? '');

    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid email is required.';
    }
    if ($phone === '') {
        $errors[] = 'Phone is required.';
    }
    if ($password === '') {
        $errors[] = 'Password is required.';
    }
    if ($plan === '') {
        $errors[] = 'Please select a plan.';
    }

    if (empty($errors)) {
        $parts = explode(' ', $name, 2);
        $first_name = $parts[0];
        $last_name = $parts[1] ?? '';
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "INSERT INTO members (first_name, last_name, email, phone, password, plan) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ssssss', $first_name, $last_name, $email, $phone, $passwordHash, $plan);
            if (mysqli_stmt_execute($stmt)) {
                $submitted = true;
                $newMemberId = mysqli_insert_id($conn);
                loginUser($newMemberId, $email, $first_name);
                header('Location: account.php');
                exit;
            } else {
                $errors[] = 'Unable to save membership: ' . mysqli_error($conn);
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
    <title>Membership | FEET TO FIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <a class="navbar-brand" href="../index.php">FEET TO FIT</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="trainers.php">Trainers</a></li>
      <li class="nav-item"><a class="nav-link" href="classes.php">Classes</a></li>
      <li class="nav-item"><a class="nav-link" href="schedule.php">Schedule</a></li>
      <li class="nav-item"><a class="nav-link active" href="membership.php">Membership</a></li>
      <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
      <li class="nav-item"><a class="nav-link" href="testimonials.php">Testimonials</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      <?php if (isLoggedIn()): ?>
      <li class="nav-item"><a class="nav-link" href="account.php">My Account</a></li>
      <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      <?php else: ?>
      <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<div class="container my-5">
    <?php if ($submitted): ?>
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title text-success">Registration Successful</h2>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
                <p><strong>Plan:</strong> <?php echo htmlspecialchars($plan); ?></p>
                <a href="membership.php" class="btn btn-primary">Register another</a>
                <a href="../index.php" class="btn btn-link">Home</a>
            </div>
        </div>
    <?php else: ?>
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="card shadow-sm p-4">
                    <h2 class="mb-3">Select Your Plan</h2>
                    <div class="mb-3">
                        <button type="button" class="btn btn-outline-primary w-100 mb-2" onclick="selectPlan('monthly')">Basic - Ksh 2,000</button>
                        <button type="button" class="btn btn-outline-primary w-100 mb-2" onclick="selectPlan('quarterly')">Premium - Ksh 5,000</button>
                        <button type="button" class="btn btn-outline-primary w-100" onclick="selectPlan('yearly')">VIP - Ksh 8,000</button>
                    </div>
                    <p id="selectedPlanText" class="fw-bold">Selected plan: <?php echo $plan ? htmlspecialchars(ucfirst($plan)) : 'None'; ?></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card shadow-sm p-4">
                    <h2 class="mb-3">Join FEET TO FIT</h2>
                    <?php if (!empty($selectedClass)): ?>
                        <div class="alert alert-info">
                            You selected <strong><?php echo htmlspecialchars($selectedClass); ?></strong>. Complete this form to book that class.
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach ($errors as $e): ?>
                                    <li><?php echo htmlspecialchars($e); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="membership.php" id="membershipForm">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Full name</label>
                                <input name="memberName" class="form-control" value="<?php echo htmlspecialchars($name); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input name="memberEmail" type="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input name="memberPhone" class="form-control" value="<?php echo htmlspecialchars($phone); ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Password</label>
                                <input name="memberPassword" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Plan</label>
                            <select name="memberPlan" id="memberPlan" class="form-select">
                                <option value="">Select a plan</option>
                                <option value="monthly" <?php if ($plan === 'monthly') echo 'selected'; ?>>Monthly</option>
                                <option value="quarterly" <?php if ($plan === 'quarterly') echo 'selected'; ?>>Quarterly</option>
                                <option value="yearly" <?php if ($plan === 'yearly') echo 'selected'; ?>>Yearly</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<script>
function selectPlan(plan) {
    const select = document.getElementById('memberPlan');
    if (select) {
        select.value = plan;
    }
    const display = document.getElementById('selectedPlanText');
    if (display) {
        display.textContent = 'Selected plan: ' + plan.charAt(0).toUpperCase() + plan.slice(1);
    }
}
</script>
</body>
</html>
