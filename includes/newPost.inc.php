<?php
session_start();
include_once 'dbh.inc.php';


if (isset($_POST['submit']) && isset($_SESSION['u_uid']) && $_SESSION['u_uid'] == 'admin') {
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
                if (isset($_SESSION['u_uid'])) {
                    if ($_SESSION['u_uid'] == 'admin') {
                        $sql = "INSERT INTO news (title, image, content, users_user_id, post_date) VALUES ('$title', '$fileDestination', '$content', '(SELECT user_id FROM users WHERE user_id = '$seshID')', NOW());";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            header("Location: ../newPost.php?=postsuccess");
                        } else {
                            echo "You're a failure!";
                        }
                    }
                }
            } else {
                echo "Your file is too big.";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type.";
    }
}
