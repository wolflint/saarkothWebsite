<?php
session_start();

if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    include_once 'dbh.inc.php';

    $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    $conf_pass = mysqli_real_escape_string($conn, $_POST['conf_pass']);
    $seshID = $_SESSION['u_id'];

    //Error handlers
    //Empty inputs
    if (empty($old_pass) || empty($new_pass) || empty($conf_pass)){
        header("Location: ../editPassword.php?edit=empty");
        exit();
    } else {
        $sql = "SELECT user_pwd FROM users WHERE user_id =$seshID;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../editPassword.php?edit=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing password
                $hashedPwdCheck = password_verify($old_pass, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../editPassword.php?edit=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Update old password
                    if ($new_pass != $conf_pass) {
                        header("Location: ../editPassword.php?edit=error");
                        exit();
                    } elseif ($new_pass == $conf_pass) {
                        $hashedPwd = password_hash($new_pass, PASSWORD_DEFAULT);
                        //Replace old pass in DB
                        $sql = "UPDATE users SET user_pwd='$hashedPwd' WHERE user_id=$seshID;";
                        mysqli_query($conn, $sql);
                        header("Location: ../account.php?changePass=success");
                        exit();
                    }
                }
            }
        }
    }
}
?>
