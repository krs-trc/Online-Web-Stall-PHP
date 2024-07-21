<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molin Kitchen | Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="header-container">
    <div class="logo">
        <a href="index.php">Molin.</a>
    </div>
                   
    <div class="navbar">
        <ul >
            <?php
                if(isset($_SESSION['email']))
                {?>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li>
                    <a href="settings.php"><i class="fa-solid fa-gear"></i>Settings</a>
                    <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                <?php }else
                {?>
                    <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a>
                    <a href="signup.php"><i class="fa-solid fa-user-tie"></i>Admin</a>
                <?php 
                }
            ?>
        </ul>
    </div>
</div>

</body>
</html>