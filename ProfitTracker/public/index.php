<?php
// Continue with your application logic
require "../app/core/init.php";

// Start or resume the session
session_start();

// Set the session expiration time to 24 hours
$session_expiration = 24 * 60 * 60; // 24 hours in seconds

// Check if the session variable last_activity is set
if (isset($_SESSION['last_activity'])) {
    // Calculate the elapsed time since the user's last activity
    $elapsed_time = time() - $_SESSION['last_activity'];

    // If elapsed time is greater than the session expiration time, destroy the session
    if ($elapsed_time > $session_expiration) {
        session_unset();     // Unset all session variables
        session_destroy();   // Destroy the session data in the storage
        session_start();     // Start a new session
        $_SESSION['expired'] = true; // Set a flag for expired session
        header('Location: ' . ROOT . '/login');
        exit(); // Stop further execution
    }
}

// Update last activity time stamp
$_SESSION['last_activity'] = time();



DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();
?>
