<?php
session_start();

if (isset($_POST['submit']) && isset($_SESSION['u_uid']) && $_SESSION['u_uid'] == 'admin') {
    include_once 'dbh.inc.php';
    
    $seshID = $_SESSION['u_id'];
    // Text variables
    $title = $_POST['p_title'];
    $content = $_POST['p_content'];

    // Image variables
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    // Error handling for file upload
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../assets/news/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                // header("Location: ../newPost.php?uploadsuccess");
                // echo "success?";
                $sql = "INSERT INTO news (title, image, content, users_user_id, post_date) VALUES ('$title', '$fileDestination', '$content', (SELECT user_id FROM users WHERE user_uid = 'admin'), NOW());";
                $result = mysqli_query($conn, $sql);

                if ($result === true) {
                    header("Location: ../newPost.php?=postsuccess");
                    exit();
                } else {
                    echo "You're a failure!";
                    exit();
                }
            } else {
                echo "Your file is too big.";
                exit();
            }
        } else {
            echo "There was an error uploading your file";
            exit();
        }
    } else {
        echo "You cannot upload files of this type.";
        exit();
    }
} else {
    header("Location: ../newPost.php?nopermission");
    exit();
}
