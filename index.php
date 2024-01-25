<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bmw";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " " . $row["content"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to BMW Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
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
        <div class="flex-box">
            <a href="bmw3series.html"><img src="images/3-Series.png" class="box-img"></a>
        </div>
        <div class="flex-box">
            <a href="M4.html"><img src="images/M4.png" class="box-img"></a>
        </div>
        <div class="flex-box">
            <a href="bmw5series.html"><img src="images/5-Series.png" class="box-img"></a>
        </div>
        <div class="flex-box">
            <a href="Z4.html"><img src="images/Z4.png" class="box-img"></a>
        </div>
        <div class="flex-box">
            <a href="bmw-x5.html"><img src="images/X5.png" class="box-img"></a>
        </div>
        <div class="flex-box">
            <a href="bmw-i8.html"><img src="images/i8.png" class="box-img"></a>
        </div>
    </sectio>
</body>
</html>
