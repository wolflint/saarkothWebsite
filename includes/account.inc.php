<?php
include_once 'login.inc.php';
include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $uid = $_SESSION['u_id'];

    $sql = "UPDATE users SET user_first='$first', user_last='$last', user_email='$email', user_address='$address', user_postcode='$postcode', user_city='$city' WHERE user_uid='$uid';";
    if ($conn->query($sql) === TRUE) {
    header("Location: ../account.php?success");
} else {
  header("Location: ../account.php?errrooooe");
}

$conn->close();
}
