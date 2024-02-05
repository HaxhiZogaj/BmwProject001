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

        $articles = [ //  Krijimi i një array të asociuar ku secili element përfaqëson një artikull. 
            ["image" => "1.png", "title" => "Article Title 1", "content" => "Article summary or content goes here."],
        ];

        foreach ($articles as $article) { 
            // Fillimi i një cikli foreach që kalon nëpër secilin element të array-it $articles.
            echo "<div class='article-box'>"; 
            // Shfaqja e divit me klasen article-box.
            echo "<img src='" . $article["image"] . "' alt='Article Image'>";
            // Shfaqja e një imazhi për artikullin.
            echo "<h2>" . $article["title"] . "</h2>";
            // Shfaqja e titullit të artikullit me h2.
            echo "<p>" . $article["content"] . "</p>";
            // Shfaqja e përmbajtjes së artikullit brenda një paragrafi.
            echo "</div>"; // Mbyllja e divit.
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
