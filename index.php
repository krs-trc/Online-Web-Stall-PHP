<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Molin Kitchen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </head>
    <body>
    <?php require 'header.php'; ?>
        
        <main>
            <div class="banner">
                    <h1>Welcome to Molin's Kitchen</h1>
                    <p>We sell delicious food to enjoy together.</p>
                    <br>
                    <a href="products.php" class="btn">Order Now</a>
            </div>
            <div class="container">
                <div class="products">
                    <div class="product">
                        <a href="products.php">
                            <img src="img/camera.jpg" alt="Camera">
                        </a>
                        <div>
                            <p>Chicken Rice</p>
                            <p>Choose among all kinds of chicken rice selection.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="products.php">
                            <img src="img/watch.jpg" alt="Watch">
                        </a>
                        <div>
                            <p>Tomyam Bar</p>
                            <p>Originally made tomyam soup from fresh ingredients.</p>
                        </div>
                    </div>
                    <div class="product">
                        <a href="products.php">
                            <img src="img/shirt.jpg" alt="Shirt">
                        </a>
                        <div>
                            <p>Western Food</p>
                            <p>Our exquisite collection of western foods available.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
