<?php
session_start();
//check if button was pressed and if session is set
if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    //include connection config
    include_once 'dbh.inc.php';

    //set variables with values from post and escape them to string
    $seshID = $_SESSION['u_id'];
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    // update users table with new values when the user_id matches the session u_id
    $sql = "UPDATE users SET user_first='$first', user_last='$last', user_email='$email', user_address='$address', user_postcode='$postcode', user_city='$city' WHERE user_id=$seshID";

    //if successful redirect back with success else redirect back with error
    if (mysqli_query($conn, $sql)) {
        header("Location: ../account.php?edit=success");
        exit();
    } else {
        header("Location: ../account.php?edit=error");
        exit();
    }
} else {
    header("Location: ../account.php?error");
    exit();
}
?>
