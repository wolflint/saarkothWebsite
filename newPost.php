<?php
$pageTitle = "Saarkoth - Add News"; include_once 'includes/header.php';

if ($_SESSION['u_uid'] != 'admin') {
    header("Location: news.php?error=nopermission");
}
?>


<!-- SECTIONS -->
<main class="container">
    <div class="row">

        <form class="col s10 offset-s1" action="newPost.inc.php" method="post">
            <div class="row">
                <h1>Add new post</h1>

                <div class="input-field">
                    <input type="text" name="p_title" id="p_title">
                    <label for="p_title">Post Title</label>
                </div>

                <!-- REPLACE THIS WITH AN IMAGE UPLOAD <div class="input-field">
                    <input type="text" name="p_title" id="p_title">
                    <label for="p_title">Post Title</label>
                </div> -->

                <div class="input-field">
                    <textarea name="p_content" class="materialize-textarea" id="textarea1"></textarea>
                    <label for="textarea1">Post Content</label>
                </div>

            </div>
        </form>

    </div>
</main>

<script type="text/javascript">
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
</script>

<?php include('includes/footer.php'); ?>
