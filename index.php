<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/favicon.png">
	<link rel="stylesheet" href="css/myStyle.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/index.css" type="text/css">
	<title>Saarkoth</title>
</head>

<body>
	<main>
		<section id="parallax-section">
			<div class="row">
				<!-- Logo image -->
				<div class="col s2"></div>
				<div class="col s8">
					<img id="logo-img" src="assets/logo.png" alt="">
				</div>
				<div class="col s2"></div>
			</div>
			<!-- Link runes -->
			<div class="row">

				<div>
					<div class="col s12 m3">
						<a class="runes" href="news.php">
							<h1>ᚠᚱᛁᚴᚾ</h1>
							<h6>News</h6>
						</a>
					</div>
				</div>

				<div>
					<div class="col s12 m3">
						<a class="runes" href="about.php">
							<h1>ᛋᛒᛁᚱᛁᛅ</h1>
							<h6>About</h6>
						</a>
					</div>
				</div>

				<div>
					<div class="col s12 m3">
						<a class="runes" href="music.php">
							<h1>ᚼᛚᛅ</h1>
							<h6>Music</h6>
						</a>
					</div>
				</div>

				<div>
					<div class="col s12 m3">
						<a class="runes" href="merch.php">
							<h1>ᚴᛅᚢᛒᛅ</h1>
							<h6>Merchandise</h6>
						</a>
					</div>
				</div>

				<!-- SCROLL BUTTON -->
				<div class="scroll-button">
					<a href="#tour" class="smooth-scroll">
						Tour Info
						<br>
						<i class="medium material-icons">keyboard_arrow_down</i>
					</a>
				</div>

			</div>
		</section>

		<!-- TOUR INFO SECTION -->
		<section id="tour">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<h1 class="tinfo" id="tour">Tour Info</h1>
						<?php
						//db config file and session
						include_once 'includes/dbh.inc.php';
						session_start();
						//check if session is set
						if (isset($_SESSION['u_id'])) {
						if ($_SESSION['u_admin'] > 0) {
							echo "<a class=\"btn\" href=\"addEvent.php\">Add Events</a>";
						}
					}
						?>
						<table class="flow-text">
							<thead>
								<tr>
									<th>Date</th>
									<th>Venue</th>
									<th>Address</th>
									<th>Tickets</th>
									<?php
									if (isset($_SESSION['u_id'])) {
									if ($_SESSION['u_admin'] > 0) {
										echo "<th> Delete? </th>";
									}
								} ?>
								</tr>
							</thead>

							<tbody>
								<tr>
									<?php
									$sql = "SELECT * FROM tour WHERE date > NOW() ORDER BY date ASC;";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck < 1) {
										echo "No events";
										} elseif ($resultCheck > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											echo "<tr><td>" . $row['date'] . "</td>";
											echo "<td>" . $row['venue'] . "</td>";
											echo "<td>" . $row['address'] . "</td>";
											echo "<td>£" . number_format($row['price'], 2) . "</td>";
											if (isset($_SESSION['u_id'])) {
												if ($_SESSION['u_admin'] > 0) {
													echo "<td><a href=\"includes/d_event.inc.php?id=" . $row['id'] . "\" class=\"btn red darken-4\">Delete</a></td>";
												}
											}
											echo "</tr>";
										}
									}
									?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<!-- SCROLL BUTTON -->
				<div class="scroll-button">
					<a href="#parallax-section" class="smooth-scroll">
						<i class="medium material-icons">keyboard_arrow_up</i>
					</a>
				</div>

			</div>
		</section>
	</main>
<?php include_once 'includes/footer.php' ?>
