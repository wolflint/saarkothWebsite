<?php
    include_once 'dbh.inc.php';

    //If no id redirect to index
    //else delete from tour where id matches and relocate to index
    if (!isset($_GET['id'])) {
        header('Location: ../index.php?delete_error');
    } else {
        $id = $_GET['id'];
        $sql = "DELETE FROM tour WHERE id = $id";
        mysqli_query($conn, $sql);
        header('Location: ../index.php?delete_success#tour');
    }
?>
