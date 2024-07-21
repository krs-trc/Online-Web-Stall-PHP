<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- External CSS -->
        <link rel="stylesheet" href="style.css" type="text/css">
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
            }
            header, footer {
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px 0;
            }
            .container {
                width: 80%;
                margin: 0 auto;
                padding: 20px;
            }
            .jumbotron {
                background-color: #ddd;
                padding: 20px;
                border-radius: 5px;
                text-align: center;
            }
            .products {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .product {
                background-color: #fff;
                border: 1px solid #ddd;
                margin: 10px;
                padding: 20px;
                flex: 1 0 21%;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                text-align: center;
            }
            .product img {
                max-width: 100%;
                height: auto;
            }
            .product h3 {
                margin: 10px 0;
            }
            .btn {
                display: inline-block;
                padding: 10px 20px;
                color: #fff;
                background-color: #333;
                text-decoration: none;
                border-radius: 5px;
                margin: 5px 0;
                transition: background-color 0.3s;
            }
            .btn:hover {
                background-color: #555;
            }
            .btn.disabled {
                background-color: #aaa;
            }
        </style>
    </head>
    <body>
        <div>
        <?php require 'header.php'; ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to Molin's Kitchen!</h1>
                    <p>This is our menu and the price that you can choose to order.</p>
                </div>
                <div class="products">
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/cannon_eos.jpg" alt="Cannon">
                        </a>
                        <h3>Cannon EOS</h3>
                        <p>Price: Rs. 36000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(1)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=1" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                        </a>
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 40000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(2)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=2" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                        </a>
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 50000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(3)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=3" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/olympus.jpg" alt="Olympus">
                        </a>
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 80000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(4)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=4" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="products">
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/titan301.jpg" alt="Titan 301">
                        </a>
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs. 13000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(5)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=5" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/titan201.jpg" alt="Titan 201">
                        </a>
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs. 3000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(6)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=6" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/hmt.JPG" alt="HMT Milan">
                        </a>
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(7)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=7" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/favreleuba.jpg" alt="Favre Leuba">
                        </a>
                        <h3>Favre Leuba #111</h3>
                        <p>Price: Rs. 18000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(8)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=8" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="products">
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/raymond.jpg" alt="Raymond Shirt">
                        </a>
                        <h3>Raymond</h3>
                        <p>Price: Rs. 1500.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(9)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=9" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/charles.jpg" alt="Charles Shirt">
                        </a>
                        <h3>Charles</h3>
                        <p>Price: Rs. 1000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(10)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=10" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/HXR.jpg" alt="HXR Shirt">
                        </a>
                        <h3>HXR</h3>
                        <p>Price: Rs. 900.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(11)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=11" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="product">
                        <a href="cart.php">
                            <img src="img/pink.jpg" alt="PINK Shirt">
                        </a>
                        <h3>PINK</h3>
                        <p>Price: Rs. 1200.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <a href="login.php" class="btn">Buy Now</a>
                        <?php } else { ?>
                            <?php if(check_if_added_to_cart(12)) { ?>
                                <a href="#" class="btn disabled">Added to cart</a>
                            <?php } else { ?>
                                <a href="cart_add.php?id=12" class="btn">Add to cart</a>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
      
        </div>
    </body>
</html>
