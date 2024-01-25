<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Products.css">
</head>
<body>
    <header>
        <!-- Your existing header and navigation code -->
    </header>

    <div class="products-container">
        <?php
        $products = [
            ["image" => "path_to_product1_image.jpg", "name" => "Product 1 Name", "price" => "$20.00", "description" => "Product 1 Description"],
            ["image" => "path_to_product2_image.jpg", "name" => "Product 2 Name", "price" => "$25.00", "description" => "Product 2 Description"],
            ["image" => "path_to_product1_image.jpg", "name" => "Product 1 Name", "price" => "$20.00", "description" => "Product 1 Description"],
            ["image" => "path_to_product2_image.jpg", "name" => "Product 2 Name", "price" => "$25.00", "description" => "Product 2 Description"],
            ["image" => "path_to_product1_image.jpg", "name" => "Product 1 Name", "price" => "$20.00", "description" => "Product 1 Description"],
            ["image" => "path_to_product2_image.jpg", "name" => "Product 2 Name", "price" => "$25.00", "description" => "Product 2 Description"]    
        ];

        foreach ($products as $product) {
            echo "<div class='product-box'>";
            echo "<img src='" . $product["image"] . "' alt='" . $product["name"] . "'>";
            echo "<h2>" . $product["name"] . "</h2>";
            echo "<p class='price'>" . $product["price"] . "</p>";
            echo "<p class='description'>" . $product["description"] . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
