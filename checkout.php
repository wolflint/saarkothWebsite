<?php
//start session and include DB config
session_start();
include_once 'includes/dbh.inc.php';

//check if session is set and if the shopping cart is empty
if (!isset($_SESSION['u_id'])) {
    header("Location: login.php");
} elseif (!empty($_SESSION['shopping_cart'])) {

    //set variables from session
    $id = $_SESSION['u_id'];
    $address = $_SESSION['u_address'];
    $post = $_SESSION['u_post'];
    $city = $_SESSION['u_city'];

    //create new order
    $sql = "INSERT INTO orders (order_date, order_address, order_postcode, order_city, users_user_id) VALUES (NOW(), '$address', '$post', '$city', '$id')";
    mysqli_query($conn, $sql);
    //select the new order
    $sql = "SELECT order_id FROM orders WHERE users_user_id='$id' ORDER BY order_id DESC LIMIT 1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    //check if order was found, if not display message
    if ($resultCheck < 1) {
        echo "Order error.";
    } else {
        //set the value of $orderId to the order_id of the new order
        $row = mysqli_fetch_assoc($result);
            $orderId = $row['order_id'];
            //insert all products from shopping cart to orders_products with the $orderId of the new order
            foreach ($_SESSION['shopping_cart'] as $key => $product) {
                $productId = $product['id'];
                $quant = $product['quantity'];
                $sql = "INSERT INTO orders_products (order_id, product_id, quantity) VALUES ('$orderId', '$productId', '$quant');";
                $result = mysqli_query($conn, $sql);
            }

        }
}
//clear shopping cart and redirect to order history on the account page
unset($_SESSION['shopping_cart']);
header("Location: account.php#OrderHistory");
 ?>
