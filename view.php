<?php
require 'common-layout.php';
require 'database.php';
require 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting other form data...
    
    // Check if a file is uploaded
    if (isset($_FILES['userImage']) && $_FILES['userImage']['error'] == UPLOAD_ERR_OK) {
        // Specify the target directory for uploads
        $uploadDirectory = './user_images/';
        
        // Generate a unique filename to avoid overwriting existing files
        $uniqueFilename = uniqid() . '_' . basename($_FILES['userImage']['name']);
        
        // Build the full path to save the uploaded file
        $targetFilePath = $uploadDirectory . $uniqueFilename;
        
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES['userImage']['tmp_name'], $targetFilePath)) {
            // File upload successful, now save the path in the database
            $userImage = $targetFilePath;
            $res = $database->createWithImage($fname, $lname, $age, $email, $movies, $animeEpisodes, $mangaChapter, $liveAction, $userImage);

            if ($res) {
                echo "<p>Successfully inserted data</p>";
            } else {
                echo "<p>Failed to insert data</p>";
            }
        } else {
            echo "<p>Error uploading the image</p>";
        }
    } else {
        // Handle the case when no image is uploaded
        echo "<p>No image uploaded</p>";
    }
}

// Fetch and display subscribers from the database
$res = $database->read();

// Existing code to display subscribers...
?>
<footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© One Piece Fanpage LM</small></p>
    </footer>
