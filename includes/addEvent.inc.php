<?php
session_start();
if (isset($_POST['submit']) && isset($_SESSION['u_uid']) && $_SESSION['u_admin'] > 0) {
    include_once 'dbh.inc.php';

    // POST variables
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $href = mysqli_real_escape_string($conn, $_POST['href']);

    //Insert into tour
    $sql = "INSERT INTO tour (date, venue, address, price, href) VALUES ('$date', '$venue', '$address', '$price', '$href')";
    $result = mysqli_query($conn, $sql);

    //If query succesful redirect back to addEvent else echo error
    if ($result = true) {
        header("Location: ../addEvent.php?=postsuccess");
        exit();
    } else {
        echo "Could't insert into database. \n Please contact Marcin";
        echo "<a href=\"addEvent.php\">Back</a>";
        exit();
    }
    exit();
}
