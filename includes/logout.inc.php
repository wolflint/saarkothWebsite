<?php
//if logout button pressed unset all session variables, destroy the session and redirect to login page
if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';
    $url = mysqli_real_escape_string($conn, $_POST['page']);
    session_start();
    session_unset();
    session_destroy();
    header("Location: $url?logOutSuccess");
    exit();
}
