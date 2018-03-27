<?php
session_start();

//check if button was pressed and if session is set
if (isset($_POST['submit']) && isset($_SESSION['u_id'])) {
    include_once 'dbh.inc.php';

    //get values from post, escape to string and set as variables
    $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    $conf_pass = mysqli_real_escape_string($conn, $_POST['conf_pass']);
    $seshID = $_SESSION['u_id'];

    //Error handlers
    //If any inputs are empty redirect back
    if (empty($old_pass) || empty($new_pass) || empty($conf_pass)){
        header("Location: ../editPassword.php?edit=empty");
        exit();
    } else {
        //if no results redirect back
        $sql = "SELECT user_pwd FROM users WHERE user_id =$seshID;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../editPassword.php?edit=error");
            exit();
        } else {
            //check if password from POST matches password in the database
            if ($row = mysqli_fetch_assoc($result)) {
                //De-hashing password
                $hashedPwdCheck = password_verify($old_pass, $row['user_pwd']);
                //if false redirect with error
                if ($hashedPwdCheck == false) {
                    header("Location: ../editPassword.php?edit=error");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //Update old password
                    //if new pass and old pass don't match redirect with error
                    if ($new_pass != $conf_pass) {
                        header("Location: ../editPassword.php?edit=error");
                        exit();
                        //if new pass and old pass match, hash the password and update in DB then relocate with success message
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
