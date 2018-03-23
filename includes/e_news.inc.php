<?php
session_start();
if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    if ($_SESSION['u_uid'] == 'admin') {
        include_once 'dbh.inc.php';

    } else {
        header('Location: ../news.php?edit_error');
        exit();
    }
} else {
    header('Location: ../news.php?edit_error');
    exit();
}
 ?>
