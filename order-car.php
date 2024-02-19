<?php
require_once('C:\xampp\htdocs\BmwProject001\Database.php');

if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    $db = new Database();
    $car = $db->getCarById($carId);
    $db->close();
} else {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="video-series.css">
    <title><?php echo htmlspecialchars($car['title']); ?></title>
</head>
<body>

    <header class="header">
        <a href="#"><img src="images/logo.png" class="logo-img"></a>
        <nav class="navbar">
            <a href="Home-page.html">Home</a>
        </nav>
    </header>

    <section class="wrap">
        <section>
            <video class="video" autoplay muted loop>
                <source src="<?php echo htmlspecialchars($car['link']); ?>" type="video/mp4">
            </video>
        </section>
        <div class="text-box">
            <h2><?php echo htmlspecialchars($car['title']); ?></h2>
            <p><?php echo htmlspecialchars($car['details']); ?></p>
            <a href="order-page.php?id=<?php echo $car['id']; ?>"><button type="button">Order Now</button></a>
        </div>
    </section>   
</body>
</html>
