<?php
session_start();
if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    include_once 'dbh.inc.php';

    $seshID = $_SESSION['u_id'];
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $sql = "UPDATE users SET user_first='$first', user_last='$last', user_email='$email', user_address='$address', user_postcode='$postcode', user_city='$city' WHERE user_id=$seshID";
    // $sql = "UPDATE users SET user_first='$first' WHERE user_id=$seshID'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        header("Location: ../account.php?edit=success");
        exit();
    }
    else {
        header("Location: ../account.php?edit=error");
        exit();
    }
} else {
    header("Location: ../account.php?error");
    exit();
}
?>
