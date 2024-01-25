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
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    <div class="container articles-container">
        <?php

        $articles = [
            ["image" => "1.png", "title" => "Article Title 1", "content" => "Article summary or content goes here."],
        ];

        foreach ($articles as $article) {
            echo "<div class='article-box'>";
            echo "<img src='" . $article["image"] . "' alt='Article Image'>";
            echo "<h2>" . $article["title"] . "</h2>";
            echo "<p>" . $article["content"] . "</p>";
            echo "</div>";
        }
        ?>
    </div>

    <footer class="news-footer">
        <div class="container">
            <p>&copy; 2024 News Site</p>
        </div>
    </footer>
</body>
</html>
