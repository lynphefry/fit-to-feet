<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function isLoggedIn() {
    return !empty($_SESSION['user_id']);
}

function loginUser($userId, $email, $name) {
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_email'] = $email;
    $_SESSION['user_name'] = $name;
}

function logoutUser() {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
    session_destroy();
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

function getLoggedInUserId() {
    return $_SESSION['user_id'] ?? null;
}

function getLoggedInUserName() {
    return $_SESSION['user_name'] ?? '';
}

function getLoggedInUserEmail() {
    return $_SESSION['user_email'] ?? '';
}
