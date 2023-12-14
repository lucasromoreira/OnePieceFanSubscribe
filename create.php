<?php
require 'common-layout.php';
require 'database.php';
require 'header.php';

// Initialize variables to store form data
$username = $password = $email = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process form data to create a new user

    // Validate username
    if (empty($_POST['username'])) {
        echo "<p>Please enter a username</p>";
    } else {
        $username = htmlspecialchars($_POST['username']);
    }

    // Validate password
    if (empty($_POST['password'])) {
        echo "<p>Please enter a password</p>";
    } else {
        // You may want to perform additional password validation here
        $password = htmlspecialchars($_POST['password']);
    }

    // Validate email
    if (empty($_POST['email'])) {
        echo "<p>Please enter an email address</p>";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email address</p>";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    // If all validation passed, proceed to insert into the database
    if (!empty($username) && !empty($password) && !empty($email)) {
        // Example: Insert user into the database
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        
        // Use prepared statements to prevent SQL injection
        $stmt = $database->getConnection()->prepare($sql);
    
        $stmt->bind_param("sss", $username, $password, $email);
    
        // Execute the statement
        if ($stmt->execute()) {
            echo "<p>User created successfully</p>";
        } else {
            echo "<p>Error creating user</p>";
        }
    
        $stmt->close();
    }
}
?>

<!-- HTML form for creating a user -->
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <button type="submit">Create User</button>
</form>
<footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© One Piece Fanpage LM</small></p>
    </footer>

