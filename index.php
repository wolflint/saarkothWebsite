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
						<h1 class="tinfo">Tour Info</h1>
						<table class="flow-text">
							<thead>
								<tr>
									<th>Date</th>
									<th>Venue</th>
									<th>Address</th>
									<th>Tickets</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>10/03/2018</td>
									<td>Maze</td>
									<td>257 Mansfield Rd, Nottingham</td>
									<td>£5.00</td>
									<td>
										<a class="waves-effect waves-dark btn cyan darken-3">
											<b>BUY</b>
										</a>
									</td>
								</tr>
								<tr>
									<td>17/03/2018</td>
									<td>Castle Hotel</td>
									<td>Lady Bank, Silver St, Tamworth</td>
									<td>£5.00</td>
									<td>
										<a class="waves-effect waves-dark btn cyan darken-3">
											<b>BUY</b>
										</a>
									</td>
								</tr>
								<tr>
									<td>24/03/2018</td>
									<td>George IV Public House</td>
									<td>34 Bore St, Lichfield</td>
									<td>£5.00</td>
									<td>
										<a class="waves-effect waves-dark btn cyan darken-3">
											<b>BUY</b>
										</a>
									</td>
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

<?php include('includes/footer.php'); ?>
