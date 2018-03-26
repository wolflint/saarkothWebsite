<?php
$pageTitle = "Saarkoth - Edit Article"; include_once 'includes/header.php';

if ($_SESSION['u_admin'] < 1) {
    header("Location: news.php?error=nopermission");
}
?>

<?php
    include_once 'includes/dbh.inc.php';
    if (!isset($_GET['pid'])) {
        header('Location: ../news.php?edit_error');
    } else {
        $p_id = $_GET['pid'];
        $sql = "SELECT * FROM news WHERE post_id=$p_id";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $p_title = $row['title'];
                // $p_image = $row['image'];
                $p_content = $row['content'];
            }
        }
        // $sql = "DELETE FROM news WHERE post_id = $p_id";
        // mysqli_query($conn, $sql);
        // header('Location: ../news.php?delete_success');
    }
?>

<!-- SECTIONS -->
<main class="container">
    <div class="row">

        <form class="col s10 offset-s1" action="includes/e_news.inc.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <h1>Add new post</h1>

                <div class="input-field">
                    <input hidden type="text" name="p_id" value="<?php echo $p_id; ?>">
                    <input type="text" name="p_title" id="p_title" value="<?php echo $p_title; ?>">
                    <label for="p_title">Post Title</label>
                </div>

                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="file">
                    </div>
                  <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                  </div>
                </div>

                <div class="input-field">
                    <textarea name="p_content" class="materialize-textarea" id="textarea1"><?php echo $p_content; ?></textarea>
                    <label for="textarea1">Post Content</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                    <i class="material-icons right">send</i>
                </button>

            </div>
        </form>

    </div>
</main>

<script type="text/javascript">
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
</script>

<?php include('includes/footer.php'); ?>
