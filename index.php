
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>One Piece Fanpage</title>
    <meta name="description" content="Explore the Grand Line and the World of Pirates with One Piece fans">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">
</head>

<body id="section1">
    <header>
        <?php
        include("includes/global-nav.php");
        ?>
        
        <div class="header-container">
            <h1>Welcome to the Grand Line</h1>
            <h2>Embark on an Incredible Journey</h2>
        </div>
    </header>
    <?php
session_start();

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!-- Your main content goes here -->

    <main class="container">
    
        <section>
            <h3>Explore the Grand Line</h3>
            <p>If you're a fan of One Piece and the thrilling life of pirates, you've come to the right place. We're
                here to celebrate the world of One Piece and everything it has to offer.</p>
            <<div class="image-space">
                <img src="images/grandline.jpg" alt="Grand Line 1" class="img-fluid">
                <img src="images/master.jpg" alt="Grand Line 2" class="img-fluid">
                </div>

                <article>
                    <h4>Latest Adventures Await</h4>
                    <p>by Captain Luffy<br /><time datetime="2023-10-13">October 13, 2023</time></p>
                    <p>Set sail with us on a journey through the Grand Line, as we uncover the latest adventures of the
                        Straw Hat Pirates and their quest for the One Piece treasure. Join us in the excitement!</p>
                    <div class="image-space">
                        <img src="images/crew.jpg" alt="Adventure 1" class="img-fluid">
                        <img src="images/onepiececrew.jpg" alt="Adventure 2" class="img-fluid">
                    </div>
                </article>
        </section>

        

        <aside>
            <h3 class="new-feature">Stay Informed</h3>
            <p>Don't miss any updates on your favorite crew. Subscribe to our newsletter for the latest news and
                insights from the One Piece world.</p>
        </aside>

        <form name="howFanForm" id="fanForm" action="view.php" method="post">
            <h3>How Big of a Fan Are You?</h3>

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="manga">Have you read the One Piece manga?</label>
            <input type="checkbox" id="manga" name="manga">
            <br>
            <label for="mangaChapter">If yes, how many chapters have you read?</label>
            <input type="number" id="mangaChapter" name="mangaChapter" min="0" max="2000">
            <br>

            <label for="anime">Have you watched the One Piece anime?</label>
            <input type="checkbox" id="anime" name="anime">
            <br>
            <label for="animeEpisodes">If yes, how many episodes have you watched?</label>
            <input type="number" id="animeEpisodes" name="animeEpisodes" min="0" max="2000">
            <br>

            <label for="movies">Have you watched the One Piece movies?</label>
            <input type="checkbox" id="movies" name="movies">
            <br>
            <label for="movieCount">If yes, how many movies have you watched?</label>
            <input type="number" id="movieCount" name="movieCount" min="0">
            <br>
            <label for="userImage">Upload Your Favorite Wallpaper:</label>
            <input type="file" id="userImage" name="userImage">

            <button type="submit" class="btn btn-primary">Subscribe</button>
            <div id="movieNames" style="display: none;">
                <label for="movie1">One piece the movie</label>
                <input type="text" id="movie1" name="movie1">
                <br>
                <label for="movie2">One Piece: Clockwork Island Adventure</label>
                <input type="text" id="movie2" name="movie2">
                <br>
                <label for="movie3">One Piece: Chopper's Kingdom on the Island of Strange Animals</label>
                <input type="text" id="movie3" name="movie3">
                <br>
                <label for="movie4">One Piece: Dead End Adventure</label>
                <input type="text" id="movie4" name="movie4">
                <br>
                <label for="movie5">The Cursed Holy Sword</label>
                <input type="text" id="movie5" name="movie5">
                <br>
                <label for="movie6">One Piece: Baron Omatsuri and the Secret Island</label>
                <input type="text" id="movie6" name="movie6">
                <br>
                <label for="movie7">One Piece: The Giant Mechanical Soldier of Karakuri Castle</label>
                <input type="text" id="movie7" name="movie7">
                <br>
                <label for="movie8">One Piece Episode of Arabasta: The Desert Princess and the Pirates</label>
                <input type="text" id="movie8" name="movie8">
                <br>
                <label for="movie9">One Piece Episode of Chopper Plus: Bloom in Winter, Miracle Sakura</label>
                <input type="text" id="movie9" name="movie9">
                <br>
                <label for="movie10">One Piece Film: Strong World</label>
                <input type="text" id="movie10" name="movie10">
                <br>
                <label for="movie11">One Piece 3D: Straw Hat Chase</label>
                <input type="text" id="movie11" name="movie11">
                <br>
                <label for="movie12">One Piece Film: Z</label>
                <input type="text" id="movie12" name="movie12">
                <br>
                <label for="movie13">One Piece Film: Gold</label>
                <input type="text" id="movie13" name="movie13">
                <br>
                <label for="movie14">One Piece: Stampede</label>
                <input type="text" id="movie14" name="movie14">
                <br>
                <label for="movie15">One Piece Film: Red</label>
                <input type="text" id="movie15" name="movie15">

            </div>

            <label for="liveAction">Have you watched the One Piece live-action series?</label>
            <input type="checkbox" id="liveAction" name="liveAction">
            <br>
            <label for="liveActionEpisodes">If yes, how many live-action episodes have you watched?</label>
            <input type="number" id="liveActionEpisodes" name="liveActionEpisodes" min="0">

            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
        


    </main>

    <footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© One Piece Fanpage LM</small></p>
    </footer>
    
</body>

</html>