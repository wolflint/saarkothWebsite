<?php
session_start();
include_once 'includes/dbh.inc.php';

$sql = "INSERT INTO orders (order_date, order_address, order_postcode, order_city) VALUES NOW(), ";

foreach ($_SESSION['shopping_cart'] as $key => $product) {
    echo $product['id'] . "<br>";
    echo $product['name'] . "<br>";
    echo $product['quantity'] . "<br>";
    echo $product['price'] . "<br>";
}
 ?>
