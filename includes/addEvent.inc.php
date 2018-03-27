<?php
session_start();

if (isset($_POST['submit']) && isset($_SESSION['u_uid']) && $_SESSION['u_admin'] > 0) {
    include_once 'dbh.inc.php';

    $seshID = $_SESSION['u_id'];
    // POST variables
    $date = mysqli_real_escape_string($_POST['date']);
    $venue = mysqli_real_escape_string($_POST['venue']);
    $address = mysqli_real_escape_string($_POST['address']);
    $price = mysqli_real_escape_string($_POST['price']);
    $href = mysqli_real_escape_string($_POST['href']);

                $sql = "INSERT INTO tour (date, venue, address, price, href) VALUES ('$date', '$venue', '$address', '$price', '$href')";
                $result = mysqli_query($conn, $sql);

                if ($result = true) {
                    header("Location: ../addEvent.php?=postsuccess");
                    exit();
                } else {
                    echo "You're a failure!";
                    exit();
                }
    exit();
}
