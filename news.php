<?php
require_once('C:\xampp\htdocs\BmwProject001\Database.php');

$db = new Database();
$newsItems = $db->getAllNews();
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.html">Home</a>
            <a href="about-us.html">About</a>
            <a href="Login.html">Contact</a>
        </div>
    </nav>

    <div class="container articles-container">
        <?php foreach ($newsItems as $newsItem): ?>
            <div class="article-box">
                <img src="<?php echo htmlspecialchars($newsItem['photopath']); ?>" alt="Article Image">
                <h2><?php echo htmlspecialchars($newsItem['title']); ?></h2>
                <p><?php echo htmlspecialchars($newsItem['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
