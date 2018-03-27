<?php
	$pageTitle = "Saarkoth - Music";
	include_once 'includes/header.php'; include_once 'includes/dbh.inc.php' ?>


    <!-- SECTIONS -->
    <main class="container">
            <div class="row">

                <div class="col s12">
                    <!-- SECTION TITLE -->
                    <h1>Songs</h1>
                </div>
                <!-- CARDS -->
				<?php
				//select all music from database
				$sql = "SELECT * FROM music ORDER BY album AND track_no;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				//if no results display error message
				if ($resultCheck < 1) {
					echo "No music to display";
					//if there are results display all of them as cards
				} elseif ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class=\"col m4\">
		                    <div class=\"card\">
		                        <div class=\"card-image\">
		                            <img class=\"materialboxed\" src=\"./assets/music/" . $row['cover'] . "\"alt=\"\">
									</div>
			                        <div class=\"card-content grey darken-4\">
			                            <p>Title: " . $row['title'] . "</p>
			                            <p>Track: " . $row['track_no'] . "</p>
			                            <p>Album: " . $row['album'] . "</p>
			                            <p>Artist: " . $row['artist'] . "</p>
			                            <p>Year: " . $row['year'] . "</p>
			                            <p>Genre: " . $row['genre'] . "</p>
			                            <p>Length: " . $row['track_time'] . "</p>
			                        </div>
			                    </div>
			                </div>";

					}
				}
				?>
    </main>

    <?php include('includes/footer.php'); ?>
