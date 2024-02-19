<?php
require_once('C:\xampp\htdocs\BmwProject001\Database.php');

$db = new Database();
$products = $db->getAllProducts();
$db->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Products.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a href="index.html">Home</a>
            <a href="about-us.html">About</a>
            <a href="Login.html">Contact</a>
        </div>
    </nav>
    </header>

    <div class="products-container">
        <?php foreach ($products as $product): ?>
            <div class="product-box">
                <video width="280" height="240" controls autoplay loop muted>
                    <source src="<?php echo htmlspecialchars($product['link']); ?>" type="video/mp4">
                </video>
                <h2><?php echo htmlspecialchars($product['title']); ?></h2>
                <p class="price">Price: $<?php echo htmlspecialchars($product['price']); ?></p>
                <p class="description"><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
