<?php
require 'common-layout.php';
require 'database.php';
require 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and process form data to log in the user
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple validation (you can add more based on your requirements)
    if (empty($username) || empty($password)) {
        echo "<p>Please fill in all fields</p>";
        exit();
    }

    // Example: Check user credentials
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $database->getConnection()->prepare($sql);
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $userData = $result->fetch_assoc();
            // Verify the password
            if (password_verify($password, $userData['password'])) {
                // Set user session upon successful login
                $_SESSION['user_id'] = $userData['id'];
                header('Location: index.php');
                exit();
            } else {
                echo "<p>Invalid username or password</p>";
            }
        } else {
            echo "<p>Invalid username or password</p>";
        }
    } else {
        echo "<p>Error logging in</p>";
    }

    $stmt->close();
}
?>
<!-- Your login form goes here -->
<?php require 'footer.php'; ?>

<!-- HTML form for user login -->
<!DOCTYPE html>

<html>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>
<footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© One Piece Fanpage LM</small></p>
    </footer>
</html>