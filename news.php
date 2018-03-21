<?php $pageTitle = "Saarkoth - News"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php';?>

<!-- SECTIONS -->
<main class="container">
<?php
if (isset($_SESSION['u_uid'])) {
	if ($_SESSION['u_uid'] == 'admin') {
		echo "<a class=\"right\" href=\"newPost.php\">New Post</a>";
	}
	$sql = "SELECT * FROM news ORDER BY post_id DESC;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$p_id = $row['post_id'];
			$p_title = htmlspecialchars($row['title']);
			$p_img = $row['image'];
			$p_content = htmlspecialchars($row['content']);
			$p_user = $row['users_user_id'];
			$p_date = $row['post_date'];

			$news .= "<div><h1>$p_title</h1><p>$p_date</p><img src=\"$p_img\" alt=\"\"><p>$p_content</p></div>";
		}
		echo $news;
	}
}

$test = "<img src=\"assets/logo.png\" alt=\"\">";
$fixed = htmlspecialchars($test);
echo $fixed;
?>
</main>

<?php include('includes/footer.php'); ?>
