<?php
include 'C:\xampp\htdocs\Bmw\Database.php';

$db = new Database();
$cars = $db->getAllCars(); 
$db->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to BMW Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<body>
    <header class="header">
        <a href="#"><img src="images/logo.png" class="logo-img"></a>
        <nav class="navbar">
            <a href="news.html">News</a>
            <a href="Products.html">Products</a>
            <a href="about-us.html">About Us</a>
            <a href="future.html">Future</a>
            <a href="services.html">Services</a>
            <a href="Login.html">Account</a>
        </nav>
    </header>

    <section class="main-flex-box">
        <?php foreach ($cars as $car): ?>
            <div class="flex-box">
                <a href="car-details.php?id=<?php echo $car['id']; ?>">
                    <img src="<?php echo htmlspecialchars($car['image']); ?>" class="box-img">
                </a>
            </div>
        <?php endforeach; ?>
    </section>
</body>
</body>
</html>
