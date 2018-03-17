<?php $pageTitle = "Saarkoth - News"; include_once 'includes/header.php';?>

<!-- SECTIONS -->
<main class="container">
<?php if ($_SESSION['u_uid'] == 'admin') {
	echo "<a class=\"right\" href=\"newPost.php\">New Post</a>";
} ?>
</main>

<?php include('includes/footer.php'); ?>
