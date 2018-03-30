<?php
//if logout button pressed unset all session variables, destroy the session and redirect to login page
if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../login.php");
    exit();
}
