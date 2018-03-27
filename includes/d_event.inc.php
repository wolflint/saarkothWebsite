<?php
    include_once 'dbh.inc.php';
    if (!isset($_GET['id'])) {
        header('Location: ../index.php?delete_error');
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM tour WHERE id = $id";
        mysqli_query($conn, $sql);
        header('Location: ../index.php?delete_success#tour');
    }
?>
