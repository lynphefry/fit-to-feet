<?php
include_once 'db.php';
include_once 'auth.php';

$loginMessage = '';
$userType = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $userType = trim($_POST['userType'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($userType === '') {
        $loginMessage = 'Please select user type.';
    } elseif ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $loginMessage = 'Please enter a valid email.';
    } elseif ($password === '') {
        $loginMessage = 'Please enter your password.';
    } else {
        $stmt = mysqli_prepare($conn, "SELECT id, password, first_name FROM members WHERE email = ?");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $userId, $hashedPassword, $firstName);
            if (mysqli_stmt_fetch($stmt)) {
                if (password_verify($password, $hashedPassword)) {
                    loginUser($userId, $email, $firstName);
                    header('Location: account.php');
                    exit;
                } else {
                    $loginMessage = 'Incorrect email or password.';
                }
            } else {
                $loginMessage = 'Incorrect email or password.';
            }
            mysqli_stmt_close($stmt);
        } else {
            $loginMessage = 'Database error: ' . mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Login | FEET TO FIT</title>

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

<?php if (isLoggedIn()): ?>
<a href="logout.php">Logout</a>
<?php else: ?>
<a href="login.php">Login</a>
<?php endif; ?>

</nav>

<!-- LOGIN SECTION -->

<section class="py-5">

<div class="container">

<div class="row justify-content-center">

<div class="col-lg-6">

<div class="login-box">

<h1 class="text-center mb-4">
LOGIN
</h1>

<p class="text-center text-light mb-4">
Welcome Back To FEET TO FIT
</p>

<!-- LOGIN FORM -->

<form id="loginForm" method="post" action="login.php">
<input type="hidden" name="login_submit" value="1">

<!-- USER TYPE -->

<div class="mb-3">

<label class="mb-2" for="userType">
Login As
</label>

<select class="form-control"
id="userType"
name="userType">

<option value="">
Select User Type
</option>

<option value="Trainer">
Trainer
</option>

<option value="Trainee">
Trainee
</option>

</select>

</div>

<!-- EMAIL -->

<div class="mb-3">

<label class="mb-2">
Email
</label>

<input
type="email"
class="form-control"
id="email"
name="email"
placeholder="Enter Email"
value="<?= htmlspecialchars($email) ?>"
required>

</div>

<!-- PASSWORD -->

<div class="mb-3">

<label class="mb-2">
Password
</label>

<div class="input-group">

<input
type="password"
class="form-control"
id="password"
name="password"
placeholder="Enter Password"
required>

<button
type="button"
class="btn btn-success"
onclick="showPassword()"
aria-label="Show password">

<i id="togglePasswordIcon" class="fa fa-eye"></i>

</button>

</div>

</div>

<!-- REMEMBER -->

<div class="d-flex justify-content-between mb-4">

<div>

<input type="checkbox" id="rememberMe">
<label for="rememberMe" class="ms-1">Remember Me</label>

</div>

<a href="#"
class="text-success">

Forgot Password?

</a>

</div>

<!-- BUTTON -->

<button
type="submit"
class="btn-yellow w-100">

Login

</button>

</form>

<!-- LOGIN MESSAGE -->

<p id="loginMessage" class="text-center mt-4"><?= htmlspecialchars($loginMessage) ?></p>

<!-- REGISTER -->

<div class="text-center mt-4">

<p>
Don't have an account?
</p>

<a href="membership.php"
class="text-success">

Register Here

</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- SCRIPT -->

<script>

function showPassword(){
    const password = document.getElementById('password');
    const icon = document.getElementById('togglePasswordIcon');

    if (password.type === 'password') {
        password.type = 'text';
        if (icon) {
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    } else {
        password.type = 'password';
        if (icon) {
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
}

</script>

</body>

</html>