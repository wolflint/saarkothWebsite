<?php
session_start();
include_once 'includes/dbh.inc.php';

if (!isset($_SESSION['u_id'])) {
    header("Location: login.php");
} elseif (!empty($_SESSION['shopping_cart'])) {

    $id = $_SESSION['u_id'];
    $address = $_SESSION['u_address'];
    $post = $_SESSION['u_post'];
    $city = $_SESSION['u_city'];

    $sql = "INSERT INTO orders (order_date, order_address, order_postcode, order_city, users_user_id) VALUES (NOW(), '$address', '$post', '$city', '$id')";
    mysqli_query($conn, $sql);
    $sql = "SELECT order_id FROM orders WHERE users_user_id='$id' ORDER BY order_id DESC LIMIT 1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {
        echo "Fail";
    } else {
        echo "Success" . "<br>";
        $row = mysqli_fetch_assoc($result);
            $orderId = $row['order_id'];
            echo $orderId;
            foreach ($_SESSION['shopping_cart'] as $key => $product) {
                $productId = $product['id'];
                $quant = $product['quantity'];
                $sql = "INSERT INTO orders_products (order_id, product_id, quantity) VALUES ('$orderId', '$productId', '$quant');";
                $result = mysqli_query($conn, $sql);
            }

        }
}
unset($_SESSION['shopping_cart']);
header("Location: account.php#OrderHistory");
 ?>
