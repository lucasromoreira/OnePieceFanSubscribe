CREATE TABLE subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    movies BOOLEAN NOT NULL,
    animeEpisodes INT,
    mangaChapter INT,
    liveAction BOOLEAN,
    userImage VARCHAR(255)
);
