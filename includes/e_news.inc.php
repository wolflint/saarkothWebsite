<?php
session_start();
if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    if ($_SESSION['u_uid'] == 'admin') {
        include_once 'dbh.inc.php';

        $p_id = mysqli_real_escape_string($conn, $_POST['p_id']);
        $p_title = mysqli_real_escape_string($conn, $_POST['p_title']);
        $p_content = mysqli_real_escape_string($conn, $_POST['p_content']);

        $sql = "UPDATE news SET title='$p_title', content='$p_content' WHERE post_id=$p_id;";
        // $result = mysqli_query($conn, $sql);

        if (mysqli_query($conn, $sql)) {
            header("Location: ../news.php?edit=success");
            exit();
        } else {
            // header("Location: ../news.php?edit=fail");
            echo "fail";
            exit();
        }
    } else {
        header('Location: ../news.php?edit_error');
        exit();
    }
} else {
    header('Location: ../news.php?edit_error');
    exit();
}
 ?>
