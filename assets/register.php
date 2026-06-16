<?php
include_once 'db.php';

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