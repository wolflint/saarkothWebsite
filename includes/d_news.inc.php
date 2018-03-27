<?php
    include_once 'dbh.inc.php';
    //If post id isn't set redirect back to news
    //else delete from news where id matches and delete image file from server then redirect to news
    if (!isset($_GET['pid'])) {
        header('Location: ../news.php?delete_error');
    } else {
        $p_id = $_GET['pid'];
        $image = $_GET['image'];
        $sql = "DELETE FROM news WHERE post_id = $p_id";
        unlink("../" . $image);
        mysqli_query($conn, $sql);
        header('Location: ../news.php?delete_success');
    }
?>
