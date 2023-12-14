<?php
session_start();

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!-- Your profile content, including the ability to update and delete -->
