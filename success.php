<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $user_id = $_GET['id'];
    $confirm_query = "update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Molin Kitchen | Successful Order</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <br>
        <div class="container">

            <div class="panel-body">
                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to
                    purchase any other item.</p>
            </div>

        </div>
    </div>
</body>

</html>