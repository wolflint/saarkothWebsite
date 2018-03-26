<?php

session_start();

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check if inputs are empty
    if (empty($uid) || empty($pwd)) {
        header("Location: ../login.php?login=empty");
        exit();

    } else {
        $sql = "SELECT * FROM users WHERE user_uid = '$uid' OR user_email = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../login.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../login.php?login=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    $_SESSION['u_admin'] = $row['user_admin'];
                    $_SESSION['u_address'] = $row['user_address'];
                    $_SESSION['u_post'] = $row['user_postcode'];
                    $_SESSION['u_city'] = $row['user_city'];
                    header("Location: ../login.php?login=success");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../login.php?login=error");
    exit();
}
