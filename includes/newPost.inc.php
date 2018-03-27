<?php
session_start();

//check if button was pressed, if session is set and if user has admin permission
if (isset($_POST['submit']) && isset($_SESSION['u_uid']) && $_SESSION['u_admin'] > 0) {
    //include connection config
    include_once 'dbh.inc.php';

    //set variables and escape them to string
    $seshID = $_SESSION['u_id'];
    // Text variables
    $title = mysqli_real_escape_string($conn, $_POST['p_title']);
    $content = mysqli_real_escape_string($conn, $_POST['p_content']);

    // Image variables
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //get file extension from full file name
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    //set allowed file types
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    // Error handling for file upload
    //check if file type is allowed
    if (in_array($fileActualExt, $allowed)) {
        //check for upload errors
        if ($fileError === 0) {
            //check if file size is within limit
            if ($fileSize < 1000000) {
                //set values for variables which will be inserted into database and move uploaded file from temp location to real location
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../assets/news/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $fileDestination = 'assets/news/'.$fileNameNew;
                //insert the variables into DB
                $sql = "INSERT INTO news (title, image, content, users_user_id, post_date) VALUES ('$title', '$fileDestination', '$content', '$seshID', NOW())";
                $result = mysqli_query($conn, $sql);

                //if query successful redirect with success message
                //if not display an encouraging message
                if ($result = true) {
                    header("Location: ../newPost.php?=postsuccess");
                    exit();
                } else {
                    echo "You're a failure!";
                    exit();
                }
            } else {
                //if file is too big display message
                echo "Your file is too big.";
                exit();
            }
        } else {
            //if there are errors uploading display message
            echo "There was an error uploading your file";
            exit();
        }
    } else {
        //if unsupported file display message
        echo "You cannot upload files of this type.";
        exit();
    }
} else {
    //if not an admin redirect
    header("Location: ../newPost.php?nopermission");
    exit();
}
