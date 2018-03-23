<?php
    include_once 'dbh.inc.php';
    if (!isset($_GET['pid'])) {
        header('');
    } else {
        $p_id = $_GET['pid'];
        $sql = "DELETE FROM news WHERE post_id = $p_id";
        mysqli_query($conn, $sql);
        header('');
    }
?>
