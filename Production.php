<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Products.css">
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="container">
            <a href="index.html">Home</a>
            <a href="about-us.html">About</a>
            <a href="Login.html">Contact</a>
        </div>
    </nav>
    </header>

    <div class="products-container">
        <?php
        $products = [ // Krijimi i një array të asociuar ku secili element përfaqëson një produkt. 
            ["image" => "path_to_product1_image.jpg", "name" => "Product 1 Name", "price" => "$20.00", "description" => "Product 1 Description"],
            ["image" => "path_to_product2_image.jpg", "name" => "Product 2 Name", "price" => "$25.00", "description" => "Product 2 Description"],
            ["image" => "path_to_product1_image.jpg", "name" => "Product 1 Name", "price" => "$20.00", "description" => "Product 1 Description"],
            ["image" => "path_to_product2_image.jpg", "name" => "Product 2 Name", "price" => "$25.00", "description" => "Product 2 Description"],
            ["image" => "path_to_product1_image.jpg", "name" => "Product 1 Name", "price" => "$20.00", "description" => "Product 1 Description"],
            ["image" => "path_to_product2_image.jpg", "name" => "Product 2 Name", "price" => "$25.00", "description" => "Product 2 Description"]    
        ];

        foreach ($products as $product) { //  Fillimi i një cikli foreach që kalon nëpër secilin element të array-it $products.
            echo "<div class='product-box'>"; // Shfaqja e një div-i me klasën product-box për secilin produkt. 
            echo "<img src='" . $product["image"] . "' alt='" . $product["name"] . "'>";
            echo "<h2>" . $product["name"] . "</h2>"; // shfaqja e emrit te produktit si nentitull h2.
            echo "<p class='price'>" . $product["price"] . "</p>"; // Shfaqja e qmimit.
            echo "<p class='description'>" . $product["description"] . "</p>"; // Shfaqja e pershkrimit.
            echo "</div>"; // Mbyllja e product-box.
        }
        ?>
    </div>
</body>
</html>
