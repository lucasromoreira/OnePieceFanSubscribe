<?php
session_start();
require 'header.php';

// Check if the session is started
if (session_status() === PHP_SESSION_ACTIVE) {
    // Destroy the session and redirect to the login page
    session_unset();
    session_destroy();
}

// Redirect to the login page
header('Location: login.php');
exit();
?>
