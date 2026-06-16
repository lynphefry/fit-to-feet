<?php
include_once 'auth.php';
logoutUser();
header('Location: login.php');
exit;
