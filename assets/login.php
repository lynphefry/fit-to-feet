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

<a href="login.php">Login</a>

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

<form id="loginForm">

<!-- USER TYPE -->

<div class="mb-3">

<label class="mb-2" for="userType">
Login As
</label>

<select class="form-control"
id="userType">

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
placeholder="Enter Email"
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
placeholder="Enter Password"
required>

<button
type="button"
class="btn btn-success"
onclick="showPassword()"
aria-label="Show password">

<i class="fa fa-eye"></i>

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

<p id="loginMessage"
class="text-center mt-4"></p>

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
<?php
include 'db.php';

if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO members(first_name,last_name,email)
            VALUES('$fname','$lname','$email')";

    mysqli_query($conn, $sql);
}
?>

<form method="POST">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="email" name="email" placeholder="Email">
    <button type="submit" name="submit">Register</button>
</form>

<!-- SCRIPT -->

<script>

/* SHOW PASSWORD */

function showPassword(){

    const password =
    document.getElementById("password");

    if(password.type === "password"){

        password.type = "text";

    }

    else{

        password.type = "password";

    }

}

/* LOGIN */

document.getElementById("loginForm")

.addEventListener("submit",

function(event){

event.preventDefault();

const userType =
document.getElementById("userType").value;

const email =
document.getElementById("email").value;

const message =
document.getElementById("loginMessage");

if(userType === ""){

    message.innerHTML =
    "⚠ Please Select User Type";

    message.style.color = "red";

}

else{

    message.innerHTML =
    "✅ " + userType +
    " Logged In Successfully";

    message.style.color =
    "#00c853";

    message.style.fontWeight =
    "bold";

}

});

</script>

</body>

</html>