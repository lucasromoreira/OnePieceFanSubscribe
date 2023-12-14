<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Your Website</h1>
        <nav>
            <?php if (isset($_SESSION['user_id'])) : ?>
                <a href="logout.php">Logout</a>
                <a href="profile.php">Profile</a>
            <?php else : ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>

