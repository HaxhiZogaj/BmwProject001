<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bmw";

$conn = new mysqli($servername, $username, $password, $dbname);
// Krijon një instancë të re të klasës mysqli për të vendosur një lidhje me bazën e të dhënave MySQL duke përdorur 
// emrin e serverit të mëparshëm, emrin e përdoruesit, fjalëkalimin 
// dhe emrin e bazës së të dhënave.

if ($conn->connect_error) { //Kontrollon nëse ka një gabim lidhjeje duke qasur pronën connect_error të objektit
    die("Connection failed: " . $conn->connect_error);
} // Nëse ka një gabim lidhjeje, skripti ndalet dhe printon mesazhin e gabimit.

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) { //  Kontrollon nëse grupi i rezultateve përmban ndonjë rresht.
    while($row = $result->fetch_assoc()) { //  Përdor një cikël while për të marrë çdo rresht të grupit të rezultateve si një varg asociativ. 
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " " . $row["content"]. "<br>";
    } // Printon kolonat id, title dhe content të rreshtit aktual, e ndjekur nga një ndërrim rreshti.
} else {
    echo "0 results"; // Printon "0 rezultate" nëse nuk ka asnjë rresht në grupin e rezultateve.
}

$conn->close(); // mbyllja e lidhjes me bazen e te dhenave
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
