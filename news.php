<?php $pageTitle = "Saarkoth - News"; include_once 'includes/header.php'; include_once 'includes/dbh.inc.php';?>

<!-- SECTIONS -->
<main class="container">
	<div class="row">
			<?php
			if (isset($_SESSION['u_uid']) && $_SESSION['u_admin'] > 0) {
				echo "<a class=\"btn right\" href=\"newPost.php\">New Post</a>";
			}
			?>
			<div class="col m8 offset-m2">
			<?php

				$sql = "SELECT * FROM news INNER JOIN users ON news.users_user_id=users.user_id ORDER BY post_id DESC";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					$news ="";
					while ($row = mysqli_fetch_assoc($result)) {
						$p_id = $row['post_id'];
						$p_title = htmlspecialchars($row['title']);
						$p_img = $row['image'];
						//Remove html tags add line breaks
						$p_content = htmlspecialchars($row['content']);
						$p_content = nl2br($p_content);
						$p_content = '<p>' . preg_replace('#(<br />[\r\n]+){2}#', '</p><p>', $p_content) . '</p>';
						$p_user = $row['user_uid'];
						$p_date = $row['post_date'];

						if (isset($_SESSION['u_uid']) && $_SESSION['u_admin'] > 0) {
							$edit = "
							<a class=\"btn\" href=\"includes/d_news.inc.php?pid=$p_id&image=$p_img\">Delete</a>
							<a class=\"btn\" href=\"e_news.php?pid=$p_id\">Edit</a>
							";
						} else {
							$edit ="";
						}



						$news .= "
									<div class=\"flow-text article-content\">
										<div class=\"row\">
										<div class=\"col m8 left\">
											<h2>$p_title</h2>
										</div>
										<div class=\"col m4 right\">
											<h5 class=\"right-align\">$p_date</h5>
											<h5 class=\"right-align\">$p_user</h5>
										</div>
										</div>
										<div class=\"row\">
										<img class=\"materialboxed responsive-img\" src=\"$p_img\" alt=\"\">
										</div>
										<div class=\"row\">
										<div>$p_content</div>
										$edit
										</div>
									</div>";
					}
					echo $news;
				} else {
					echo "No posts found";
				}
			?>
		</div>
	</div>
</main>

<?php include('includes/footer.php'); ?>
