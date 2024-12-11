<?php
session_start();

// Mock user data for demonstration
$users = [
    'admin' => 'admin',
    'user1' => '123',
];

// Get submitted username and password
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username=="admin" && $password=='123') {
    $_SESSION['user'] = $username;
    header('Location: dashboard.php'); // Redirect to a dashboard page
    exit;
} else {
    echo '<script>alert("Invalid username or password!"); window.history.back();</script>';
}
?>
