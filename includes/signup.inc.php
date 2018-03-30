<?php

//check is button was pressed
if (isset($_POST['submit'])) {

    //include DB connection config
    include_once 'dbh.inc.php';

    //escape POST to string and set values for variables
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check for empty fields, if empty redirect back
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        //Check if input characters are valid if not redirect back
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup.php?signup=invalid");
        exit();
        } else {
            //Check if email is valid if not redirect back
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=email");
                exit();
            } else {
                //check if user is already taken
                $sql - "SELECT * FROM users WHERE user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                } else {
                    //Hashin the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_admin) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd', '0');";
                    mysqli_query($conn, $sql);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }

    }


} else {
    //redirect back if button wasn't pressed
    header("Location: ../signup.php");
    exit();
}
