<?php
session_start();
//check is submit button was pressed and if session is set
if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    //check if the user has permission
    if ($_SESSION['u_admin'] > 0) {
        include_once 'dbh.inc.php';

        //get values from $_POST and escape to string
        $p_id = mysqli_real_escape_string($conn, $_POST['p_id']);
        $p_title = mysqli_real_escape_string($conn, $_POST['p_title']);
        $p_content = mysqli_real_escape_string($conn, $_POST['p_content']);

        //update news table with new values
        //else display error message
        $sql = "UPDATE news SET title='$p_title', content='$p_content' WHERE post_id=$p_id;";
        if (mysqli_query($conn, $sql)) {
            header("Location: ../news.php?edit=success");
            exit();
        } else {
            echo "Error updating.";
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
